<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{



    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(3)->withQueryString()
        ]);
    }



    public function show(Post $post)
    {

        return view('posts.show', [
            'post' => $post

        ]);
    }



    public function create()
    {

        return view('posts.create');
    }



    public function store()
    {

       // $path  = request()->file('image')->store('slike');



        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail', 'public');

        Post::create($attributes);

        session()->flash('success', 'Successfully posted!!!');

        return redirect('/');
    }
}


//  7 methods rule ====  index, show, create, store, edit, update, destroy
