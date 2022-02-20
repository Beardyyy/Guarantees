<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{


    public function edit(User $user)
    {
        return view('user.user', [
            'user' => $user
        ]);
    }




    public function update(User $user)
    {

        $attributes = request()->validate([

            'name' => ['required', Rule::unique('users', 'name')->ignore($user->id)],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],

        ]);

        $user->update($attributes);

        session()->flash('success', 'Successfully updated!!!');

        return redirect("user/" . $user->id);
    }




    public function showPassword(User $user)
    {

        return view('user.user-password', [
            'user' => $user
        ]);
    }




    public function changePassword(Request $request)
    {

        $user = Auth::user();
        $userPassword = $user->password;

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->old_password, $userPassword)) {
            return back()->withErrors(['old_password'=>'password not match']);
        }

        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with('success','password successfully updated');
    }

}
