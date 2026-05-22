<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use App\Models\CaseStudyMedia;
use Database\Seeders\Support\CaseStudyImageInstaller;
use Illuminate\Database\Seeder;

class MirashkaCaseStudiesSeeder extends Seeder
{
    public function run(): void
    {
        $installer = new CaseStudyImageInstaller;
        $entries = config('case_studies', []);

        foreach ($entries as $entry) {
            $imageSet = $entry['image_set'];

            if (! empty($entry['download_sources']) && ! empty($entry['source_urls'])) {
                $installer->ensureSources($imageSet, $entry['source_urls']);
            }

            $mainPaths = $installer->installToCaseStudyDir(
                $entry['main_images'],
                $imageSet
            );

            $galleryFiles = $installer->installToMediaDir(
                $entry['gallery_images'],
                $imageSet
            );

            $sourceKeys = array_keys($entry['main_images']);

            $data = [
                'title' => $entry['title'],
                'slug' => $entry['slug'],
                'client_name' => $entry['client_name'],
                'industry' => $entry['industry'],
                'reach' => $entry['reach'],
                'short_description' => $entry['short_description'],
                'challenge' => $entry['challenge'],
                'solution' => $entry['solution'],
                'strategy' => $entry['strategy'],
                'results' => $entry['results'],
                'impact_highlights' => $entry['impact_highlights'],
                'media_coverage' => $entry['media_coverage'],
                'featured_image' => $mainPaths[$sourceKeys[0] ?? ''] ?? null,
                'image_two' => $mainPaths[$sourceKeys[1] ?? ''] ?? null,
                'image_three' => $mainPaths[$sourceKeys[2] ?? ''] ?? null,
                'image_four' => $mainPaths[$sourceKeys[3] ?? ''] ?? null,
                'status' => 1,
            ];

            $caseStudy = CaseStudy::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );

            CaseStudyMedia::query()->where('case_study_id', $caseStudy->id)->delete();

            foreach ($galleryFiles as $index => $filename) {
                CaseStudyMedia::create([
                    'case_study_id' => $caseStudy->id,
                    'image' => $filename,
                    'sort_order' => $index + 1,
                ]);
            }
        }
    }
}
