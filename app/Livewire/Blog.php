<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    public $blogs;
    public $slug;

    public function mount($id) {
        // dd($id);
        $this->slug = $id;
    }

    public function render()
    {
        // dd($id);
        if ($this->slug !== 'null') {
            $this->blogs = ModelsBlog::where('slug', $this->slug)->first();
            return view('livewire.template.T001.blog-detail');
            
        } else {
            $this->blogs = ModelsBlog::get();
            return view('livewire.template.T001.blog');
        }
    }
}
