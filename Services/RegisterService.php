<?php

namespace App\Services;

use App\Contracts\UserRepositoryInterface;
use App\Mail\UserRegistered;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegisterService
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function register(array $validated): User
    {
        $user = $this->userRepository->create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company_name' => $validated['company_name'],
            'password' => $validated['password'],
            'role_id' => 2,
            'status' => 'approved',
            'is_active' => true,
        ]);

        $this->sendWelcomeEmail($user);

        Auth::login($user);

        return $user;
    }

    private function sendWelcomeEmail(User $user): void
    {
        try {
            Mail::to($user->email)->send(new UserRegistered($user));

            Log::info('RegisterService: Welcome email sent', [
                'user_id' => $user->id,
                'email' => $user->email,
            ]);
        } catch (\Throwable $e) {
            Log::error('RegisterService: Welcome email failed', [
                'user_id' => $user->id,
                'email' => $user->email,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
