<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{

    public $todo= '';

    public $carArray= ['unu'=>'BMW', 'Audi', 'Mercedes'];

    public $todos = [
       'Take oput trash',
       'Do dishes'
    ];

    public function add()
    {
        $this->todos[] = $this->todo;
        // $this->todo = '';
        $this->reset('todo');
    }       


    public function mount()
    {
        $this->todo = 'New Todo';
    }

    public function updated($property, $value)
    {
     
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
