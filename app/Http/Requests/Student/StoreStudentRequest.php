<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'course' => ['required' ], 
            'phone_number' => ['required', 'max:10', Rule::unique('students', 'phone_number')], 
            'address' => ['required', 'string', 'max:255'], 
            'guardian_name' => ['required', 'string', 'max:255'], 
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'email' => ['required', 'email', 'max:255', Rule::unique('students', 'email')], // Required, valid email, unique
        ];
    }
}
