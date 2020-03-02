<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all(),
            ]);
    }
}
