<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $posts = auth()->user()->posts;

   return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
    'headline' => 'required|max:200',
    'subheadline' => 'required|max:200',
    'body' => 'required|max:1000',
]);

$post = new Post();
$post->body = $validated['body'];
$post->headline = $validated['headline'];
$post->subheadline = $validated['subheadline'];
$post->is_published = $request->boolean('is_published');
$post->user_id = auth()->id();
$post->save();

return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        abort_if($post->user_id !== auth()->id(), 403);

return view('admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
    abort_if($post->user_id !== auth()->id(), 403);
    return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        abort_if($post->user_id !== auth()->id(), 403);
            $validated = $request->validate([
    'headline' => 'required|max:200',
    'subheadline' => 'required|max:200',
    'body' => 'required|max:1000',
]);

$post->body = $validated['body'];
$post->headline = $validated['headline'];
$post->subheadline = $validated['subheadline'];
$post->is_published = $request->boolean('is_published');
$post->save();

    return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        abort_if($post->user_id !== auth()->id(), 403);

$post->comments()->delete();
$post->delete();

return redirect()->route('admin.posts.index');
    }
}
