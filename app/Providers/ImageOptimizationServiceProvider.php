<?php

namespace App\Providers;

use App\Services\ImageOptimizationService;
use App\Services\ImageUploadService;
use Illuminate\Support\ServiceProvider;

class ImageOptimizationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ImageUploadService::class, function ($app) {
            return new ImageUploadService;
        });

        $this->app->singleton(ImageOptimizationService::class, function ($app) {
            return new ImageOptimizationService(
                $app->make(ImageUploadService::class)
            );
        });
    }

    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/image_optimization.php',
            'image_optimization'
        );
    }
}
