<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // private function filter($users, $request)
    // {
    //     if ($request->name) {
    //         $users->where('name', 'like', '%' . $request->name . '%');
    //     }
    //     if ($request->sort == 'asc') {
    //        $users = $users->orderBy('created_at', 'asc');
    //     }
    //     return $users;
    // }
    public function index()
    {
    //     $users = User::with('name');
    //     $users = $this->filter($request, $users);
    //     $users = $users->paginate(10);
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
