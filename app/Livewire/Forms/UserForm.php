<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    #[Locked]
    public ?int $id;

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

    public function save()
    {
        $this->validate();
        User::query()->updateOrCreate(
            [
                'id' => $this->id
            ],
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ]);
    }

    public function setUser(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->id = $user->id;
    }
}
