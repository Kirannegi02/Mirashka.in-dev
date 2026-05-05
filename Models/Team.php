<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'image',
        'short_tagline',
        'description',
        'contact_cta_link',
        'status',
        'position',
    ];

    public function social()
    {
        return $this->hasOne(TeamSocialLink::class);
    }

    public function vision()
    {
        return $this->hasOne(TeamVision::class);
    }

    public function achievements()
    {
        return $this->hasMany(TeamAchievement::class);
    }

    public function galleries()
    {
        return $this->hasMany(TeamGallery::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($team) {
            $slug = Str::slug($team->name);
            $originalSlug = $slug;
            $count = 1;

            while (\App\Models\Team::where('slug', $slug)
                ->where('id', '!=', $team->id)
                ->exists()
            ) {

                $slug = $originalSlug.'-'.$count++;
            }

            $team->slug = $slug;
        });
    }
}
