<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Topic;

class CategoryController extends Controller
{
    public function show(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $topics = Topic::where('category_id', $category->id)
            ->pluck('id')
            ->toArray();
        $posts = Post::whereIn('topic_id', $topics)
            ->get();

        return view('Category.index', [
            'categoryName' => $category->name,
            'posts' => $posts,
        ]);
    }

    public function create(CreateRequest $request)
    {
        $category = Category::create($request);
        return response()->json($category);
    }
}
