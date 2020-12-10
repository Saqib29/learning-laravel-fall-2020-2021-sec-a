<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});
