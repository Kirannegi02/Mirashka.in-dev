<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Services\PasswordResetService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    public function __construct(
        private PasswordResetService $passwordResetService
    ) {}

    public function showLinkRequestForm(): View
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(ForgotPasswordRequest $request): JsonResponse|RedirectResponse
    {
        $email = $request->validated()['email'];
        $status = $this->passwordResetService->sendResetLink($email);

        $isAjax = $request->expectsJson() || $request->is('forgot-password');

        if ($status === PasswordResetService::RESET_LINK_SENT) {
            if ($isAjax) {
                return response()->json([
                    'success' => true,
                    'message' => 'We have emailed your password reset link!',
                ]);
            }

            return back()->with('status', 'We have emailed your password reset link!');
        }

        if ($isAjax) {
            return response()->json([
                'success' => false,
                'errors' => ['email' => ['We could not find a user with that email address.']],
            ], 422);
        }

        return back()->withErrors(['email' => 'We could not find a user with that email address.']);
    }
}
