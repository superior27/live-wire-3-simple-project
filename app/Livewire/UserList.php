<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.user-list');
    }

    #[Computed]
    public function users()
    {
        return User::query()->paginate();
    }
}
