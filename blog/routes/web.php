<?php

use Illuminate\Support\Facades\Route;

Route::get('index', 'HomeController@index');
Route::post('/add-user', 'HomeController@post');


Route::get('/', function () {
    return view('welcome');
});
