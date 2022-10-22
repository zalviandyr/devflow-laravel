<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CreateRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function all()
    {
        $comment = Comment::all();

        return response()->json($comment);
    }

    public function create(CreateRequest $request)
    {
        $comment = Comment::create($request->all());

        return response()->json($comment);
    }
}
