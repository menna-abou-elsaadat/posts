<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Services\CommentService;

class EditComment extends Component
{
    public $comment;
    public $comment_text;

    public function mount($comment_id)
    {
        $this->comment_id = $comment_id;
        $this->comment = Comment::find($comment_id);
        $this->comment_text = $this->comment->comment;
    }

    public function render()
    {
        return view('livewire.edit-comment')
                ->extends('layouts.app')
                ->section('content');
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'comment_text' => 'required',
        ]);

        $post = CommentService::edit($this->comment,$validatedData['comment_text']);
        return redirect('comment-list/'.$this->comment->post_id);
    }
}
