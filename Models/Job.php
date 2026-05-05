<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    protected $table = 'career_jobs';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'job_type',
        'experience',
        'salary_range',
        'description',
        'responsibilities',
        'requirements',
        'status',
        'last_date',
    ];

    protected $casts = [
        'last_date' => 'datetime',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($job) {
            if (empty($job->slug)) {
                $job->slug = static::generateUniqueSlug($job->title);
            }
        });

        static::updating(function ($job) {
            if ($job->isDirty('title') && empty($job->slug)) {
                $job->slug = static::generateUniqueSlug($job->title);
            }
        });
    }

    protected static function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug.'-'.$count;
            $count++;
        }

        return $slug;
    }

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeClosed($query)
    {
        return $query->where('status', 'closed');
    }

    public function isOpen(): bool
    {
        if ($this->status !== 'active') {
            return false;
        }

        if ($this->last_date && $this->last_date->isPast()) {
            return false;
        }

        return true;
    }

    public function getApplicationCountAttribute(): int
    {
        return $this->applications()->count();
    }

    public function getJobTypeLabel(): string
    {
        return match ($this->job_type) {
            'full-time' => 'Full Time',
            'part-time' => 'Part Time',
            'internship' => 'Internship',
            'contract' => 'Contract',
            default => ucfirst($this->job_type),
        };
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            'active' => 'bg-success',
            'inactive' => 'bg-warning',
            'closed' => 'bg-danger',
            default => 'bg-secondary',
        };
    }
}
