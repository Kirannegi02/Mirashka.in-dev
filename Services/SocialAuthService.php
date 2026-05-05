<?php

namespace App\Services;

use App\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthService
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function handleProviderCallback(string $provider): void
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = $this->userRepository->findByProvider($provider, $socialUser->getId());

        if (! $user) {
            $user = $this->userRepository->create([
                'name' => $socialUser->getName() ?? $socialUser->getEmail(),
                'email' => $socialUser->getEmail(),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'role_id' => 2,
                'status' => 'approved',
                'is_active' => true,
                'email_verified_at' => now(),
            ]);
        }

        Auth::login($user);
    }
}
