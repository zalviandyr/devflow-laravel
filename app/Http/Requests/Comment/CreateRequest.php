<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post_id' => 'required|exists:post,id',
            'user_id' => 'required|exists:users,id',
            'body' => 'required|string',
        ];
    }
}
