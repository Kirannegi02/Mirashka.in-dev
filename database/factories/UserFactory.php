<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'phone' => '+91 '.fake()->numerify('##### ####'),
            'company_name' => fake()->company(),
            'role_id' => null,
            'status' => fake()->randomElement(['pending', 'approved']),
            'is_active' => true,
            'industry' => fake()->randomElement(['Technology', 'Finance', 'Healthcare', 'Media', 'Education', 'Retail']),
            'approved_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role_id' => 1,
            'status' => 'approved',
            'is_active' => true,
        ]);
    }

    public function user(): static
    {
        return $this->state(fn (array $attributes) => [
            'role_id' => 2,
            'status' => 'approved',
            'is_active' => true,
        ]);
    }

    public function pending(): static
    {
        return $this->state(fn (array $attributes) => [
            'role_id' => 2,
            'status' => 'pending',
            'is_active' => true,
            'approved_at' => null,
        ]);
    }

    public function suspended(): static
    {
        return $this->state(fn (array $attributes) => [
            'role_id' => 2,
            'status' => 'suspended',
            'is_active' => false,
            'approved_at' => null,
        ]);
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
