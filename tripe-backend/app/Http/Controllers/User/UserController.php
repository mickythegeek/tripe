<?php

namespace App\Http\Controllers\User;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register()
    {
        return view("user.register");
    }
    //End Method

    public function register_submit(Request $request)
    {
        // Input Validation 
        
        $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:8'],
            'confirmPassword' => ['required', 'same:password']

        ]);

        // Generate token
        $token = hash('sha256', time());

        $inputs = $request->all();
        $data = [
            'name' => $inputs['firstName'] . ' ' . $inputs['lastName'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
            'token' => $token,
            'status' => 0,
        ];
        // Create new user
        $user = User::create($data);


        // Send verification mail
        $verifyLink = url('verify-email/' . $token . '/' . $inputs['email']);

        $subject = "Verify Your Account";

        $info = [
            'name'=> $user['name'],
            'verifyLink' => $verifyLink
        ];
        Mail::to($user->email)->send(new EmailVerification($subject, $info));

        


        return redirect()->route('user_login')->with('success', 'Please check your email to verify your account');

    }
    //End Method

    public function verify_email($token, $email)
    {
        $user = User::where('token', $token)->where('email', $email)->where('status', 0)->first();

        if (!$user)
        {
            return redirect()->route('user_login')->with('error', 'Invalid Verification Link');
        }

        $user->status = 1;
        $user->token = null;
        $user->save();

        return redirect()->route('user_login')->with('success', 'Email verified! You can now login.');
    }
    // End Method

    public function login()
    {
        return view("user.login");
    }
    // End method

        public function dashboard()
    {
        return view('user.dashboard');
    }

    

    public function login_submit(Request $request)
    {
       
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        // dd($request->all());

        $inputs = $request->all();

        $data = [
            'email' => $inputs['email'],
            'password' => $inputs['password']
        ];

        if(Auth::guard('web')->attempt($data))
        {
            return redirect()->route('dashboard');
        } else{
            return redirect()->route('user_login')->with('error','Invalid credentials. Please try again!');
        } 
    }
    //End Method




}
