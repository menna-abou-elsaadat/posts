<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Auth;

class PostList extends Component
{
    public function render()
    {
        $posts = Post::accessable(Auth::user());
        return view('livewire.post-list',['posts'=>$posts])
                    ->extends('layouts.app')
                    ->section('content');
    }
}