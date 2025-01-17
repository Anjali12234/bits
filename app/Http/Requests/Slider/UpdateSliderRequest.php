<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
           'title1' => ['required', 'string'],
            'title2' => ['required', 'string'],
            'image' => ['required', 'image'],
        ];
    }
}
