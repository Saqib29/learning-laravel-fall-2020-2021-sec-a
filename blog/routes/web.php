<?php

use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('user/create', 'UserController@create');
Route::post('users', 'UserController@store');

Route::get('/', function () {
    return view('welcome');
});
