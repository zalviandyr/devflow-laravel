<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'string',
            'email' => 'email',
            'photo' => 'image|max:500',
        ];
    }
}
