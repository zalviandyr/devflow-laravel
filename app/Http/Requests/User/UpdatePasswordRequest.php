<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'passwordLama' => 'required|string',
            'passwordBaru' => 'required|string|min:8',
            'konfirmasiPasswordBaru' => 'required|string|min:8|same:passwordBaru',
        ];
    }
}
