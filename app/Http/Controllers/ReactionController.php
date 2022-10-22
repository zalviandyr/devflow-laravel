<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function all()
    {
        $reaction = Reaction::all();

        return response()->json($reaction);
    }

    public function create()
    {
        $request->merge([

        ])

    }
}
