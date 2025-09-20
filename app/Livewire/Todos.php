<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{

    public $todos = [
       'Take oput trash',
       'Do dishes'
    ];

    public function render()
    {
        return view('livewire.todos');
    }
}
