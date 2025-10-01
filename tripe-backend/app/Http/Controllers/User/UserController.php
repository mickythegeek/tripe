<?php

namespace App\Http\Controllers\User;

use Hash;
use App\Models\User;
use App\Mail\ResetPassword;
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
            'name' => $user['name'],
            'verifyLink' => $verifyLink
        ];
        Mail::to($user->email)->send(new EmailVerification($subject, $info));




        return redirect()->route('user_register')->with('success', 'Please check your email to verify your account');

    }
    //End Method

    public function verify_email($token, $email)
    {
        $user = User::where('token', $token)->where('email', $email)->where('status', 0)->first();

        if (!$user) {
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

        if (Auth::guard('web')->attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('user_login')->with('error', 'Invalid credentials. Please try again!');
        }
    }
    //End Method
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('user_login')->with('success', 'You logged out successfully!');

    }
    // End method

    public function forgot_password()
    {
        return view('user.forgot_password');
    }
    // End method


    public function forgot_password_submit(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Sorry, Champ! The email you provided is not recognized.');
        }

        $token = hash('sha256', time());
        $user->token = $token;
        $user->update();

        $pwdResetLink = url('password-reset/' . $token . '/' . $request->email);
        $subject = "Password Reset";

        $info = [
            'user' => $user['name'],
            'pwdResetLink' => $pwdResetLink
        ];

        Mail::to($request->email)->send(new ResetPassword($subject, $info));

        return redirect()->back()->with('success', "A password reset link has been sent to your inbox. Make sure to check your spam too.");

    }
    //End method

    public function reset_password($token, $email)
    {
        $user = User::where('email', $email)->where('token', $token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', "Token has expired. Please try again.");
        } else {
            return view('user.reset_password', compact('token', 'email'));
        }

    }   //End Method

    public function reset_password_submit(Request $request, $token, $email)
    {


        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['required', 'same:password', 'min:8']

        ]);

        $user = User::where('email', $email)->where('token', $token)->first();

        if (Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Oops, Sorry! Your same old password can not work again.');
        }

        $user->password = Hash::make($request->password);

        $user->token = '';
        $user->update();

        return redirect()->route('user_login')->with('success', 'Young Maester, you can now log in with your new password.');


        // dd($request->all());

    }




}
