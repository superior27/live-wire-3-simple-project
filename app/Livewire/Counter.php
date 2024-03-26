<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;

    public function mount()
    {
        $this->counter = 10;
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function count(): void
    {
        $this->counter++;
    }
}
