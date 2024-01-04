<?php

namespace App\Livewire\Counter;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public function increase()
    {
        $this->counter++;
    }

    public function decrease()
    {
        $this->counter--;
    }

    public function render()
    {
        return view('livewire.counter.counter');
    }
}
