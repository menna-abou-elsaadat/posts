<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddComment;
use App\Http\Livewire\CommentList;
use App\Http\Livewire\EditComment;

Route::middleware('auth')->group(function () {

	Route::get('add-comment/{post_id}', AddComment::class)->name('add-comment');
	Route::get('comment-list/{post_id}', CommentList::class)->name('comment-list');
	Route::get('edit-comment/{comment_id}', EditComment::class)->name('edit-comment');
	
});
?>