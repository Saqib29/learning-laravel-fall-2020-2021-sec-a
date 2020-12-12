<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('create_customer', function(){
    DB::table('customers')->insert(
        ['name' => 'saqib', 'email'=> 'sqib@email', 'votes' => '120']
    );
});

Route::get('customers', 'CustomerController@index');

Route::get('/', function () {
    return view('welcome');
});
