<?php

namespace App\Http\Requests\Reaction;

use App\Enums\ReactionType;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:post,id',
            'point' => 'required|int',
            'type' => [new Enum(ReactionType::class)]
        ];
    }
}
