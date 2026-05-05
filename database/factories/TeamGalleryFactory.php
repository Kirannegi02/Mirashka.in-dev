<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamGalleryFactory extends Factory
{
    protected $model = \App\Models\TeamGallery::class;

    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'image' => 'test-gallery.jpg',
        ];
    }
}
