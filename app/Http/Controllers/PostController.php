<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;
use App\Services\BadWordFilterService;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create(CreateRequest $request)
    {
        $request->merge([
            'is_open' => true,
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($request->title).Str::random(8),
            'title' => BadWordFilterService::filter($request->title),
            'body' => BadWordFilterService::filter($request->body),
        ]);
        $post = Post::create($request->all());

        if ($request->has('images')) {
            for ($i = 0; $i < count($request->images); $i++) {
                $post->addMediaFromRequest("images[$i]")->toMediaCollection(Post::$imageCollection);
            }
        }

        return redirect()->route('home')->withSuccess(__('post.success'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        if($post){
            return view('Post.index', compact('post'));
        }
        else {
            \abort(404);
        }

    }
}
