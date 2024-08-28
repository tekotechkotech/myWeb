<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class ASkill extends Component
{
    public $skills;

    public $skill;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetSkill();
    }

    public function resetSkill() {
        $this->skill = [
            'id' => '',
            'skill_name' => '',
            'category' => '',
            'proficiency' => '',
        ];
    }

    public function render()
    {
        $this->skills = Skill::with('user')->orderBy('created_at','DESC')->get();
        return view('livewire.a-skill');
    }

    public function showModal($id, $delete)
    {
        if ($id != '') {
            $s = Skill::where('id', $id)->first();

            $this->skill = [
                'id' => $s->id,
                'skill_name' => $s->skill_name,
                'category' => $s->category,
                'proficiency' => $s->proficiency,
            ];
            $this->delete = $delete;
        } else {
            $this->resetSkill();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'skill.skill_name' => 'required|string',
            'skill.category' => 'nullable|string',
            'skill.proficiency' => 'nullable|string',
        ]);

        if ($this->skill['id'] != null) {
            $this->skill = Skill::findOrFail($this->skill['id']);
        } else {
            $this->skill = new Skill();
        }

        $this->skill->fill($validatedData['skill']);

        if ($this->skill['id']) {
            $this->skill->save();
            session()->flash('message', 'Skill updated successfully.');
        } else {
            $this->skill['id'] = Str::uuid()->toString();
            $this->skill->user_id = Auth::user()->id;
            $this->skill->save();
            session()->flash('message', 'Skill created successfully.');
        }

        if ($this->delete == true) {
            $this->skill->delete();
        }

        $this->dispatch('closeModal');
        $this->resetSkill();
    }
}
