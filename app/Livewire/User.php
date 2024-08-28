<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class User extends Component
{
    public $users;
    public function render()
    {
        $this->users = ModelsUser::get();
        return view('livewire.user');
    }
}
