<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserForm extends Component
{
    #[Validate([
        'required',
        'min:3',
        'max: 200',
    ])]
    public string $name;

    #[Validate([
        'required',
        'email',
        'min:7',
        'max:200'
    ])]
    public string $email;

    #[Validate([
        'required',
        'min:4',
        'max:200',
        'confirmed'
    ])]
    public string $password;
    public string $password_confirmation;

    public function render()
    {
        return view('livewire.user-form');
    }

    public function save()
    {
        $this->validate();
        User::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
    }
}
