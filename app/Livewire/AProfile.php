<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AProfile extends Component
{

    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $web;
    public $address;
    public $profile_summary;
    public $photo;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.a-profile');
    }
}
