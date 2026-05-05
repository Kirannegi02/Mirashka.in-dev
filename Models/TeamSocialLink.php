<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSocialLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'facebook',
        'instagram',
        'linkedin',
        'twitter'
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
