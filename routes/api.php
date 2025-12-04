<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;


// Basic resource route for the User model.
// This registers routes like GET /api/users, POST /api/users, GET /api/users/{user}, etc.
// Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', StudentController::class);
// });

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', function (Request $request) {
        return $request->user();
    });
});