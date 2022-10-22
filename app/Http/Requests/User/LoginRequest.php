<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username' => 'string',
            'email' => 'string',
            'password' => 'min:8',
        ];
    }
}