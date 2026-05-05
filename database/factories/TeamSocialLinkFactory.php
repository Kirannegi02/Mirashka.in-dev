<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamSocialLinkFactory extends Factory
{
    protected $model = \App\Models\TeamSocialLink::class;

    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'facebook' => $this->faker->url(),
            'instagram' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'twitter' => $this->faker->url(),
        ];
    }
}
