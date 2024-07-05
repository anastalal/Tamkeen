<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class Questions extends Component
{
    public $questions = [];
    public function mount(){
    $this->questions  = Question::all();
    }
    public function render()
    {
        return view('livewire.questions');
    }
}
