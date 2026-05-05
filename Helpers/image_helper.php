<?php

/**
 * Global helper functions for image handling
 *
 * Provides consistent image URL generation with fallback support
 * for both old (public/assets/) and new (storage/app/public/) systems.
 */
if (! function_exists('imageUrl')) {
    /**
     * Generate proper image URL from database path
     *
     * @param  string|null  $path  Database stored path
     * @param  string  $default  Default image if path is empty
     * @param  string|null  $context  Context for path resolution (banner, team, webinar, etc.)
     * @return string Complete URL to the image
     */
    function imageUrl(?string $path, string $default = 'admin_assets/img/default.png', ?string $context = null): string
    {
        if (empty($path)) {
            return asset($default);
        }

        // New storage system: uploads/...
        if (str_starts_with($path, 'uploads/')) {
            return asset('storage/'.$path);
        }

        // Old public system: assets/admin/image/...
        if (str_starts_with($path, 'assets/') || str_starts_with($path, '/assets/')) {
            return asset(ltrim($path, '/'));
        }

        // If path is already a full URL
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        // If path contains a context prefix like "case-study/media/image.jpg"
        if (str_contains($path, '/')) {
            // Likely a path like "case-study/media/image.jpg"
            return asset('assets/admin/image/'.$path);
        }

        // Assume old system path format (just filename)
        // Check if it's a known image type (has extension)
        if (preg_match('/\.(jpg|jpeg|png|gif|webp|svg)$/i', $path)) {
            // Use provided context or default to 'banner'
            $contextPath = $context ?? 'banner';

            return asset('assets/admin/image/'.$contextPath.'/'.$path);
        }

        return asset($path);
    }
}

if (! function_exists('imagePath')) {
    /**
     * Get the full filesystem path for an image
     *
     * @param  string|null  $path  Database stored path
     * @return string|null Full filesystem path
     */
    function imagePath(?string $path): ?string
    {
        if (empty($path)) {
            return null;
        }

        // New storage system
        if (str_starts_with($path, 'uploads/')) {
            $storagePath = storage_path('app/public/'.$path);
            if (file_exists($storagePath)) {
                return $storagePath;
            }
        }

        // Old public system with full path
        if (str_starts_with($path, 'assets/')) {
            $publicPath = public_path($path);
            if (file_exists($publicPath)) {
                return $publicPath;
            }
        }

        // Path with context like "case-study/media/image.jpg"
        if (str_contains($path, '/')) {
            $publicPath = public_path('assets/admin/image/'.$path);
            if (file_exists($publicPath)) {
                return $publicPath;
            }
        }

        // Old public system - try common locations
        $possiblePaths = [
            public_path('assets/admin/image/'.$path),
            public_path($path),
        ];

        foreach ($possiblePaths as $publicPath) {
            if (file_exists($publicPath)) {
                return $publicPath;
            }
        }

        return null;
    }
}

if (! function_exists('imageExists')) {
    /**
     * Check if an image file exists
     *
     * @param  string|null  $path  Database stored path
     */
    function imageExists(?string $path): bool
    {
        return imagePath($path) !== null;
    }
}
