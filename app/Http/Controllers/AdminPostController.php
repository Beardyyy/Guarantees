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


    public function update(Post $post)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);


        if($attributes('thumbnail') !== null)
        {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail', 'public');
        }

        $post->update($attributes);

        session()->flash('success', 'Successfully updated!!!');
        return redirect('/admin/posts/'. $post->slug .'/edit');
    }



    public function destroy(Post $post)
    {

        $post->delete();

        session()->flash('success', 'Post deleted!!!');
        return redirect('/admin/posts/dashboard');
    }
}
