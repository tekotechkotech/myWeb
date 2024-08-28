<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;

class ASocial extends Component
{
    public $socials;

    public $social;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetSocial();
    }

    public function resetSocial() {
        $this->social = [
            'id' => '',
            'platform_name' => '',
            'url' => '',
        ];
    }

    public function render()
    {
        $this->socials = Social::with('user')->orderBy('created_at','DESC')->get();
        return view('livewire.a-social');
    }

    public function showModal($id, $delete)
    {
        if ($id != '') {
            $s = Social::where('id', $id)->first();

            $this->social = [
                'id' => $s->id,
                'platform_name' => $s->platform_name,
                'url' => $s->url,
            ];
            $this->delete = $delete;
        } else {
            $this->resetSocial();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'social.platform_name' => 'required|string',
            'social.url' => 'required|url',
        ]);

        if ($this->social['id'] != null) {
            $this->social = Social::findOrFail($this->social['id']);
        } else {
            $this->social = new Social();
        }

        $this->social->fill($validatedData['social']);

        if ($this->social['id']) {
            $this->social->save();
            session()->flash('message', 'Social link updated successfully.');
        } else {
            $this->social['id'] = Str::uuid()->toString();
            $this->social->user_id = Auth::user()->id; // Sesuaikan dengan user ID
            $this->social->save();
            session()->flash('message', 'Social link created successfully.');
        }

        if ($this->delete == true) {
            $this->social->delete();
        }

        $this->dispatch('closeModal');
        $this->resetSocial();
    }
}
