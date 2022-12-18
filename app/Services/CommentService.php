<?php

namespace App\Services;

use App\Models\Comment;

class CommentService{

	public static function store($post,$comment,$user_id)
	{
		$new_comment = new Comment();
		$new_comment->post_id = $post->id;
		$new_comment->comment = $comment;
		$new_comment->user_id = $user_id;
		$new_comment->save();

		return $new_comment;
	}

	public static function edit($comment,$comment_text)
	{
		$comment->comment = $comment_text;
		$comment->save();
	}

}

?>