<?php

namespace Database\Seeders\Support;

use Illuminate\Support\Facades\File;

class CaseStudyImageInstaller
{
    private const MAX_BYTES = 204800; // 200 KB

    /**
     * @param  array<string, string>  $urlMap  source filename => image URL
     */
    public function ensureSources(string $imageSet, array $urlMap): void
    {
        $sourceDir = database_path('seeders/images/'.$imageSet.'/sources');
        File::ensureDirectoryExists($sourceDir);

        foreach ($urlMap as $filename => $url) {
            $path = $sourceDir.'/'.$filename;
            if (File::exists($path) && filesize($path) > 1000) {
                continue;
            }

            $context = stream_context_create([
                'http' => [
                    'timeout' => 60,
                    'user_agent' => 'MirashkaCaseStudySeeder/1.0',
                ],
            ]);

            $content = @file_get_contents($url, false, $context);
            if ($content) {
                File::put($path, $content);
            }
        }
    }

    /**
     * @param  array<string, string>  $map  source filename (in seed dir) => public webp basename
     */
    public function installToCaseStudyDir(array $map, string $imageSet): array
    {
        $sourceDir = database_path('seeders/images/'.$imageSet.'/sources');
        $destDir = public_path('assets/admin/image/case-study');

        File::ensureDirectoryExists($sourceDir);
        File::ensureDirectoryExists($destDir);

        $paths = [];

        foreach ($map as $sourceFile => $webpName) {
            $source = $sourceDir.'/'.$sourceFile;
            if (! File::exists($source)) {
                continue;
            }

            $dest = $destDir.'/'.$webpName;
            $this->convertToWebp($source, $dest);
            $paths[$sourceFile] = 'assets/admin/image/case-study/'.$webpName;
        }

        return $paths;
    }

    /**
     * @param  array<string, string>  $map
     */
    public function installToMediaDir(array $map, string $imageSet): array
    {
        $sourceDir = database_path('seeders/images/'.$imageSet.'/sources');
        $destDir = public_path('assets/admin/image/case-study/media');

        File::ensureDirectoryExists($sourceDir);
        File::ensureDirectoryExists($destDir);

        $filenames = [];

        foreach ($map as $sourceFile => $webpName) {
            $source = $sourceDir.'/'.$sourceFile;
            if (! File::exists($source)) {
                continue;
            }

            $dest = $destDir.'/'.$webpName;
            $this->convertToWebp($source, $dest, 1200);
            $filenames[] = $webpName;
        }

        return $filenames;
    }

    private function convertToWebp(string $source, string $dest, int $maxWidth = 1600): void
    {
        $image = $this->loadImage($source);
        if (! $image) {
            return;
        }

        $width = imagesx($image);
        $height = imagesy($image);

        if ($width > $maxWidth) {
            $newHeight = (int) round($height * ($maxWidth / $width));
            $resized = imagecreatetruecolor($maxWidth, $newHeight);
            imagecopyresampled($resized, $image, 0, 0, 0, 0, $maxWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $resized;
        }

        $quality = 82;
        do {
            imagewebp($image, $dest, $quality);
            $size = filesize($dest) ?: PHP_INT_MAX;
            $quality -= 5;
        } while ($size > self::MAX_BYTES && $quality >= 50);

        imagedestroy($image);
    }

    private function loadImage(string $path)
    {
        $type = exif_imagetype($path);

        return match ($type) {
            IMAGETYPE_JPEG => imagecreatefromjpeg($path),
            IMAGETYPE_PNG => imagecreatefrompng($path),
            IMAGETYPE_WEBP => imagecreatefromwebp($path),
            default => null,
        };
    }
}
