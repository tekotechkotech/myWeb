<?php

namespace App\Livewire;

use App\Models\Skill;
use App\Models\User;
use Livewire\Component;

class About extends Component
{
    public $user;
    public $skills;
    public function render()
    {
        $this->user = User::first();
        $this->skills = Skill::get();
        return view('livewire.template.T001.about');
    }
}
