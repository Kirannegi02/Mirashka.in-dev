<?php

namespace Database\Factories;

use App\Models\webinar;
use App\Models\WebinarRegistration;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebinarRegistrationFactory extends Factory
{
    protected $model = WebinarRegistration::class;

    public function definition(): array
    {
        return [
            'webinar_id' => Webinar::factory(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'company' => $this->faker->company(),
            'job_title' => $this->faker->jobTitle(),
            'industry' => $this->faker->randomElement(['Technology', 'Healthcare', 'Finance', 'Retail']),
            'country' => $this->faker->country(),
            'status' => $this->faker->randomElement(['registered', 'attended', 'no_show']),
            'email_status' => 'pending',
            'email_attempts' => 0,
        ];
    }

    public function registered(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'registered',
        ]);
    }

    public function attended(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'attended',
        ]);
    }

    public function noShow(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'no_show',
        ]);
    }
}
