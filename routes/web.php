<?php

use App\Http\Controllers\Userzone\ProfileController;
   use App\Http\Controllers\PostController;
      use App\Http\Controllers\CommentController;
         use App\Http\Controllers\Admin\PostController as AdminPostController;
         use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

   Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
   Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
       Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
          Route::resource('admin/posts', AdminPostController::class)->names('admin.posts');
});

require __DIR__.'/auth.php';
