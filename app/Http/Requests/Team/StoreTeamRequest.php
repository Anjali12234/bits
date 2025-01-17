<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'post' => ['required', 'string'],
            'experience' => ['required', 'string'],
            'address' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'fax' => ['nullable', 'string'],
            'portfolio_url' => ['nullable', 'url'],
            'facebook_url' => ['nullable', 'url'],
            'twitter_url' => ['nullable', 'url'],
            'instagram_url' => ['nullable', 'url'],
            'youtube_url' => ['nullable', 'string'],
            'phone' => ['nullable', 'digits_between:7,15'],
            'description' => ['required'],
            'image' => ['required', 'image'],
        ];
    }
}
