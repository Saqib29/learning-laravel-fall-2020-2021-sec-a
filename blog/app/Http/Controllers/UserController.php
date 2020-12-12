<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('user.register');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required|string',
            'password' => 'numeric'
        ]);

        // return $data;

        return $request->all();
        // dd($request->all());
    }
}
