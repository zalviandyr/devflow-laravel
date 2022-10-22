<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;
use Illuminate\Support\Str;

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
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($request->title).Str::random(8),
        ]);
        $post = Post::create($request->all());

        for ($i = 0; $i < count($request->images); $i++) {
            $post->addMediaFromRequest("images[$i]")->toMediaCollection(Post::$imageCollection);
        }

        return response()->json($post);
    }
}
