<?php

namespace App\Http\Requests\TeamUser;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required|array|exists:users,id',
        ];
    }
}
