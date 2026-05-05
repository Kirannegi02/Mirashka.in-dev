<?php

namespace Database\Factories;

use App\Models\ContactForm;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFormFactory extends Factory
{
    protected $model = ContactForm::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'company_name' => $this->faker->company(),
            'message' => $this->faker->paragraph(),
            'email_status' => $this->faker->randomElement(['pending', 'sent', 'failed', 'retrying']),
            'email_attempts' => 0,
            'email_last_error' => null,
        ];
    }

    public function pending(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_status' => 'pending',
        ]);
    }

    public function sent(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_status' => 'sent',
        ]);
    }

    public function failed(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_status' => 'failed',
            'email_last_error' => 'SMTP connection failed',
        ]);
    }
}
