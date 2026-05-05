<?php

namespace App\Console\Commands;

use App\Models\ImageOptimization;
use App\Services\ImageOptimizationService;
use Illuminate\Console\Command;

class ProcessPendingImages extends Command
{
    protected $signature = 'images:process-pending 
                            {--limit=100 : Maximum number of images to process}
                            {--failed : Process failed images instead}';

    protected $description = 'Process pending image optimization jobs';

    public function handle(ImageOptimizationService $service): int
    {
        $limit = (int) $this->option('limit');
        $failed = $this->option('failed');

        $query = ImageOptimization::query();

        if ($failed) {
            $query->failed();
            $this->info('Processing failed images...');
        } else {
            $query->pending();
            $this->info('Processing pending images...');
        }

        $images = $query->limit($limit)->get();

        if ($images->isEmpty()) {
            $this->info('No images to process.');

            return Command::SUCCESS;
        }

        $bar = $this->output->createProgressBar($images->count());
        $bar->start();

        $success = 0;
        $failed = 0;

        foreach ($images as $image) {
            try {
                $result = $service->processQueueJob($image->id);

                if ($result) {
                    $success++;
                } else {
                    $failed++;
                }
            } catch (\Exception $e) {
                $failed++;
                $this->newLine();
                $this->error("Failed to process image ID {$image->id}: {$e->getMessage()}");
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);

        $this->info("Processed {$images->count()} images: {$success} successful, {$failed} failed.");

        return $failed > 0 ? Command::FAILURE : Command::SUCCESS;
    }
}
