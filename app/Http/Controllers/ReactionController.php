<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reaction\CreateRequest;
use App\Models\Reaction;
use App\Models\Topic;

class ReactionController extends Controller
{
    public function all()
    {
        $reaction = Reaction::all();

        return response()->json($reaction);
    }

    public function create(CreateRequest $request)
    {
        $reaction = Topic::create($request->all());
        return response()->json($reaction);
    }
}
