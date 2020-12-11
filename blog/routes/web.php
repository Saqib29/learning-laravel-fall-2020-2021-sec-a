<?php

use Illuminate\Support\Facades\Route;

Route::get('index', 'HomeController@index');
Route::post('/add-user', 'HomeController@post');
Route::put('/add-user', 'HomeController@put');
Route::patch('/add-user', 'HomeController@patch');

Route::redirect('/add-user', '/');

// Route::delete('/add-user', 'HomeController@delete');

Route::prefix('admin')->group(function(){
    Route::get('hello', function() {
        return "<h1>Hello</h1>";
    });    
});

Route::group(['prefix' => 'admin'], function () {
   Route::get('world', function() {
        return "<h1>World</h1>";
    }); 
});

Route::get('/', function () {
    return view('welcome');
});
