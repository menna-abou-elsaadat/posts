<?php

namespace App\Services;

use App\Models\Post;

class PostService{

	public static function store($post,$user_id)
	{
		$new_post = new Post();
		$new_post->post = $post;
		$new_post->user_id = $user_id;
		$new_post->save();

		return $new_post;
	}

}

?>