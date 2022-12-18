<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Services\PostService;

class EditPost extends Component
{
    public $post_id;
    public $post;
    public $post_text ;

    public function mount($post_id)
    {
        $this->post_id = $post_id;
        $this->post = Post::find($post_id);
        $this->post_text = $this->post->post;
    }

    public function render()
    {
        return view('livewire.edit-post')
                ->extends('layouts.app')
                ->section('content');
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'post_text' => 'required',
        ]);

        $post = PostService::edit($this->post,$validatedData['post_text']);
        return redirect(route('post-list'));
    }
}
