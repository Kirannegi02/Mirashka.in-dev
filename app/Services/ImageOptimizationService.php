<?php

namespace App\Services;

use App\Models\ImageOptimization;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageOptimizationService
{
    private const TARGET_WIDTHS = [300, 600, 1200];

    private const OUTPUT_FORMAT = 'webp';

    private const MAX_FILE_SIZE = 300 * 1024; // 300KB in bytes

    private const INITIAL_QUALITY = 80;

    private const MIN_QUALITY = 30;

    private ImageManager $imageManager;

    public function __construct(
        private ImageUploadService $uploadService
    ) {
        $this->imageManager = new ImageManager(new Driver);
    }

    public function processImage(UploadedFile $file, string $context = 'default'): ?ImageOptimization
    {
        $originalPath = $this->uploadService->storeOriginal($file, $context);

        if (! $originalPath) {
            Log::error('ImageOptimization: Failed to store original image', [
                'original_name' => $file->getClientOriginalName(),
            ]);

            return null;
        }

        $record = ImageOptimization::create([
            'original_path' => $originalPath,
            'original_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'status' => 'pending',
        ]);

        return $record;
    }

    public function processQueueJob(int $imageId): bool
    {
        $record = ImageOptimization::find($imageId);

        if (! $record) {
            Log::error("ImageOptimization: Record not found for ID {$imageId}");

            return false;
        }

        if ($record->status === 'completed') {
            Log::info('ImageOptimization: Image already processed', ['id' => $imageId]);

            return true;
        }

        $record->update(['status' => 'processing']);

        try {
            $this->optimizeImage($record);
            $record->update(['status' => 'completed']);

            Log::info('ImageOptimization: Successfully processed', [
                'id' => $imageId,
                'original_size' => $record->original_size,
                'optimized_size' => $record->optimized_size,
            ]);

            return true;
        } catch (\Exception $e) {
            $record->update([
                'status' => 'failed',
                'error_message' => $e->getMessage(),
            ]);

            Log::error('ImageOptimization: Processing failed', [
                'id' => $imageId,
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }

    private function optimizeImage(ImageOptimization $record): void
    {
        $fullPath = Storage::disk('public')->path($record->original_path);

        if (! file_exists($fullPath)) {
            throw new \Exception("Original file not found: {$record->original_path}");
        }

        $originalImage = $this->imageManager->read($fullPath);
        $width = $originalImage->width();
        $height = $originalImage->height();

        $record->update([
            'width' => $width,
            'height' => $height,
        ]);

        $optimizedDir = $this->getOptimizedDirectory($record->original_path);
        $this->ensureDirectoryExists($optimizedDir);

        $baseName = pathinfo($record->original_path, PATHINFO_FILENAME);
        $optimizedFileName = $baseName.'.webp';
        $optimizedRelativePath = $optimizedDir.'/'.$optimizedFileName;

        $resizedImage = $this->resizeImage($originalImage, 1200);
        $webpData = $this->compressToSize($resizedImage, self::MAX_FILE_SIZE);
        Storage::disk('public')->put($optimizedRelativePath, $webpData);

        $record->update([
            'optimized_path' => $optimizedRelativePath,
            'optimized_size' => strlen($webpData),
        ]);

        foreach (self::TARGET_WIDTHS as $targetWidth) {
            if ($width > $targetWidth) {
                $this->generateThumbnail($record, $targetWidth, $optimizedDir, $baseName);
            }
        }
    }

    private function generateThumbnail(
        ImageOptimization $record,
        int $width,
        string $dir,
        string $baseName
    ): void {
        $fullPath = Storage::disk('public')->path($record->original_path);
        $thumbnailFileName = $baseName."_w{$width}.webp";
        $relativePath = $dir.'/'.$thumbnailFileName;

        $image = $this->imageManager->read($fullPath);
        $resized = $this->resizeImage($image, $width);
        $webpData = $this->compressToSize($resized, self::MAX_FILE_SIZE);

        Storage::disk('public')->put($relativePath, $webpData);

        $column = match ($width) {
            300 => 'thumbnail_300',
            600 => 'thumbnail_600',
            1200 => 'thumbnail_1200',
            default => null,
        };

        if ($column) {
            $record->update([$column => $relativePath]);
        }
    }

    private function compressToSize($image, int $maxSizeBytes): string
    {
        $quality = self::INITIAL_QUALITY;
        $webpData = $image->toWebp($quality);

        while (strlen($webpData) > $maxSizeBytes && $quality > self::MIN_QUALITY) {
            $quality -= 5;
            $webpData = $image->toWebp($quality);
        }

        return $webpData;
    }

    private function resizeImage($image, int $maxWidth)
    {
        if ($image->width() <= $maxWidth) {
            return $image;
        }

        return $image->resize(width: $maxWidth);
    }

    private function getOptimizedDirectory(string $originalPath): string
    {
        $dirname = pathinfo($originalPath, PATHINFO_DIRNAME);

        return $dirname.'/optimized';
    }

    private function ensureDirectoryExists(string $path): void
    {
        $fullPath = Storage::disk('public')->path($path);
        if (! is_dir($fullPath)) {
            mkdir($fullPath, 0755, true);
        }
    }

    public function getOptimizedUrl(?string $path, string $fallback = ''): string
    {
        if (empty($path)) {
            return $fallback;
        }

        return Storage::disk('public')->url($path);
    }

    public function getBestImagePath(?ImageOptimization $record, int $screenWidth = 1200): ?string
    {
        if (! $record || $record->status !== 'completed') {
            return null;
        }

        if ($screenWidth <= 300 && $record->thumbnail_300) {
            return $record->thumbnail_300;
        }

        if ($screenWidth <= 600 && $record->thumbnail_600) {
            return $record->thumbnail_600;
        }

        if ($screenWidth <= 1200 && $record->thumbnail_1200) {
            return $record->thumbnail_1200;
        }

        return $record->optimized_path ?? $record->original_path;
    }

    public function deleteOptimizedImages(ImageOptimization $record): void
    {
        $paths = array_filter([
            $record->optimized_path,
            $record->thumbnail_300,
            $record->thumbnail_600,
            $record->thumbnail_1200,
        ]);

        foreach ($paths as $path) {
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }

    public function findByOriginalPath(string $path): ?ImageOptimization
    {
        return ImageOptimization::where('original_path', $path)->first();
    }

    public function retryFailed(): int
    {
        return ImageOptimization::where('status', 'failed')
            ->update(['status' => 'pending', 'error_message' => null]);
    }

    public function cleanupOrphans(): int
    {
        $count = 0;
        $records = ImageOptimization::where('status', 'completed')->get();

        foreach ($records as $record) {
            if (! Storage::disk('public')->exists($record->original_path)) {
                $this->deleteOptimizedImages($record);
                $record->delete();
                $count++;
            }
        }

        return $count;
    }
}
