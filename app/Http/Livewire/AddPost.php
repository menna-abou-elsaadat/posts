<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\PostService;
use Auth;

class AddPost extends Component
{
    public $post;
    
    public function render()
    {
        return view('livewire.add-post')
                ->extends('layouts.app')
                ->section('content');
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'post' => 'required',
        ]);

        $new_post = PostService::store($validatedData['post'],Auth::user()->id);
        return redirect(route('post-list'));
    }
}
