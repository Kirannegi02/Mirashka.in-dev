<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
        private AuthService $authService
    ) {}

    public function showLogin(): View
    {
        return view('frontend.pages.clientportallogin');
    }

    public function login(LoginRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $credentials = $request->validated();
            $remember = $request->boolean('remember');
            $isAjax = $request->expectsJson();

            if (! $this->authService->login($credentials, $remember)) {
                if ($isAjax) {
                    return response()->json([
                        'success' => false,
                        'errors' => ['login' => ['Invalid credentials. Please check your email and password.']],
                    ], 401);
                }

                return back()->withErrors(['login' => 'Invalid credentials. Please check your email and password.'])->withInput();
            }

            $user = auth()->user();
            $redirectUrl = $user->role_id == 1
                ? '/admin/dashboard'
                : '/user/dashboard';

            if ($isAjax) {
                return response()->json([
                    'success' => true,
                    'redirect' => redirect()->intended($redirectUrl)->getTargetUrl(),
                    'message' => 'Login successful!',
                ]);
            }

            return redirect()->intended($redirectUrl)->with('success', 'Login successful!');
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => ['login' => [$e->getMessage()]],
                ], 500);
            }

            return back()->withErrors(['login' => $e->getMessage()])->withInput();
        }
    }

    public function logout(): RedirectResponse
    {
        $this->authService->logout();

        return redirect('/client-portal-login')->with('success', 'Logged out successfully');
    }
}
