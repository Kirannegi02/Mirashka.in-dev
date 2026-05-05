<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterWebinarRequest;
use App\Services\RegistrationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class WebinarRegistrationController extends Controller
{
    public function __construct(
        private RegistrationService $registrationService
    ) {}

    public function store(RegisterWebinarRequest $request): JsonResponse
    {
        try {
            $registration = $this->registrationService->register($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Registration successful! Check your email for confirmation.',
                'data' => [
                    'id' => $registration->id,
                    'webinar_title' => $registration->webinar->title,
                ],
            ]);
        } catch (\Exception $e) {
            Log::error('Webinar registration failed', [
                'error' => $e->getMessage(),
                'webinar_id' => $request->webinar_id,
                'email' => $request->email,
            ]);

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 422);
        }
    }
}
