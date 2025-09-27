<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view("user.register");
    }
    //End Method

    public function register_submit(Request$request)
    {
        dd($request->all());

    }
}
