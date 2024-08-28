<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;

class AExperience extends Component
{
    public $experiences;

    public $experience;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetExp();
    }

    public function resetExp() {
        $this->experience = [
            'id' => '',
            'job_title' => '',
            'company_name' => '',
            'category' => '',
            'start_date' => '',
            'end_date' => '',
            'description' => '',
        ];
    }

    public function render()
    {
        $this->experiences = Experience::with('user')->orderBy('created_at','DESC')->get();
        return view('livewire.a-experience');
    }

    public function showModal($id, $delete)
    {
        if ($id != '') {
            $e = Experience::where('id', $id)->first();

            $this->experience = [
                'id' => $e->id,
                'job_title' => $e->job_title,
                'company_name' => $e->company_name,
                'category' => $e->category,
                'start_date' => $e->start_date,
                'end_date' => $e->end_date,
                'description' => $e->description,
            ];
            $this->delete = $delete;
        } else {
            $this->resetExp();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'experience.job_title' => 'required|string',
            'experience.company_name' => 'required|string',
            'experience.category' => 'nullable|string',
            'experience.start_date' => 'nullable|date',
            'experience.end_date' => 'nullable|date',
            'experience.description' => 'nullable|string',
        ]);

        if ($this->experience['id'] != null) {
            $this->experience = Experience::findOrFail($this->experience['id']);
        } else {
            $this->experience = new Experience();
        }

        $this->experience->fill($validatedData['experience']);

        if ($this->experience['id']) {
            $this->experience->save();
            session()->flash('message', 'Experience updated successfully.');
        } else {
            $this->experience['id'] = Str::uuid()->toString();
            $this->experience->user_id = Auth::user()->id;
            $this->experience->save();
            session()->flash('message', 'Experience created successfully.');
        }

        if ($this->delete == true) {
            $this->experience->delete();
        }

        $this->dispatch('closeModal');
        $this->resetExp();
    }
}
