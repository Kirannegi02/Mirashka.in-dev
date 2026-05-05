<?php

namespace Database\Factories;

use App\Models\Podcast;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory
{
    protected $model = Podcast::class;

    public function definition(): array
    {
        return [
            'tittle' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'publish_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'image' => 'test-podcast.jpg',
            'audio' => 'test-podcast.mp3',
            'status' => $this->faker->randomElement(['active', 'disabled']),
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'active',
        ]);
    }

    public function disabled(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'disabled',
        ]);
    }
}
