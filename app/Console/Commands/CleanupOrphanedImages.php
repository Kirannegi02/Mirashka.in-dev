<?php

namespace App\Console\Commands;

use App\Services\ImageOptimizationService;
use Illuminate\Console\Command;

class CleanupOrphanedImages extends Command
{
    protected $signature = 'images:cleanup-orphans';

    protected $description = 'Clean up orphaned image optimization records';

    public function handle(ImageOptimizationService $service): int
    {
        $this->info('Cleaning up orphaned image optimization records...');

        $count = $service->cleanupOrphans();

        $this->info("Cleaned up {$count} orphaned records.");

        return Command::SUCCESS;
    }
}
