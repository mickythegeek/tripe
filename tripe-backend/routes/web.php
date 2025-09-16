<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
    Route::post('/login_submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');

});
