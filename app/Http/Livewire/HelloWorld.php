<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Curder';

    public function mount($name)
    {
        $this->name = $name;
    }

    public function hydrate()
    {
        //
    }

    public function updating()
    {
        //
    }

    public function updatingName()
    {
        //
    }

    public function updated()
    {
        //
    }

    public function updatedName()
    {
        //
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
