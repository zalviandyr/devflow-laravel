<?php

namespace App\Http\Livewire;

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

    public function resetFilters()
    {
        $this->reset('comment');

    }

    public function addComment(){
        // $post_id = $this->post->id;
        $new = [
            'user_id' => auth()->user()->id,
            'post_id' => $this->mid,
            'body' => $this->comment,
        ];
        $this->resetFilters();
    }

    public function render()
    {   
        $this->komen = Komen::where('post_id', $this->mid)->latest()->get();
        return view('livewire.comment', [
            'comments' => $this->komen
        ]);
    }
}
