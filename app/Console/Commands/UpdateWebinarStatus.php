<?php

namespace App\Console\Commands;

use App\Models\webinar;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdateWebinarStatus extends Command
{
    protected $signature = 'webinars:update-status';

    protected $description = 'Update webinar status based on date (upcoming -> past)';

    public function handle(): int
    {
        $today = Carbon::today();

        $updated = Webinar::where('status', 'upcoming')
            ->whereDate('start_date', '<', $today)
            ->update(['status' => 'past']);

        $this->info("Updated {$updated} webinars to 'past' status.");

        Log::info('Webinar status update completed', ['updated_count' => $updated]);

        return Command::SUCCESS;
    }
}
