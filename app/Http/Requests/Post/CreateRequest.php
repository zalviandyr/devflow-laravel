<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string',
            'body' => 'required|string',
            'topic_id' => 'required|exists:topic,id',
            // 'images' => 'required|array|max:4',
            // 'images.*' => 'image',
        ];
    }
}
