<?php

use App\Http\Controllers\Product;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', [User::class, 'registration']);
Route::post('/registration', [User::class, 'register']);

Route::get('/login', [User::class, 'login_index']);
Route::post('/login', [User::class, 'login']);

Route::get('/logout', [User::class, 'logout']);

Route::get('add_product', [Product::class, 'addProduct']);
Route::post('/add_product', [Product::class, 'add_to_DB']);