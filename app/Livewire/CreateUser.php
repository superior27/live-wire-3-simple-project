<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUser extends Component
{
    public UserForm $form;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function save()
    {
        $this->form->save();
    }

    // public function rules(){
    //     return [
    //         'name' => ['required', 'min:3','max: 200'],
    //         'email' => ['required', 'email', 'min:7','max: 200'],
    //         'password' => ['required', 'min:4','max: 200', 'confirmed']
    //     ];
    // }

    // public function updated($attr, $value)
    // {
    //     $this->validateOnly($attr);
    // }
}
