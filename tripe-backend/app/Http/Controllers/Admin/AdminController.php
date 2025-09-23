<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', 'You logged out successfully, Admin!');

    }
    //End method

    public function forgot_password()
    {
        return view('admin.admin_forgot_password');
    }
    //End Method

    public function forgot_password_submit(Request $request)
    {
        
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin)
        {
            return redirect()->back()->with('error', 'Sorry, Champ! The email you provided is not recognized.');
        }

        $token = hash('sha256', time());
        $admin->token = $token;
        $admin->update();

        $pwdResetLink = url('admin/password-reset/' . $token . '/' . $request->email);
        $subject = "Password Reset";

        $info = [
            'user'=> $admin['username'],
            'pwdResetLink' => $pwdResetLink
        ];

        Mail::to($request->email)->send(new ResetPassword($subject, $info));

        return redirect()->back()->with('success', "A password reset link has been sent to your inbox. Make sure to check your spam too.");

    }
    //End method

    public function admin_reset_password($token, $email)
    {
        $admin = Admin::where('email', $email)->where('token', $token)->first();
        if(!$admin)
        {
            return redirect()->route('admin_login')->with('error', "Token has expired. Please try again.");
        }
        else
        {
            return view('admin.reset_password', compact('token', 'email'));
        }

    }   //End Method

    public function admin_reset_password_submit(Request $request, $token, $email)
    {
        

        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['required', 'same:password']

        ]);

        $admin = Admin::where('email', $email)->where('token', $token)->first();

        if(Hash::check($request->password, $admin->password))
        {
            return redirect()->back()->with('error', 'Oops, Sorry! Your same old password can not work again.');
        }
        
        $admin->password = Hash::make($request->password);

        $admin->token = '';
        $admin->update();

        return redirect()->route('admin_login')->with('success', 'Young Maester, you can now log in with your new password.'); 


        // dd($request->all());

    }

}

