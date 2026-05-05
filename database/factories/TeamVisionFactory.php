<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamVisionFactory extends Factory
{
    protected $model = \App\Models\TeamVision::class;

    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'image' => 'test-vision.jpg',
            'content' => $this->faker->paragraph(),
        ];
    }
}
