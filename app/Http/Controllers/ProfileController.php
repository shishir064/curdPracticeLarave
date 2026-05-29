<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function index($id)
    {
        $user = User::find($id);
        $user->load('userDetail');
        // return $user;
        return view('users.profile', compact('user'));
    }

    public function show()
    {
        return view('users.userProfile');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // $data['user_id'] = Auth::id();

        UserDetail::updateOrCreate(
            ['user_id' => $request->user_id],
            $data
        );
        return redirect()->route('indexx');
    }
    public function edit($id)
    {
        $user = User::find($id);
        $user->load('userDetail');
        return view('users.userEdit', compact('user'));
    }

    
}
