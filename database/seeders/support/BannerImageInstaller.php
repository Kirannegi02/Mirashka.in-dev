<?php

namespace Database\Seeders\Support;

use Illuminate\Support\Facades\File;

class BannerImageInstaller
{
    private const MAX_BYTES = 350000;

    private const SOURCE_DIR = 'banners';

    /**
     * @param  array<string, string>  $urlMap  source filename => image URL
     */
    public function ensureSources(array $urlMap): void
    {
        $sourceDir = database_path('seeders/images/'.self::SOURCE_DIR.'/sources');
        File::ensureDirectoryExists($sourceDir);

        foreach ($urlMap as $filename => $url) {
            $path = $sourceDir.'/'.$filename;
            if (File::exists($path) && filesize($path) > 1000) {
                continue;
            }

            $context = stream_context_create([
                'http' => [
                    'timeout' => 60,
                    'user_agent' => 'MirashkaBannerSeeder/1.0',
                ],
            ]);

            $content = @file_get_contents($url, false, $context);
            if ($content) {
                File::put($path, $content);
            }
        }
    }

    /**
     * @param  array<string, string>  $map  source filename => webp basename
     * @return array<string, string>  source filename => public path
     */
    public function install(array $map): array
    {
        $sourceDir = database_path('seeders/images/'.self::SOURCE_DIR.'/sources');
        $destDir = public_path('assets/admin/image/banner');

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
            $paths[$sourceFile] = 'assets/admin/image/banner/'.$webpName;
        }

        return $paths;
    }

    private function convertToWebp(string $source, string $dest, int $maxWidth = 1920): void
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
