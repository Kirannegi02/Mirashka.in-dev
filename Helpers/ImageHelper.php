<?php

namespace App\Helpers;

use App\Models\ImageOptimization;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function getOptimizedUrl(?string $originalPath): ?string
    {
        if (! $originalPath) {
            return null;
        }

        $path = self::normalizePath($originalPath);

        $optimization = ImageOptimization::where(function ($query) use ($path) {
            $query->where('original_path', 'like', '%'.$path)
                ->orWhere('original_path', $path);
        })->completed()->first();

        if ($optimization && $optimization->optimized_path) {
            return Storage::disk('public')->url($optimization->optimized_path);
        }

        return self::getOriginalUrl($originalPath);
    }

    public static function getSrcset(?string $originalPath): ?string
    {
        if (! $originalPath) {
            return null;
        }

        $path = self::normalizePath($originalPath);

        $optimization = ImageOptimization::where(function ($query) use ($path) {
            $query->where('original_path', 'like', '%'.$path)
                ->orWhere('original_path', $path);
        })->completed()->first();

        if (! $optimization) {
            return null;
        }

        $srcset = [];
        $baseUrl = Storage::disk('public')->url('');

        if ($optimization->thumbnail_300) {
            $srcset[] = $baseUrl.ltrim($optimization->thumbnail_300, '/').' 300w';
        }

        if ($optimization->thumbnail_600) {
            $srcset[] = $baseUrl.ltrim($optimization->thumbnail_600, '/').' 600w';
        }

        if ($optimization->thumbnail_1200) {
            $srcset[] = $baseUrl.ltrim($optimization->thumbnail_1200, '/').' 1200w';
        }

        return ! empty($srcset) ? implode(', ', $srcset) : null;
    }

    public static function getBestUrl(?string $originalPath, int $screenWidth = 1200): ?string
    {
        if (! $originalPath) {
            return null;
        }

        $path = self::normalizePath($originalPath);

        $optimization = ImageOptimization::where(function ($query) use ($path) {
            $query->where('original_path', 'like', '%'.$path)
                ->orWhere('original_path', $path);
        })->completed()->first();

        if (! $optimization) {
            return self::getOriginalUrl($originalPath);
        }

        if ($screenWidth <= 300 && $optimization->thumbnail_300) {
            return Storage::disk('public')->url($optimization->thumbnail_300);
        }

        if ($screenWidth <= 600 && $optimization->thumbnail_600) {
            return Storage::disk('public')->url($optimization->thumbnail_600);
        }

        if ($screenWidth <= 1200 && $optimization->thumbnail_1200) {
            return Storage::disk('public')->url($optimization->thumbnail_1200);
        }

        return $optimization->optimized_path
            ? Storage::disk('public')->url($optimization->optimized_path)
            : self::getOriginalUrl($originalPath);
    }

    public static function getOriginalUrl(?string $path): ?string
    {
        if (! $path) {
            return null;
        }

        if (str_starts_with($path, 'uploads/')) {
            return Storage::disk('public')->url($path);
        }

        if (str_starts_with($path, '/')) {
            return asset($path);
        }

        return asset($path);
    }

    private static function normalizePath(string $path): string
    {
        return ltrim(str_replace(['/', '\\'], '/', $path), '/');
    }

    public static function isOptimized(?string $originalPath): bool
    {
        if (! $originalPath) {
            return false;
        }

        $path = self::normalizePath($originalPath);

        return ImageOptimization::where(function ($query) use ($path) {
            $query->where('original_path', 'like', '%'.$path)
                ->orWhere('original_path', $path);
        })->completed()->exists();
    }
}
