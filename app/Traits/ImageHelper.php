<?php

namespace App\Traits;

use App\Jobs\OptimizeImageJob;
use App\Models\ImageOptimization;
use App\Services\ImageOptimizationService;
use App\Services\ImageUploadService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageHelper
{
    protected static array $imageFields = [];

    public static function getImageFields(): array
    {
        return static::$imageFields ?? ['image'];
    }

    public static function setImageFields(array $fields): void
    {
        static::$imageFields = $fields;
    }

    public function imageOptimization(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(ImageOptimization::class, 'optimizable');
    }

    public function getOptimizedImageUrl(string $field = 'image'): ?string
    {
        $path = $this->getAttribute($field);

        if (! $path) {
            return null;
        }

        $optimization = $this->imageOptimization()
            ->where('original_path', 'like', '%/'.$path)
            ->orWhere('original_path', $path)
            ->first();

        if ($optimization && $optimization->isCompleted()) {
            return Storage::disk('public')->url($optimization->optimized_path);
        }

        return $this->getOriginalImageUrl($field);
    }

    public function getOriginalImageUrl(string $field = 'image'): ?string
    {
        $path = $this->getAttribute($field);

        if (! $path) {
            return null;
        }

        if (str_starts_with($path, 'uploads/')) {
            return Storage::disk('public')->url($path);
        }

        return asset('assets/admin/image/'.$this->getImageBasePath().'/'.$path);
    }

    protected function getImageBasePath(): string
    {
        return strtolower(class_basename($this));
    }

    public function processImageUpload(UploadedFile $file, string $field = 'image', string $context = 'default'): ?ImageOptimization
    {
        $uploadService = app(ImageUploadService::class);
        $optimizationService = app(ImageOptimizationService::class);

        $originalPath = $uploadService->storeOriginal($file, $context);

        if (! $originalPath) {
            return null;
        }

        $optimization = $optimizationService->processImage($file, $context);

        if ($optimization) {
            $optimization->update([
                'optimizable_type' => get_class($this),
                'optimizable_id' => $this->id,
            ]);

            OptimizeImageJob::dispatch($optimization->id);
        }

        return $optimization;
    }

    public function syncOptimizedPath(string $field, string $originalPath): void
    {
        $this->imageOptimization()
            ->where('original_path', $originalPath)
            ->update([
                'optimizable_type' => get_class($this),
                'optimizable_id' => $this->id,
            ]);
    }

    public function deleteOptimizedImages(): void
    {
        $optimizations = $this->imageOptimization()->get();

        foreach ($optimizations as $optimization) {
            app(ImageOptimizationService::class)->deleteOptimizedImages($optimization);
            $optimization->delete();
        }
    }

    public static function bootImageHelper(): void
    {
        static::deleting(function ($model) {
            if (method_exists($model, 'preventDeleting')) {
                return;
            }

            $model->deleteOptimizedImages();
        });
    }
}
