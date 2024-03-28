<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class UserResume extends Component
{
    #[Validate([
        'required',
        'max:250',
        'min:5'
    ])]
    public ?string $resume = null;

    public function mount()
    {
        $this->resume = auth()->user()->resume;
    }

    public function render()
    {
        return view('livewire.user-resume');
    }


    public function updated($attr, $value)
    {
        auth()->user()->update([
            $attr => $value,
        ]);
    }
}
