<?php

namespace App\Services;

use App\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Password;

class PasswordResetService
{
    public const RESET_LINK_SENT = Password::RESET_LINK_SENT;

    public const INVALID_USER = Password::INVALID_USER;

    public const INVALID_TOKEN = Password::INVALID_TOKEN;

    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function sendResetLink(string $email): string
    {
        $user = $this->userRepository->findByEmail($email);

        if (! $user) {
            return Password::INVALID_USER;
        }

        return Password::sendResetLink(['email' => $email]);
    }

    public function resetPassword(array $data): string
    {
        return Password::reset($data, function ($user, $password) {
            $this->userRepository->updatePassword($user, $password);
        });
    }
}
