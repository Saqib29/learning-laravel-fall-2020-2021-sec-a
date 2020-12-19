<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', [User::class, 'registration']);
Route::post('/registration', [User::class, 'register']);

Route::get('/login', [User::class, 'login_index']);
Route::post('/login', [User::class, 'login']);