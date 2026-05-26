<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactFormRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $normalized = [];

        if ($this->filled('project_name') && ! $this->filled('company_name')) {
            $normalized['company_name'] = $this->input('project_name');
        }

        if ($this->filled('project_details') && ! $this->filled('message')) {
            $normalized['message'] = $this->input('project_details');
        }

        $extras = [];
        if ($this->filled('team_size')) {
            $extras[] = 'Team Size: '.$this->input('team_size');
        }
        if ($this->filled('service_required')) {
            $extras[] = 'Service Required: '.$this->input('service_required');
        }
        if ($extras !== []) {
            $prefix = implode("\n", $extras)."\n\n";
            $normalized['message'] = $prefix.($this->input('message') ?? '');
        }

        if (! empty($normalized)) {
            $this->merge($normalized);
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array
    {
        return [
            'name'         => 'required|string|max:255',
            'phone'        => 'required|string|max:20',
            'email'        => 'required|email',
            'company_name'      => 'nullable|string|max:255',
            'team_size'         => 'nullable|string|max:100',
            'service_required'  => 'nullable|string|max:255',
            'message'           => 'required|string',
        ];
    }
}
