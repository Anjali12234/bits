<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
            'phone_number' => ['required', 'max:10', Rule::unique('students', 'phone_number')->withoutTrashed()->ignore($this->student)], 
            'address' => ['required', 'string', 'max:255'], 
            'guardian_name' => ['required', 'string', 'max:255'], 
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'email' => ['required', 'email', 'max:255', Rule::unique('students', 'email')->withoutTrashed()->ignore($this->student)],

        ];
    }
}
