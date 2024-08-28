<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Certification;
use Illuminate\Support\Facades\Auth;

class ACertification extends Component
{
    public $certifications;

    public $certification;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete=false;
        // Jika ada data certification yang diberikan, gunakan untuk pengeditan.
        $this->resetCer();
    }

    public function resetCer() {
        
        $this->certification = [
            'id' => '',
            'certification_name' => '',
            'institution' => '',
            'issue_date' => '',
            'expiry_date' => '',
        ];
    }

    public function render()
    {
        $this->certifications = Certification::with('user')->orderBy('created_at','DESC')->get();
        return view('livewire.a-certification');
    }

    public function showModal($id,$delete)
    {
        if ($id != '') {

            $c = Certification::where('id', $id)->first();

            $this->certification = [
                'id' => $c->id,
                'certification_name' => $c->certification_name,
                'institution' => $c->institution,
                'issue_date' => $c->issue_date,
                'expiry_date' => $c->expiry_date,
            ];
            $this->delete = $delete;

        }else{
            
            $this->certification = [
                'id' => '',
                'certification_name' => '',
                'institution' => '',
                'issue_date' => '',
                'expiry_date' => '',
            ];
        }
        // dd($this->delete);
    }

    public function submit()
    {

        // Validasi input
        $validatedData = $this->validate([
            'certification.certification_name' => 'required|string',
            'certification.institution' => 'required|string',
            'certification.issue_date' => 'nullable|date',
            'certification.expiry_date' => 'nullable|date',
        ]);

        if ($this->certification['id'] != null) {
            $this->certification = Certification::findOrFail($this->certification['id']);
        } else {
            $this->certification = new Certification();
        }

        // Isi data model dengan data yang telah divalidasi
        $this->certification->fill($validatedData['certification']);

        if ($this->certification['id']) {
            // Edit mode
            $this->certification->save();
            session()->flash('message', 'Certification updated successfully.');
        } else {
            // Create mode
            $this->certification['id'] = Str::uuid()->toString();
            $this->certification->user_id = Auth::user()->id;
            $this->certification->save();
            session()->flash('message', 'Certification created successfully.');
        }

        if ($this->delete==true) {
            // Delete mode
            $this->certification->delete();
        }

        // Menutup modal setelah submit berhasil
        $this->dispatch('closeModal');

        // Mereset form setelah submit berhasil
        $this->resetCer();
    }

}
