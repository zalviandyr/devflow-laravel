<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function all()
    {
        $post = Post::all();

        return response()->json($post);
    }

    public function create(CreateRequest $request)
    {
        $request->merge([
            'is_open' => true,
        ]);
        $post = Post::create($request->all());

        return response()->json($post);
    }
}
