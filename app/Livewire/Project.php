<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public $ports;
    public function mount($id) {
        
        if ($id=='null') {
            $id=null;
        }
    }
    public function render()
    {
        $this->ports = ModelsProject::get();
        return view('livewire.template.T001.project');
    }
}
