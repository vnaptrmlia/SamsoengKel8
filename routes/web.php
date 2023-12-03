<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('dasar');
});

Route::get('/univ', [UserController::class, 'GetData']);

