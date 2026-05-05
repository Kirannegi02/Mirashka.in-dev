<?php

namespace App\Repositories;

use App\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function findByProvider(string $provider, string $providerId): ?User
    {
        return User::where('provider', $provider)
            ->where('provider_id', $providerId)
            ->first();
    }

    public function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'] ?? null,
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'company_name' => $data['company_name'] ?? null,
            'password' => $data['password'] ?? null,
            'role_id' => $data['role_id'] ?? 2,
            'provider' => $data['provider'] ?? null,
            'provider_id' => $data['provider_id'] ?? null,
            'status' => $data['status'] ?? 'approved',
            'is_active' => $data['is_active'] ?? true,
            'email_verified_at' => $data['email_verified_at'] ?? now(),
        ]);
    }

    public function updatePassword(User $user, string $hashed): void
    {
        $user->update(['password' => $hashed]);
    }
}
