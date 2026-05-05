<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Services\PasswordResetService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ResetPasswordController extends Controller
{
    public function __construct(
        private PasswordResetService $passwordResetService
    ) {}

    public function showResetForm($token): View
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function reset(ResetPasswordRequest $request): JsonResponse|RedirectResponse
    {
        $data = $request->validated();
        $isAjax = $request->expectsJson();

        $status = $this->passwordResetService->resetPassword($data);

        if ($status === PasswordResetService::RESET_LINK_SENT) {
            if ($isAjax) {
                return response()->json([
                    'success' => true,
                    'redirect' => '/client-portal-login',
                    'message' => 'Password reset successfully!',
                ]);
            }

            return redirect('/client-portal-login')->with('status', 'Password reset successfully!');
        }

        if ($isAjax) {
            return response()->json([
                'success' => false,
                'errors' => ['email' => ['This password reset token is invalid.']],
            ], 422);
        }

        return back()->withErrors(['email' => 'This password reset token is invalid.']);
    }
}
