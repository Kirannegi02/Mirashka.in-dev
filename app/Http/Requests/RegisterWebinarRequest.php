<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterWebinarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'webinar_id' => [
                'required',
                'integer',
                Rule::exists('webinars', 'id')->where(function ($query) {
                    $query->where('status', 'upcoming')
                        ->where('is_active', true);
                }),
            ],
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:100',
            'consent' => 'accepted',
        ];
    }

    public function messages(): array
    {
        return [
            'webinar_id.required' => 'Please select a webinar.',
            'webinar_id.exists' => 'This webinar is no longer available for registration.',
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'consent.accepted' => 'You must agree to the terms and conditions.',
        ];
    }
}
