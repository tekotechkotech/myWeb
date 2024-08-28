<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    public $blogs;
    public function render()
    {
        $this->blogs = ModelsBlog::get();
        return view('livewire.template.T001.blog');
    }
}
