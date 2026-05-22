<?php

namespace Database\Seeders;

use App\Models\Banner;
use Database\Seeders\Support\BannerImageInstaller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MirashkaBannersSeeder extends Seeder
{
    public function run(): void
    {
        $items = config('banners', []);
        if ($items === []) {
            $this->command?->warn('No banners defined in config/banners.php');

            return;
        }

        $installer = new BannerImageInstaller;

        $urlMap = [];
        $installMap = [];
        foreach ($items as $item) {
            $urlMap[$item['image_source']] = $item['image_url'];
            $installMap[$item['image_source']] = $item['image_webp'];
        }

        $this->command?->info('Downloading banner source images…');
        $installer->ensureSources($urlMap);

        $this->command?->info('Installing banner WebP images…');
        $this->ensureMissingSources($items);
        $imagePaths = $installer->install($installMap);

        $seededTitles = [];

        foreach ($items as $item) {
            $imagePath = $imagePaths[$item['image_source']] ?? null;
            if (! $imagePath) {
                $this->command?->warn("Skipping \"{$item['title']}\": image not generated.");

                continue;
            }

            Banner::updateOrCreate(
                ['title' => $item['title']],
                [
                    'sub_heading' => $item['sub_heading'],
                    'description' => $item['description'],
                    'image' => $imagePath,
                    'button_text' => $item['button_text'],
                    'button_link' => $item['button_link'],
                    'status' => $item['status'],
                ]
            );

            $seededTitles[] = $item['title'];
        }

        Banner::query()
            ->whereNotIn('title', $seededTitles)
            ->update(['status' => 'disabled']);

        $this->command?->info('Seeded '.count($seededTitles).' home page banners.');
    }

    /**
     * @param  array<int, array<string, mixed>>  $items
     */
    private function ensureMissingSources(array $items): void
    {
        $sourceDir = database_path('seeders/images/banners/sources');
        $fallbacks = [
            $sourceDir.'/leadership-hiring.jpg',
            $sourceDir.'/hraas-solutions.jpg',
            $sourceDir.'/hr-advisory.jpg',
            public_path('assets/admin/image/banner/1770292338_banner2.jpg'),
        ];

        foreach ($items as $item) {
            $source = $sourceDir.'/'.$item['image_source'];
            if (File::exists($source) && filesize($source) > 1000) {
                continue;
            }

            foreach ($fallbacks as $fallback) {
                if (File::exists($fallback)) {
                    File::copy($fallback, $source);
                    $this->command?->warn("Used fallback image for \"{$item['title']}\".");

                    break;
                }
            }
        }
    }
}
