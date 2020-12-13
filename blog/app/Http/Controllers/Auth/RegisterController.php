<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        // return $req->all();

        $data = $req->only(['name', 'email']);
        $data['password'] = Hash::make($req->get('password'));

        User::create($data);

        return "Register craeted successfully";
    }
}
