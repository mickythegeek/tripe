<?php

namespace App\Http\Controllers\User;

use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view("user.register");
    }
    //End Method

    public function register_submit(Request $request)
    {
        
        $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:8'],
            'confirmPassword' => ['required', 'same:password']

        ]);
        // dd($request->all());

        $inputs = $request->all();
        $data = [
            'name' => $inputs['firstName'] . ' ' . $inputs['lastName'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
        ];

        $user = User::create($data);

        return redirect()->route('user_login')->with('success', 'Registration successful!');

    }
    //End Method

    public function login()
    {
        return view("user.login");
    }
}
