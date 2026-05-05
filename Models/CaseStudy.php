<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'industry',
        'short_description',
        'challenge',
        'solution',
        'strategy',
        'results',
        'impact_highlights',
        'media_coverage',
        'reach',
        'featured_image',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
        'status',
    ];

    public function media(): HasMany
    {
        return $this->hasMany(CaseStudyMedia::class)->orderBy('sort_order');
    }
}
