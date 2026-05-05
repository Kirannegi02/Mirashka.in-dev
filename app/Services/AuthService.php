<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class AuthService
{
    public function login(array $credentials, bool $remember): bool
    {
        $login = trim($credentials['login'] ?? '');
        $password = $credentials['password'];

        if (empty($login)) {
            throw new \Exception('Login field is required');
        }

        $key = 'login:'.$login.'|'.request()->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw new \Exception('Too many login attempts. Please try again in one minute.');
        }

        RateLimiter::hit($key, 60);

        $isEmail = filter_var($login, FILTER_VALIDATE_EMAIL) !== false;
        $field = $isEmail ? 'email' : 'username';

        return Auth::attempt([$field => $login, 'password' => $password], $remember);
    }

    public function logout(): void
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}
