<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'sub_heading' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'button_text' => $this->faker->randomElement(['Learn More', 'Get Started', 'Contact Us']),
            'button_link' => $this->faker->url(),
            'image' => 'test-banner.jpg',
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
