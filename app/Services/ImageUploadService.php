<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageUploadService
{
    private const ALLOWED_MIMES = [
        'image/jpeg',
        'image/jpg',
        'image/png',
        'image/webp',
        'image/heic',
        'image/heif',
    ];

    private const MAX_UPLOAD_SIZE = 5 * 1024 * 1024; // 5MB - max upload size

    public function validateImage(UploadedFile $file): array
    {
        $errors = [];

        if (! in_array($file->getMimeType(), self::ALLOWED_MIMES)) {
            $errors[] = 'File type not supported. Allowed: JPEG, PNG, WebP, HEIC';
        }

        if ($file->getSize() > self::MAX_UPLOAD_SIZE) {
            $errors[] = 'File size exceeds maximum limit of 5MB';
        }

        if (! $file->isValid()) {
            $errors[] = 'File upload failed';
        }

        return $errors;
    }

    public function storeOriginal(UploadedFile $file, string $context = 'default'): ?string
    {
        $errors = $this->validateImage($file);

        if (! empty($errors)) {
            return null;
        }

        $directory = $this->getUploadDirectory($context);
        $this->ensureDirectoryExists($directory);

        $extension = $file->getClientOriginalExtension() ?: 'jpg';
        $filename = $this->generateUniqueFilename($extension);
        $relativePath = $directory.'/'.$filename;

        $tempPath = $file->getPathname();

        if (Storage::disk('public')->put($relativePath, file_get_contents($tempPath))) {
            return $relativePath;
        }

        return null;
    }

    public function storeFromPublicPath(string $publicPath, string $context = 'default'): ?string
    {
        $fullPath = public_path($publicPath);

        if (! file_exists($fullPath)) {
            return null;
        }

        $directory = $this->getUploadDirectory($context);
        $this->ensureDirectoryExists($directory);

        $extension = pathinfo($fullPath, PATHINFO_EXTENSION) ?: 'jpg';
        $filename = $this->generateUniqueFilename($extension);
        $relativePath = $directory.'/'.$filename;

        if (Storage::disk('public')->put($relativePath, file_get_contents($fullPath))) {
            return $relativePath;
        }

        return null;
    }

    private function getUploadDirectory(string $context): string
    {
        $baseDir = 'uploads/'.$context;
        $dateFolder = now()->format('Y/m/d');

        return $baseDir.'/'.$dateFolder;
    }

    private function ensureDirectoryExists(string $path): void
    {
        $fullPath = Storage::disk('public')->path($path);
        if (! is_dir($fullPath)) {
            mkdir($fullPath, 0755, true);
        }
    }

    private function generateUniqueFilename(string $extension): string
    {
        return Str::uuid()->toString().'_'.time().'.'.$extension;
    }

    public function deleteFile(?string $relativePath): bool
    {
        if (empty($relativePath)) {
            return false;
        }

        if (Storage::disk('public')->exists($relativePath)) {
            return Storage::disk('public')->delete($relativePath);
        }

        return false;
    }

    public function fileExists(?string $relativePath): bool
    {
        if (empty($relativePath)) {
            return false;
        }

        return Storage::disk('public')->exists($relativePath);
    }

    public function getFullPath(?string $relativePath): ?string
    {
        if (empty($relativePath)) {
            return null;
        }

        if ($this->fileExists($relativePath)) {
            return Storage::disk('public')->path($relativePath);
        }

        return null;
    }

    public function getUrl(?string $relativePath): string
    {
        if (empty($relativePath)) {
            return '';
        }

        return Storage::disk('public')->url($relativePath);
    }
}
