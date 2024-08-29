<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;

class AEducation extends Component
{
    public $educations;

    public $education;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetEdu();
    }

    public function resetEdu() {
        $this->education = [
            'id' => '',
            'degree' => '',
            'major' => '',
            'institution' => '',
            'address' => '',
            'start_date' => '',
            'end_date' => '',
            'description' => '',
        ];
    }

    public function render()
    {
        $this->educations = Education::with('user')->orderBy('created_at', 'DESC')->get();
        return view('livewire.a-education');
    }

    public function showModal($id, $delete)
    {
        // dd($id);
        if ($id != '') {
            $e = Education::where('id', $id)->first();

            $this->education = [
                'id' => $e->id,
                'degree' => $e->degree,
                'major' => $e->major,
                'institution' => $e->institution,
                'address' => $e->address,
                'start_date' => $e->start_date,
                'end_date' => $e->end_date,
                'description' => $e->description,
            ];
            $this->delete = $delete;

        } else {
            $this->resetEdu();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'education.degree' => 'required|string',
            'education.major' => 'required|string',
            'education.institution' => 'required|string',
            'education.address' => 'required|string',
            'education.start_date' => 'nullable|date',
            'education.end_date' => 'nullable|date',
            'education.description' => 'nullable|string',
        ]);

        if ($this->education['id'] != null) {
            $this->education = Education::findOrFail($this->education['id']);
        } else {
            $this->education = new Education();
        }

        $this->education->fill($validatedData['education']);

        if ($this->education['id']) {
            $this->education->save();
            session()->flash('message', 'Education updated successfully.');
        } else {
            $this->education['id'] = Str::uuid()->toString();
            $this->education->user_id = Auth::user()->id;
            $this->education->save();
            session()->flash('message', 'Education created successfully.');
        }

        if ($this->delete == true) {
            $this->education->delete();
        }

        $this->dispatch('closeModal');
        $this->resetEdu();
    }
}
