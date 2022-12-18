<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Post;
use Auth;

class CommentList extends Component
{
    public $post_id;
    public $post;

    protected $listeners = [
        'deleteComment',
    ];

    public function mount($post_id)
    {
        $this->post_id = $post_id;
        $this->post = Post::find($post_id);
    }

    public function render()
    {
        $comments = $this->post->accessibleComments(Auth::user());
        return view('livewire.comment-list',['comments'=>$comments])
                ->extends('layouts.app')
                ->section('content');
    }

    public function deleteComment($id)
    {
        Comment::where('id',$id)->delete();
    }
}
