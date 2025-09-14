<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.admin_login');
    }
    // End method

    public function login_submit(Request $request)
    {
        dd($request->all());
    }
    //End method

}

