<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.userManagement', compact('users'));
    }

    public function userStore(Request $request)
{
    // dd($request->all());
    $validated = $request->validate([
        'address' => 'required',
        'phone' => 'required',
        'dob' => 'required',
    ]);

    // dd($validated);

    $save = UserDetail::create($validated);

    dd($save);
}
}
