<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            Hello, form inline!
        </div>
        HTML;
    }
}
