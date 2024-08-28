<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Expertise;
use Illuminate\Support\Facades\Auth;

class AExpertise extends Component
{
    public $expertises;
    public $expertise;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetExpertise();
    }

    public function resetExpertise()
    {
        $this->expertise = [
            'id' => '',
            'expertise_name' => '',
            'start_date' => '',
            'show' => 'hidden',
        ];
    }

    public function render()
    {
        $this->expertises = Expertise::with('user')->orderBy('created_at', 'DESC')->get();
        return view('livewire.a-expertise');
    }

    public function showModal($id, $delete)
    {
        if ($id != '') {
            $e = Expertise::where('id', $id)->first();

            $this->expertise = [
                'id' => $e->id,
                'expertise_name' => $e->expertise_name,
                'start_date' => $e->start_date,
                'show' => $e->show,
            ];
            $this->delete = $delete;
        } else {
            $this->resetExpertise();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'expertise.expertise_name' => 'required|string',
            'expertise.start_date' => 'nullable|date',
            'expertise.show' => 'required|in:show,hidden',
        ]);

        if ($this->expertise['id'] != null) {
            $this->expertise = Expertise::findOrFail($this->expertise['id']);
        } else {
            $this->expertise = new Expertise();
        }

        $this->expertise->fill($validatedData['expertise']);

        if ($this->expertise['id']) {
            $this->expertise->save();
            session()->flash('message', 'Expertise updated successfully.');
        } else {
            $this->expertise['id'] = Str::uuid()->toString();
            $this->expertise->user_id = Auth::user()->id;
            $this->expertise->save();
            session()->flash('message', 'Expertise created successfully.');
        }

        if ($this->delete == true) {
            $this->expertise->delete();
        }

        $this->dispatch('closeModal');
        $this->resetExpertise();
    }
}
