<?php

namespace App\Http\Livewire;

use App\Models\Topic;
use Livewire\Component;

class SearchTopic extends Component
{
    public $topic = '';
    public function render()
    {
        return view('livewire.search-topic', [
            'topics' => Topic::where('name', 'like', "%".$this->topic."%")->limit(5)->get(),
        ]);
    }
}
