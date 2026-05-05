<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\TeamAchievement;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamAchievementFactory extends Factory
{
    protected $model = TeamAchievement::class;

    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'image' => 'test-achievement.jpg',
            'content' => $this->faker->sentence(),
        ];
    }
}
