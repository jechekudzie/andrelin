<?php

namespace App\Livewire;

use Livewire\Component;

class TestEmit extends Component
{

    public function emitTest()
    {
        $this->emit('testEvent');
    }

    public function render()
    {
        return view('livewire.test-emit');
    }
}
