<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'career_applications';

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'resume',
        'cover_letter',
        'status',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeReviewed($query)
    {
        return $query->where('status', 'reviewed');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    public function scopeShortlisted($query)
    {
        return $query->where('status', 'shortlisted');
    }

    public function getResumeUrl(): string
    {
        return Storage::url('resumes/'.$this->resume);
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            'new' => 'bg-primary',
            'reviewed' => 'bg-info',
            'rejected' => 'bg-danger',
            'shortlisted' => 'bg-success',
            'selected' => 'bg-warning',
            default => 'bg-secondary',
        };
    }

    public function getStatusLabel(): string
    {
        return match ($this->status) {
            'new' => 'New',
            'reviewed' => 'Reviewed',
            'rejected' => 'Rejected',
            'shortlisted' => 'Shortlisted',
            'selected' => 'Selected',
            default => ucfirst($this->status),
        };
    }

    public function getShortCoverLetter(): string
    {
        if (empty($this->cover_letter)) {
            return 'No cover letter provided';
        }

        return strlen($this->cover_letter) > 150
            ? substr($this->cover_letter, 0, 150).'...'
            : $this->cover_letter;
    }
}
