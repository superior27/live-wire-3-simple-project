<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public ?float $n1 = 0.0;
    public ?float $n2 = 0.0;
    public ?float $result;

    public string $operator = '+';

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $expression = "return $this->n1 $this->operator $this->n2;";
        $this->result = eval($expression); 
    }

    public function not7()
    {
        $this->n1 = 333;
    }


}
