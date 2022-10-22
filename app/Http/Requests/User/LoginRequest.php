<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'usernameEmail' => 'string',
            'password' => 'min:8',
        ];
    }
}
