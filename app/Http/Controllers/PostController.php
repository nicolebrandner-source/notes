<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', true)->get();

        return view('posts.index', ['posts' => $posts]);
    }

       public function show(Post $post)
          {
              abort_if(! $post->is_published, 404);
            return view('posts.show', ['post' => $post]);
               }
}