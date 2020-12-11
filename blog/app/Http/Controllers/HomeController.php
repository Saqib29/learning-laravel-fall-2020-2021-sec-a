<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
       
        return view('index');
    }

    public function post(){
        return "I'm post";
    }

    public function put(){
        return "I'm put";
    }

    public function patch(){
        return "I'm patch";
    }

    public function delete(){
        return "I'm delete!";
    }
}
