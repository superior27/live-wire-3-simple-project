<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class UpdateUser extends Component
{
    public User $user;
    public UserForm $form;

    public function mount()
    {
        $this->form->setUser($this->user);
    }
    public function render()
    {
        return view('livewire.update-user');
    }

    public function save()
    {
        $this->form->save();
    }
}
