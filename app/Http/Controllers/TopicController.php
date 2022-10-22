<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Str;
use App\Http\Requests\Topic\CreateRequest;

class TopicController extends Controller
{
    public function all()
    {
        $topic = Topic::all();
        return response()->json($topic);
    }

    public function create(CreateRequest $request)
    {
        $slug = Str::slug(Str::lower($request->name));

        if ($request->slug) {
            $slug = Str::slug($request->slug);
        }

        $request->merge([
            'slug' => $slug,
        ]);

        $topic = Topic::create($request->all());
        return response()->json($topic);
    }

    public function show($slug)
    {
        $topic = Topic::where('slug',$slug)->first();
        // dd($topic_id);
        $posts = Post::where('topic_id', $topic->id)->paginate('20');
        if($posts){
            // dd($posts);
            return view('Topics.index', compact('posts', 'topic'));
        }
        else{
            abort(404);
        }
    }
}
