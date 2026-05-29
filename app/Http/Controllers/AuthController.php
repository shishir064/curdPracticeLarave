<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginCheck;
use App\Http\Requests\SignUpStore;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function loginStore(LoginCheck $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('createpostform')->with('success', 'Login Successfully');
        }
        
        return back()->withErrors([
            'email' => 'The provided Email or Password do not match our records.',
        ]);
    }
    //sign up
    public function signup()
    {
        return view('pages.signup');
    }
    public function signupStore(SignUpStore $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        return redirect()->route('createpost');
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
