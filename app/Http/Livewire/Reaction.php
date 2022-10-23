<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reaction as React;

class Reaction extends Component
{
    public $postId = '';
    public $isUp = false;
    public $isDown = false;
    public $up;
    public $down;
    public $post;


    public function mount($post){
        $this->postId = $post->id;
        if(auth()->user()){
            $this->up = React::where('user_id', auth()->user()->id)->where('post_id', $this->postId)->where('type', 'UP')->first();
            // dd($this->up);
            $this->down = React::where('user_id', auth()->user()->id)->where('post_id', $this->postId)->where('type', 'DOWN')->first();
            if($this->up){
                $this->isUp = true;
            }
            if($this->down){
                $this->isDown = true;
            }
        }
    }

    public function thumbsUp(){
        if(auth()->user()){
        if($this->isUp){
            $this->up->delete();
            $this->isUp = false;
        }else{            
            if($this->isDown){
                $this->down->delete();
            }
                React::create([
                    'user_id' =>auth()->user()->id,
                    'post_id' => $this->postId,
                    'author_id' => $this->post->user->id,
                    'point' => 2,
                    'type' => 'UP'
                ]);
            }
            $this->isUp = true;
            $this->isDown = false;
        }else{
            return redirect(route('login'));
        }
    }

    public function thumbsDown(){
        if(auth()->user()){
            if($this->isDown){
                $this->down->delete();
                $this->isDown = false;
            }else{
                
                if($this->isUp){
                    $this->up->delete();
                }
                React::create([
                    'user_id' =>auth()->user()->id,
                    'post_id' => $this->postId,
                    'author_id' => $this->post->user->id,
                    'point' => 0,
                    'type' => 'DOWN'
                ]);
                $this->isDown = true;
                $this->isUp = false;
            }
        }else{
            return redirect(route('login'));
        }
    }

    public function render()
    {
        return view('livewire.reaction');
    }
}
