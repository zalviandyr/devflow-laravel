<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreateRequest;
use App\Models\Topic;

class TopicController extends Controller
{
    public function all()
    {
        $topic = Topic::all();

        return response()->json($topic);
    }

    public function create(CreateRequest $request)
    {
        $request->merge([
            'is_open' => true,
        ]);
        $topic = Topic::create($request->all());

        return response()->json($topic);
    }
}
