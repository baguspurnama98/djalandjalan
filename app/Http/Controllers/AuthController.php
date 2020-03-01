<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        //TODO: Try Attemps With Id and Password!!
        if (Auth::attempt($request->only('email', 'password'), $remember = false)) { // verify [email=>,pass=>,verify=>1]
            return redirect('/');
        } else {
            return back()->with('status', 'Login Failed! Wrong Email/Password!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
