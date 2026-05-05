<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';
     protected $fillable = [
        'title',
        'sub_heading',
        'description',
        'image',
        'button_text',
        'button_link',
        'status',
    ];
}



