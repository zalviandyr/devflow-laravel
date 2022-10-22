<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CreateRequest;
use App\Models\Comment;
use App\Services\EmailService;
use Illuminate\Support\Facades\Mail;

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

        // send email
        Mail::to($comment->post->user->email)->send(new EmailService(
            $comment->post->title,
            $comment->body,
            $comment->user->email,
            $comment->user->name
        ));

        return response()->json($comment);
    }
}
