<?php

namespace App\Http\Controllers;

use App\Http\Requests\Topic\CreateRequest;
use App\Models\Topic;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    public function all()
    {
        $topic = Topic::all();

        return response()->json($topic);
    }

    public function create(CreateRequest $request)
    {
        $slug = '/' . Str::slug(Str::lower($request->name));

        if ($request->slug) {
            $slug = '/' . Str::slug($request->slug);
        }

        $request->merge([
            'slug' => $slug,
        ]);

        $topic = Topic::create($request->all());
        return response()->json($topic);
    }
}
