<?php

namespace Database\Factories;

use App\Models\CaseStudy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CaseStudyFactory extends Factory
{
    protected $model = CaseStudy::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'client_name' => $this->faker->company(),
            'industry' => $this->faker->randomElement(['Technology', 'Healthcare', 'Finance', 'Retail', 'Manufacturing']),
            'short_description' => $this->faker->paragraph(),
            'challenge' => $this->faker->paragraph(),
            'solution' => $this->faker->paragraph(),
            'strategy' => $this->faker->paragraph(),
            'results' => $this->faker->paragraph(),
            'impact_highlights' => $this->faker->paragraph(),
            'media_coverage' => $this->faker->sentence(),
            'reach' => $this->faker->randomNumber(6).'+',
            'featured_image' => 'test-case-study.jpg',
            'image_one' => 'test-image-1.jpg',
            'image_two' => 'test-image-2.jpg',
            'image_three' => 'test-image-3.jpg',
            'image_four' => 'test-image-4.jpg',
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
