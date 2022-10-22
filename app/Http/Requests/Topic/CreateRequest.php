<?php

namespace App\Http\Requests\Topic;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|unique:topic,name',
            'slug' => 'string',
        ];
    }
}
