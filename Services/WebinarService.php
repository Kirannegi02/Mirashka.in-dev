<?php

namespace App\Services;

use App\Models\webinar;
use Illuminate\Support\Collection;

class WebinarService
{
    public function getUpcomingWebinars(): Collection
    {
        return Webinar::upcoming()
            ->orderBy('start_date', 'asc')
            ->orderBy('start_time', 'asc')
            ->get();
    }

    public function getPastWebinars(): Collection
    {
        return Webinar::where(function ($query) {
            $query->whereIn('status', ['past', 'completed'])
                ->orWhereDate('start_date', '<', now()->toDateString());
        })
            ->orderBy('start_date', 'desc')
            ->get();
    }

    public function getActiveWebinars(): Collection
    {
        return Webinar::active()
            ->orderBy('start_date', 'asc')
            ->get();
    }

    public function findById(int $id): ?Webinar
    {
        return Webinar::find($id);
    }

    public function isRegistrationOpen(Webinar $webinar): bool
    {
        return $webinar->status === 'upcoming'
            && $webinar->is_active
            && $webinar->start_date >= now()->toDateString();
    }
}
