<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Webinar extends Model
{
    use HasFactory;

    protected $table = 'webinars';

    protected $fillable = [
        'title',
        'description',
        'why_attend',
        'features',
        'what_you_get',
        'start_date',
        'start_time',
        'timezone',
        'duration',
        'meeting_link',
        'speaker_name',
        'speaker_designation',
        'host_name',
        'image',
        'resources',
        'status',
        'is_active',
    ];

    protected $casts = [
        'start_date' => 'date',
        'is_active' => 'boolean',
        'why_attend' => 'array',
        'features' => 'array',
        'what_you_get' => 'array',
    ];

    public function registrations(): HasMany
    {
        return $this->hasMany(WebinarRegistration::class);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('is_active', true)
            ->where(function ($q) {
                $q->where('status', 'upcoming')
                    ->orWhere(function ($q2) {
                        $q2->where('status', 'cancelled')
                            ->whereDate('start_date', '>=', now()->toDateString());
                    });
            });
    }

    public function scopePast($query)
    {
        return $query->where(function ($q) {
            $q->whereIn('status', ['past', 'completed'])
                ->where('is_active', true);
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getFormattedDateAttribute()
    {
        return $this->start_date?->format('d M, Y');
    }

    public function getFormattedTimeAttribute()
    {
        return $this->start_time ? \Carbon\Carbon::parse($this->start_time)->format('h:i A') : null;
    }

    public function getRegistrationCountAttribute()
    {
        return $this->registrations()->count();
    }

    public function getWhyAttendListAttribute()
    {
        return $this->why_attend ?? [];
    }

    public function getFeaturesListAttribute()
    {
        return $this->features ?? [];
    }

    public function getWhatYouGetListAttribute()
    {
        return $this->what_you_get ?? [];
    }
}
