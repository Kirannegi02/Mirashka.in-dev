<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageService
{
    private const ALLOWED_MIMES = [
        'image/jpeg',
        'image/jpg',
        'image/png',
        'image/webp',
    ];

    private const MAX_UPLOAD_SIZE = 10 * 1024 * 1024;

    private const TARGET_MAX_SIZE = 300 * 1024;

    private const INITIAL_QUALITY = 80;

    private const MIN_QUALITY = 30;

    private ImageManager $imageManager;

    public function __construct()
    {
        $this->imageManager = new ImageManager(new Driver);
    }

    public function upload(UploadedFile $file, string $context = 'default'): ?string
    {
        if (! $this->validateFile($file)) {
            return null;
        }

        $directory = $this->getUploadDirectory($context);
        $this->ensureDirectoryExists($directory);

        $filename = $this->generateFilename();
        $tempPath = $file->getPathname();

        try {
            $image = $this->imageManager->read($tempPath);
            $webpData = $this->compressToTargetSize($image);

            $relativePath = $directory.'/'.$filename;

            if (! Storage::disk('public')->put($relativePath, $webpData)) {
                Log::error('ImageService: Failed to store optimized image', [
                    'path' => $relativePath,
                ]);

                return null;
            }

            Log::info('ImageService: Image optimized successfully', [
                'original_size' => $file->getSize(),
                'optimized_size' => strlen($webpData),
                'path' => $relativePath,
            ]);

            return $relativePath;
        } catch (\Exception $e) {
            Log::error('ImageService: Optimization failed', [
                'error' => $e->getMessage(),
                'file' => $file->getClientOriginalName(),
            ]);

            return null;
        }
    }

    public function delete(?string $relativePath): bool
    {
        if (empty($relativePath)) {
            return false;
        }

        if (str_starts_with($relativePath, 'uploads/')) {
            return Storage::disk('public')->delete($relativePath);
        }

        if (str_starts_with($relativePath, 'assets/')) {
            $fullPath = public_path($relativePath);
            if (file_exists($fullPath)) {
                return unlink($fullPath);
            }

            return false;
        }

        return false;
    }

    public function exists(?string $relativePath): bool
    {
        if (empty($relativePath)) {
            return false;
        }

        if (str_starts_with($relativePath, 'uploads/')) {
            return Storage::disk('public')->exists($relativePath);
        }

        if (str_starts_with($relativePath, 'assets/')) {
            return file_exists(public_path($relativePath));
        }

        return file_exists(public_path('assets/admin/image/'.basename($relativePath)));
    }

    public function getFullPath(?string $relativePath): ?string
    {
        if (empty($relativePath)) {
            return null;
        }

        if (str_starts_with($relativePath, 'uploads/')) {
            $path = Storage::disk('public')->path($relativePath);
            if (file_exists($path)) {
                return $path;
            }
        }

        if (str_starts_with($relativePath, 'assets/')) {
            $path = public_path($relativePath);
            if (file_exists($path)) {
                return $path;
            }
        }

        return null;
    }

    public function getUrl(?string $relativePath): string
    {
        if (empty($relativePath)) {
            return '';
        }

        if (str_starts_with($relativePath, 'uploads/')) {
            return Storage::disk('public')->url($relativePath);
        }

        if (str_starts_with($relativePath, 'assets/')) {
            return asset($relativePath);
        }

        return asset('assets/admin/image/'.$relativePath);
    }

    private function validateFile(UploadedFile $file): bool
    {
        if (! in_array($file->getMimeType(), self::ALLOWED_MIMES)) {
            Log::warning('ImageService: Invalid mime type', [
                'mime' => $file->getMimeType(),
            ]);

            return false;
        }

        if ($file->getSize() > self::MAX_UPLOAD_SIZE) {
            Log::warning('ImageService: File too large', [
                'size' => $file->getSize(),
            ]);

            return false;
        }

        if (! $file->isValid()) {
            Log::warning('ImageService: Invalid upload', [
                'error' => $file->getError(),
            ]);

            return false;
        }

        return true;
    }

    private function compressToTargetSize($image): string
    {
        $quality = self::INITIAL_QUALITY;
        $webpData = $image->toWebp($quality);

        while (strlen($webpData) > self::TARGET_MAX_SIZE && $quality > self::MIN_QUALITY) {
            $quality -= 5;
            $webpData = $image->toWebp($quality);
        }

        return $webpData;
    }

    private function getUploadDirectory(string $context): string
    {
        return 'uploads/'.$context.'/'.now()->format('Y/m/d');
    }

    private function ensureDirectoryExists(string $path): void
    {
        $fullPath = Storage::disk('public')->path($path);
        if (! is_dir($fullPath)) {
            mkdir($fullPath, 0755, true);
        }
    }

    private function generateFilename(): string
    {
        return Str::uuid()->toString().'_'.time().'.webp';
    }
}
