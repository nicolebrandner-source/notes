<?php

namespace App\Http\Controllers;

   use App\Models\Comment;
   use App\Models\Post;

use Illuminate\Http\Request;

class CommentController extends Controller
{
       public function store(Request $request, Post $post)
       {
        $validated = $request->validate([
    'body' => 'required|max:1000',
]);
$comment = new Comment();
        $comment->body = $validated['body'];
        $comment->post_id = $post->id;
        $comment->user_id = auth()->id();
        $comment->save();
        return redirect()->route('posts.show', $post);
}
}
