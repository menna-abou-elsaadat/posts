<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use App\Http\Resources\PostsResource;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::accessable(Auth::user());
        return PostsResource::collection($posts);
    }
}
