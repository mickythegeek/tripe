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


    /**
     * @OA\Post(
     *     path="/register",
     *     summary="Register a new user",
     *     tags={"User Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="User registration details",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 required={"firstName", "lastName", "email", "password", "confirmPassword"},
     *                 @OA\Property(property="firstName", type="string", example="Jane"),
     *                 @OA\Property(property="lastName", type="string", example="Doe"),
     *                 @OA\Property(property="email", type="string", format="email", example="jane.doe@tripe.com"),
     *                 @OA\Property(property="password", type="string", format="password", minLength=8, example="password123"),
     *                 @OA\Property(property="confirmPassword", type="string", format="password", minLength=8, example="password123")
     * 
     * 
     * )
     *             
     * )
     * ),
     * @OA\Response(
     *    response=201,
     *    description="Successful registration",
     *    @OA\JsonContent(
     *        @OA\Property(property="status", type="string", example="success"),
     *        @OA\Property(property="message", type="string", example="User registered successfully. Please check your email to verify your account."),
     *        @OA\Property(property="verifyLink", type="string", format="url")
     * )
     * ),
     * @OA\Response(
     *     response=422,
     *     description="Validation errors"
     * )
     * )
     */
    public function api_register(Request $request)
    {
        $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'confirmPassword' => ['required', 'same:password']
        ]);

        // Generate token for email verification
        $verification_token = hash('sha256', time());  




        $user = User::create([
            'name' => $request->firstName . " " . $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token' => $verification_token,
            'status' => 0
        ]);

        // Send verificaition mail
        $verifyLink = url('verify-email/' . $verification_token . '/' . $request->email);

        $subject = "Verify Your Account";

        $info = [
            'name' => $user['name'],
            'verifyLink' => $verifyLink
        ];
        Mail::to($user->email)->send(new EmailVerification($subject, $info));

        // $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully. Please check your email to verify your account.',
            'verifyLink' => $verifyLink,
        ]);
    }




    /**
     * @OA\Post(
     *     path="/login",
     *     summary="Login a user",
     *     tags={"User Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="User login details",
     *          @OA\MediaType(
     *              mediaType="application/x-www-form-urlencoded",
     *              @OA\Schema(
     *                  required={"email", "password"},
     *                  @OA\Property(property="email", type="string", format="email"),
     *                  @OA\Property(property="password", type="string", format="password")
     * 
     * )
     *            
     * ) 
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Successful login",
     *     @OA\JsonContent(
     *        @OA\Property(property="status", type="string", example="success"),
     *        @OA\Property(property="message", type="string", example="User logged in successfully."),
     *        @OA\Property(property="access_token", type="string"),
     *        @OA\Property(property="token_type", type="string", example="Bearer"),
     *        @OA\Property(property="user", type="object",
     *            @OA\Property(property="id", type="integer"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="email", type="string", format="email"),
     *            @OA\Property(property="created_at", type="string", format="date-time"),
     *            @OA\Property(property="updated_at", type="string", format="date-time")
     *            )
     * )
     * ),
     * @OA\Response(
     *     response=401,
     *     description="Invalid credentials")
     * )
     * 
     */
    public function api_login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid Credentials. Try again!'
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully.',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }
    // End method


    /**
     * @OA\Get(
     *     path="/dashboard",
     *     summary="Get authenticated user data",
     *     tags={"User Profile"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Welcome to your dashboard."),
     *             @OA\Property(property="user", type="object",
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="email", type="string", format="email"),
     *                 @OA\Property(property="created_at", type="string", format="date-time"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time")
     * )
     * )
     * ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated")
     * )
     * )
 */

    public function api_dashboard(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Welcome to your dashboard.',
            'user' => $request->user(),
        ], 200);
    }
    /**
     * @OA\Post(
     *     path="/api/logout",
     *     summary="Logout the authenticated user",
     *     tags={"User Authentication"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful logout",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="User logged out successfully.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     )
     * )
     */


    public function api_logout(Request $request)
    {
        request()->user()->tokens()->delete();

        return response() ->json([
            'status' => 'success',
            'message' => 'You logged out succesfully.'
        ]);
    }








}
