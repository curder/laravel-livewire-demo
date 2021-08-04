<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    public $contact;

    protected $listeners = [
        'refreshChildren' => '$refresh',
        'foo' => '$refresh'
    ];

    public function emitFoo()
    {
        $this->emitUp('foo');
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
