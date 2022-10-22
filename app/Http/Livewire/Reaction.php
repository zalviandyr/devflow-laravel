<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reaction extends Component
{
    public $postId = '';

    public function render()
    {
        // if(auth()->user){

        // }
        return view('livewire.reaction');
    }
}
