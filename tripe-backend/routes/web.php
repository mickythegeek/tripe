<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\FrontendController;




// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware('Admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});
Route::middleware(['user'])->group(function () {
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
    Route::post('/login_submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');

    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');
    Route::get('/forgot-password', [AdminController::class, 'forgot_password'])->name('admin_forgot_password');
    Route::post('/forgot-password', [AdminController::class, 'forgot_password_submit'])->name('admin_forgot_password_submit');
    Route::get('/password-reset/{token}/{email}', [AdminController::class, 'admin_reset_password']);
    Route::post('/password-reset/{token}/{email}', [AdminController::class, 'admin_reset_password_submit'])->name('reset_password_submit');

});


// User Route
Route::get("/", [FrontendController::class, 'index'])->name('index');
Route::get('/register', [UserController::class, 'register'])->name('user_register');
Route::post('/register_submit', [UserController::class, 'register_submit'])->name('user_register_submit');
Route::get('/login', [UserController::class, 'login'])->name('user_login');
Route::get('/verify-email/{token}/{email}', [UserController::class, 'verify_email'])->name('verify_email');
Route::post('/login_submit', [UserController::class, 'login_submit'])->name('login_submit');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [UserController::class, 'forgot_password'])->name('forgot_password');
Route::post('/forgot-password', [UserController::class, 'forgot_password_submit'])->name('forgot_password_submit');
Route::get('/password-reset/{token}/{email}', [UserController::class, 'reset_password'])->name('reset_password');
Route::post('/password-reset/{token}/{email}', [UserController::class, 'reset_password_submit'])->name('user_reset_password_submit');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');


// Route::post('/verify_email/{token}/{email}', [UserController::class, 'verify_email_submit'])->name('verify_email_submit');