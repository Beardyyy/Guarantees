<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{



    public function show(User $user)
    {

       // dd($user->id);
        return view('user.user-posts', [
            'posts' => Post::where("user_id", $user->id)->get()

        ]);
    }


    public function edit(Post $post)
    {
        return view('user.post-edit', [
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


        if(isset($attributes['thumbnail']))
        {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail', 'public');
        }

        $post->update($attributes);

        session()->flash('success', 'Successfully updated!!!');
        return redirect('/user/posts/'. $post->id .'/edit');
    }
}
