<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ImageOptimization extends Model
{
    protected $fillable = [
        'original_path',
        'optimized_path',
        'thumbnail_300',
        'thumbnail_600',
        'thumbnail_1200',
        'original_size',
        'optimized_size',
        'mime_type',
        'width',
        'height',
        'status',
        'error_message',
        'optimizable_type',
        'optimizable_id',
    ];

    protected $casts = [
        'original_size' => 'integer',
        'optimized_size' => 'integer',
        'width' => 'integer',
        'height' => 'integer',
    ];

    public function optimizable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isCompleted(): bool
    {
        return $this->status === 'completed';
    }

    public function isFailed(): bool
    {
        return $this->status === 'failed';
    }

    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    public function getSavingsPercent(): float
    {
        if (! $this->original_size || ! $this->optimized_size) {
            return 0;
        }

        return round((1 - ($this->optimized_size / $this->original_size)) * 100, 2);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeFailed($query)
    {
        return $query->where('status', 'failed');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeProcessing($query)
    {
        return $query->where('status', 'processing');
    }
}
