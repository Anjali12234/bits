<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required'],
            'image' => ['nullable', 'image'],
            'position' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('services', 'slug')->ignore($this->service)],
        ];
    }
}
