<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|unique:topic,name',
            'slug' => 'string',
            'icon' => 'string'
        ];
    }
}
