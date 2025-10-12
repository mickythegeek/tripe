<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

// Public API routes

Route::post('/register', [UserController::class, 'api_register'])->name('api_register');
Route::post('/login', [UserController::class, 'api_login'])->name('api_login');

// Protected API routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', [UserController::class, 'api_dashboard'])->name('api_dashboard');
    Route::post('/logout', [UserController::class, 'api_logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});









