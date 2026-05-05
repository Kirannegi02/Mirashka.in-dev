<?php

namespace Database\Factories;

use App\Models\webinar;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebinarFactory extends Factory
{
    protected $model = Webinar::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'why_attend' => ['Point 1', 'Point 2'],
            'features' => ['Feature 1', 'Feature 2'],
            'what_you_get' => ['Benefit 1', 'Benefit 2'],
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'start_time' => $this->faker->time('H:i:s'),
            'timezone' => 'Asia/Kolkata',
            'duration' => $this->faker->randomElement(['60 mins', '90 mins', '120 mins']),
            'meeting_link' => $this->faker->url(),
            'speaker_name' => $this->faker->name(),
            'speaker_designation' => $this->faker->jobTitle(),
            'host_name' => $this->faker->name(),
            'image' => 'test-image.jpg',
            'resources' => $this->faker->url(),
            'status' => $this->faker->randomElement(['upcoming', 'past', 'cancelled']),
            'is_active' => true,
        ];
    }

    public function upcoming(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'upcoming',
            'is_active' => true,
            'start_date' => now()->addDays(7),
        ]);
    }

    public function past(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'past',
            'is_active' => false,
            'start_date' => now()->subDays(7),
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }
}
