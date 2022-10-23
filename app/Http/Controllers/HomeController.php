<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        foreach ($posts as $post) {
            $body = '<p>'.$post->body.'</p>';
            $limit = ' <a href="'.route('post', ['slug' => $post->slug]).'" class="text-blue-500 hover:underline">Baca Selengkapnya ....</a>';

            $post->body = Str::limit($body, 128, $limit);
        }

        return view('index', compact('posts'));
    }

    public function leader(){
        $users = Reaction::groupBy('author_id')->sum('point');
        dd($users);
    }
}
