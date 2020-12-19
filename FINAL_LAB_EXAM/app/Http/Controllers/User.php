<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    public function registration(){
        return view('registration');
    }

    public function register(Request $req){
        $user = new ModelsUser();

        $user->name = $req->name;
        $user->username = $req->username;
        $user->contact = $req->contact;
        $user->password = $req->password;
        $user->user_type = $req->user_type;

        $user->save();

        return redirect('/login');
    }

    public function login_index(){
        return view('login');
    }

    public function login(Request $req){
        $user = ModelsUser::where(['username'=>$req->username, 'password'=>$req->password])->first();
        // return $user;

        $req->session()->put('user', $user);

        if(Session::has('user')){
            if($user->user_type == 'admin'){
                $users = ModelsUser::where(['user_type' => 'employee'])->get();
                return view('admin.index', ['users' => $users]);
            } else{
                return view('employee.index');
            }
        } else{
            return view('login');
        }
        
    }
}
