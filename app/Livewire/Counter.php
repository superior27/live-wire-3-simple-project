<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;
    public string $firstName = 'Mr. Smith';
    public string $lastName;

    public function mount()
    {
        $this->counter = 10;

        $this->fill([
            'firstName' => 'John',
            'lastName' => 'Doe',
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function count(): void
    {
        $this->counter++;
    }

    public function refresh()
    {
        $this->reset('firstName', 'lastName');
    }
}
