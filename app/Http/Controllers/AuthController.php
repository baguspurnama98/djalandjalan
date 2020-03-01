<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request){
        //TODO : Invalid FeedBack Front End!!
        $request->validate([
            'full_name' => ['required'],
            'email' => ['required', 'unique:user'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
            // 'birth_day' => ['required'],
            'phone' => ['required', 'unique:user'],
            'gender' => ['required'],
            'agree' => ['required'],
        ]);

        //TODO: Handling Failed Eloquent!!
        User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'birth_day' => $request->birth_day,
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);
        //TODO : Handling Failed Front End!!
        return redirect('/login')->with('status', 'Account Anda Berhasil Di Daftarkan!');
    }
}
