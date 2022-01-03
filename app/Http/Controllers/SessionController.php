<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{


    public function create()
    {
        return view('sessions.create');
    }


    public function store()
    {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

       // dd(request());
        if(Auth::attempt($attributes))
        {
            session()->flash('success', 'Welcome back!');
            //dd(Auth::attempt($attributes));
            return redirect('/');
        }


        /*
        throw ValidationException::withMessages([
            'email' => 'Your credentials could not be verified!'
        ]);
        */

        return back()->withErrors(['email' => 'Not a valid email!']);

    }


    public function destroy()
    {
        auth()->logout();

        session()->flash('success', 'Goodbye!!!');

        return redirect('/');
    }
}
