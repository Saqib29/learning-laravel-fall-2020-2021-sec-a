<?php

use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::middleware('test')->group(function(){

    Route::get('one', function () {
        return "this is one";
    })->middleware('test');
    
    Route::get('two', function () {
        return "this is two";
    })->middleware('test');
    
    Route::get('three', function () {
        return "this is three";
    })->middleware('test');
    
});

Route::get('/', function () {
    return view('welcome');
});
