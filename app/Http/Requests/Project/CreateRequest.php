<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string',
            'body' => 'required|string',
            'team_id' => 'required|exists:team,id',
            'topic_id' => 'required|exists:topic,id',
            'deadline_at' => 'required|date',
        ];
    }
}
