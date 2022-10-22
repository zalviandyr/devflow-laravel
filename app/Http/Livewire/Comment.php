<?php

namespace App\Http\Livewire;

use App\Models\Comment as Komen;
use Livewire\Component;

class Comment extends Component
{

    protected $rules = [
        'body' => 'required',
    ];
 
    public $comment = '';
    public $mid;

    public function mount($post)
    {
        $this->mid = $post->id;
    }

    public function addComment(){
        // $post_id = $this->post->id;
        Komen::create([
            'user_id' => auth()->user()->id,
            'post_id' => $this->mid,
            'body' => $this->comment,
        ]);
        $this->comment ='';
        $this->render();
    }

    public function render()
    {
        $komen = Komen::where('post_id', $this->mid)->latest()->get();
        return view('livewire.comment', [
            'comments' => $komen
        ]);
    }
}
