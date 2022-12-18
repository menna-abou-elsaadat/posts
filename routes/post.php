<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddPost;
use App\Http\Livewire\PostList;

Route::middleware('auth')->group(function () {

	Route::get('add-post', AddPost::class)->name('add-post');
	Route::get('post-list', PostList::class)->name('post-list');
	
});
?>