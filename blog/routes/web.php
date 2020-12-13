<?php

use Illuminate\Support\Facades\Route;

// session
Route::get('set-session', 'TestSessionController@set');
Route::get('get-session', 'TestSessionController@getData');
Route::get('delete-session', 'TestSessionController@delete');
Route::get('forget-session', 'TestSessionController@forget');
Route::get('sessions', 'TestSessionController@sessions');
Route::get('check', 'TestSessionController@check');

Route::get('set-flash', 'TestSessionController@flash');
Route::get('showMsg', 'TestSessionController@showMsg');

// log
Route::get('log', 'TestLogController@log');
Route::get('get_user', 'TestLogController@get_user');


Route::get('/', function () {
    return view('welcome');
});
