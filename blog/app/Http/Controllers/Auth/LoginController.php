<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $req){
        $data = $req->only(['email', 'password']);
        
        if(Auth::attempt($data)){
            return redirect()->intended('/admin');
        }else {
            return redirect()->to('/login');
        }

        // return 'log-in';
    }

    public function logout(){
        Auth::logout();

        return redirect()->to('/login');
    }
}
