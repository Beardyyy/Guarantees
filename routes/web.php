<?php


use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;





Route::get('/posts', function () {

    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});





Route::get('posts/{post}', function (Post $post) {

    return view('post-page', [
        'post' => $post
    ]);
});





Route::get('category/{category}', function (Category $category) {
    //dd($category);
    return view('category', [
        'posts' => $category->posts
    ]);
});





Route::get('author/{author}', function (User $author) {

    //dd($author);
    return view('author', [
        'posts' => $author->posts
    ]);
});
