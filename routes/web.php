<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/welcome', [StudentController::class, 'index']);
