<?php

return [

    'enabled' => env('IMAGE_OPTIMIZATION_ENABLED', true),

    'max_upload_size' => env('IMAGE_MAX_UPLOAD_SIZE', 5 * 1024 * 1024), // 5MB max upload

    'max_file_size' => env('IMAGE_MAX_FILE_SIZE', 300 * 1024), // 300KB target max

    'allowed_mimes' => [
        'image/jpeg',
        'image/jpg',
        'image/png',
        'image/webp',
        'image/heic',
        'image/heif',
    ],

    'optimization' => [
        'format' => env('IMAGE_OPTIMIZATION_FORMAT', 'webp'),
        'quality' => env('IMAGE_OPTIMIZATION_QUALITY', 80),
        'max_width' => env('IMAGE_OPTIMIZATION_MAX_WIDTH', 1200),
        'min_quality' => 30,
        'thumbnails' => [
            300 => ['width' => 300, 'quality' => 70],
            600 => ['width' => 600, 'quality' => 75],
            1200 => ['width' => 1200, 'quality' => 80],
        ],
    ],

    'storage' => [
        'disk' => env('IMAGE_STORAGE_DISK', 'public'),
        'original_path' => 'uploads/original',
        'optimized_path' => 'uploads/optimized',
    ],

    'queue' => [
        'connection' => env('IMAGE_QUEUE_CONNECTION', null),
        'queue' => env('IMAGE_QUEUE_NAME', 'image-optimization'),
    ],

    'fallback' => [
        'use_original_on_failure' => true,
        'placeholder_enabled' => env('IMAGE_PLACEHOLDER_ENABLED', false),
    ],

    'cache' => [
        'enabled' => env('IMAGE_CACHE_ENABLED', true),
        'ttl' => env('IMAGE_CACHE_TTL', 3600),
    ],

];
