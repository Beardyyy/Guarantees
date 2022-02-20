<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function store(Post $post)
    {



        request()->validate([
            'body' => 'required'
        ]);


        $post->comment()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return redirect()->back();
    }



    public function destroy(Comment $comment)
    {

        $comment->delete();

        session()->flash('success', 'Comment deleted!!!');
        return redirect()->back();
    }
}
