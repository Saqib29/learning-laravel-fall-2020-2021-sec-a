<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('register', 'Auth\RegisterController@index');
Route::post('register', 'Auth\RegisterController@store');

Route::get('test', function () {
    if(Auth::check()){
        return "Authenticated";
    }else{
        return "Please Log-in";
    }
});

Route::middleware('auth')->group(function(){
    Route::get('admin', function () {
        return 'Welcome to admin';
    });

    Route::get('dashboard', function () {
        return Auth::user();
        return 'Welcome to dashboard';
    });

    Route::get('update', function () {
        return 'Welcome to update';
    });

    Route::get('posts', function () {
        return 'Welcome to posts';
    });
});



Route::get('/', function () {
    return view('welcome');
});
