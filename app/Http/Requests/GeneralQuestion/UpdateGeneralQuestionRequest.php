<?php

namespace App\Http\Requests\GeneralQuestion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGeneralQuestionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'type' => ['required', 'string'],
            'description' => ['required'],
            'position' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('general_questions', 'slug')->ignore($this->generalQuestion)],
        ];
    }
}
