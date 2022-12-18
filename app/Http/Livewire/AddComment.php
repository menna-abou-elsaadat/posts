<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Services\CommentService;
use Auth;

class AddComment extends Component
{
    public $post_id;
    public $post;
    public $comment_text;

    public function mount($post_id)
    {
        $this->post_id = $post_id;
        $this->post = Post::find($post_id);
    }

    public function render()
    {
        return view('livewire.add-comment')
                ->extends('layouts.app')
                ->section('content');
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'comment_text' => 'required',
        ]);

        $post = CommentService::store($this->post,$validatedData['comment_text'],Auth::user()->id);
        return redirect('/comment-list/'.$this->post->id);
    }
}
