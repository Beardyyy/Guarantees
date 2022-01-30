<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{




    public function create()
    {

        return view('posts.create');
    }





    public function store()
    {


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


    public function show()
    {

        return view('posts.admin-post', [
            'posts' => Post::all()

        ]);
    }


    public function edit(Post $post)
    {
        return view('posts.post-edit', [
            'post' => $post

        ]);
    }
}
