<?php

namespace App\Jobs;

use App\Models\ImageOptimization;
use App\Services\ImageOptimizationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class OptimizeImageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $backoff = 60;

    public int $timeout = 120;

    public function __construct(
        public int $imageId
    ) {
        $this->onQueue('image-optimization');
    }

    public function handle(ImageOptimizationService $service): void
    {
        $record = ImageOptimization::find($this->imageId);

        if (! $record) {
            Log::warning('OptimizeImageJob: Record not found', ['id' => $this->imageId]);

            return;
        }

        if ($record->status === 'completed') {
            Log::info('OptimizeImageJob: Already processed', ['id' => $this->imageId]);

            return;
        }

        Log::info('OptimizeImageJob: Starting optimization', ['id' => $this->imageId]);

        $success = $service->processQueueJob($this->imageId);

        if (! $success) {
            throw new \Exception("Image optimization failed for ID: {$this->imageId}");
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('OptimizeImageJob: Failed permanently', [
            'id' => $this->imageId,
            'error' => $exception->getMessage(),
        ]);

        ImageOptimization::where('id', $this->imageId)
            ->update([
                'status' => 'failed',
                'error_message' => $exception->getMessage(),
            ]);
    }

    public function retryUntil(): \DateTime
    {
        return now()->addHours(1);
    }
}
