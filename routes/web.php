<?php


use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;





Route::get('/posts', [PostController::class, 'index'])->name('home');


Route::get('posts/{post}', [PostController::class, 'show']);


Route::get('category/{category}', function (Category $category) {
    //dd($category);
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all()
    ]);
});





Route::get('author/{author}', function (User $author) {

    //dd($author);
    return view('author', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
