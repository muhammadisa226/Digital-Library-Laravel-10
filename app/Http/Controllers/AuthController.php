<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
      public function login(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' =>  'required'
        ]);
        if(Auth::attempt($validatedData)){
            if(auth()->user()->role === 'admin'){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard/admin');
            }else{
                $request->session()->regenerate();
                return redirect()->intended('/dashboard/user');
            }
        }

        return back()->with('loginerror','Login Failed!');

    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'email' => 'required|email|unique:users',
            'password' =>  ['required','min:5','max:255']
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['role'] = 'user';
        User::create($validatedData);

        return redirect('/')->with('success', 'Registration Success Please Login!');
    }
    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
