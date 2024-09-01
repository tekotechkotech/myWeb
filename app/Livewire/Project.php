<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public $ports;
    public $id;
    public function mount($id) {
        
        // dd($id);
        $this->id = $id;
    }

    public function render()
    {
        // dd($this->id);
        if ($this->id !== 'null') {
            $this->ports = ModelsProject::where('project_name', $this->id)->first();
            return view('livewire.template.T001.project-detail');
            
        } else {
            $this->ports = ModelsProject::get();
            return view('livewire.template.T001.project');
        }
    }
}
