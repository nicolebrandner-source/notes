<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
       public function index()
   {
    $posts = auth()->user()->favorites;

return view('favorites.index', ['posts' => $posts]);
   }

   public function store(Post $post)
{
    auth()->user()->favorites()->syncWithoutDetaching($post->id);

    return back();
}

public function destroy(Post $post)
{
    auth()->user()->favorites()->detach($post->id);

    return back();
}
}
