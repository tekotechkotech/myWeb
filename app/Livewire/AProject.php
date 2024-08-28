<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class AProject extends Component
{
    public $projects;

    public $project;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetProject();
    }

    public function resetProject() {
        $this->project = [
            'id' => '',
            'project_name' => '',
            'description' => '',
            'url' => '',
        ];
    }

    public function render()
    {
        $this->projects = Project::with('user')->orderBy('created_at','DESC')->get();
        return view('livewire.a-project');
    }

    public function showModal($id, $delete)
    {
        if ($id != '') {
            $p = Project::where('id', $id)->first();

            $this->project = [
                'id' => $p->id,
                'project_name' => $p->project_name,
                'description' => $p->description,
                'url' => $p->url,
            ];
            $this->delete = $delete;
        } else {
            $this->resetProject();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'project.project_name' => 'required|string',
            'project.description' => 'nullable|string',
            'project.url' => 'nullable|string',
        ]);

        if ($this->project['id'] != null) {
            $this->project = Project::findOrFail($this->project['id']);
        } else {
            $this->project = new Project();
        }

        $this->project->fill($validatedData['project']);

        if ($this->project['id']) {
            $this->project->save();
            session()->flash('message', 'Project updated successfully.');
        } else {
            $this->project['id'] = Str::uuid()->toString();
            $this->project->user_id = Auth::user()->id;
            $this->project->save();
            session()->flash('message', 'Project created successfully.');
        }

        if ($this->delete == true) {
            $this->project->delete();
        }

        $this->dispatch('closeModal');
        $this->resetProject();
    }
}
