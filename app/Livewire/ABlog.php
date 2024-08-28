<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class ABlog extends Component
{
    public $blogs;
    public $blog;
    public $delete;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $this->delete = false;
        $this->resetBlog();
    }

    public function resetBlog()
    {
        $this->blog = [
            'id' => '',
            'blog_title' => '',
            'slug' => '',
            'content' => '',
        ];
    }

    public function render()
    {
        $this->blogs = Blog::with('user')->orderBy('created_at', 'DESC')->get();
        return view('livewire.a-blog');
    }

    public function showModal($id, $delete)
    {
        if ($id != '') {
            $b = Blog::where('id', $id)->first();

            $this->blog = [
                'id' => $b->id,
                'blog_title' => $b->blog_title,
                'slug' => $b->slug,
                'content' => $b->content,
            ];
            $this->delete = $delete;
        } else {
            $this->resetBlog();
        }
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'blog.blog_title' => 'required|string',
            'blog.slug' => 'required|string',
            'blog.content' => 'required',
        ]);

        if ($this->blog['id'] != null) {
            $this->blog = Blog::findOrFail($this->blog['id']);
        } else {
            $this->blog = new Blog();
            $this->blog['id'] = Str::uuid()->toString();
            $this->blog->user_id = Auth::user()->id; // Replace with your actual user_id
        }

        $this->blog->fill($validatedData['blog']);

        if ($this->blog['id']) {
            $this->blog->save();
            session()->flash('message', 'Blog updated successfully.');
        } else {
            $this->blog->save();
            session()->flash('message', 'Blog created successfully.');
        }

        if ($this->delete == true) {
            $this->blog->delete();
        }

        $this->dispatch('closeModal');
        $this->resetBlog();
    }
}
