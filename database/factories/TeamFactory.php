<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'designation' => $this->faker->jobTitle(),
            'image' => 'test-team.jpg',
            'short_tagline' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'contact_cta_link' => $this->faker->url(),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 1,
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 0,
        ]);
    }
}
