<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.admin_login');
    }
    // End method

    public function login_submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
         
        $inputs = $request->all();
        $data = [
            'username' => $inputs['username'],
            'password' => $inputs['password']
        ];

        if(Auth::guard('admin')->attempt($data))
        {
            return redirect()->route('admin_dashboard');
        } else{
            return redirect()->route('admin_login')->with('error','Invalid credentials. Please try again!');
        }




    }
    //End method

    
}

