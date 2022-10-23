<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Services\EmailService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Arr;
use App\Models\Comment as Komen;

class Comment extends Component
{
    public $comment = '';
    public $mid;
    public $komen = '';

    public function mount($post)
    {
        $this->mid = $post->id;
    }

    public function addComment()
    {
        $this->loading = false;

        $auth = Auth::user();

        // send email
        $post = Post::find($this->mid);
        Mail::to($post->user->email)->send(new EmailService($post->title, $this->comment, $auth->email, $auth->name));

        Komen::create([
            'user_id' => $auth->id,
            'post_id' => $this->mid,
            'body' => $this->comment,
        ]);
        $this->comment = '';
        $this->loading = true;
        return redirect(request()->header('Referer'));
    }

    public function render()
    {   
        $this->komen = Komen::where('post_id', $this->mid)->latest()->get();
        return view('livewire.comment', [
            'comments' => $this->komen
        ]);
    }
}
