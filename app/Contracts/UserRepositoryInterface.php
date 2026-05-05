<?php

namespace App\Contracts;

use App\Models\User;

interface UserRepositoryInterface
{
    public function findByEmail(string $email): ?User;

    public function findByProvider(string $provider, string $providerId): ?User;

    public function create(array $data): User;

    public function updatePassword(User $user, string $hashed): void;
}
