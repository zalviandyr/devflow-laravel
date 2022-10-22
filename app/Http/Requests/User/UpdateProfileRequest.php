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
            'phone_number' => 'string|starts_with:08|min:12',
            'address' => 'string',
        ];
    }
}
