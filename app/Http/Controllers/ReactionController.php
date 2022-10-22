<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reaction\CreateRequest;
use App\Models\Reaction;

class ReactionController extends Controller
{
    public function all()
    {
        $reaction = Reaction::all();

        return response()->json($reaction);
    }

    public function create(CreateRequest $request)
    {
        $reaction = Reaction::create($request->all());
        return response()->json($reaction);
    }

    public function update(CreateRequest $request)
    {
        $reaction = Reaction::where('id', $request->id)
            ->update(['type' => $request->type]);
        return response()->json($reaction);
    }
}
