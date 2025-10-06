<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

// Public API routes

Route::post('/register_submit', [UserController::class, 'api_register']);
Route::post('/login_submit', [UserController::class, 'api_login']);

// Protected API routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', [UserController::class, 'api_dashboard']);
    Route::get('/logout', [UserController::class, 'api_logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');
});









