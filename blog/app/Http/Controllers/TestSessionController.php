<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestSessionController extends Controller
{
    // get all sessions
    public function sessions(Request $req){
        // var_dump($req->session()->all());
        print_r(Session::all());
    }

    // Session set
    public function set(Request $req)
    {
        // one way
        $req->session()->put('name', 'Saqib Aminul');
        $req->session()->put('email', 'saqib@email.com');

        // two way
       Session::put('phone', '45453255214');

       // three way
       Session(['address' => '38/2, Narayanganj, Dhaka']);
    }

    // Session::get()
    public function getData(Request $req)
    {
        // one wqy
        echo $req->session()->get('name', "Default Value");
        echo "<br>";
        echo $req->session()->get("email");
        echo "<br>";

        // two way
        echo Session::get('phone');

        echo "<br>";
        // three way
        echo Session::get('address');
    }

    // session()->flush() , session()->forget()
    public function delete(Request $req)
    {
        // $req->session()->forget('name');
        $req->session()->flush();
    }

    public function forget(Request $req){
        $req->session()->forget('email');
    }

    // Session::has()
    public function check(Request $req){
        if($req->session()->has('email')){
            echo "Email: ". Session::get('email');
        }else{
            echo "No email session set!";
        }

        // echo "check onether way <br>";

        echo "<br>";
        // check onether way
        if($req->session()->exists('email')){
            echo "Email: ". Session::get('email');
        }else{
            echo "No email session set!";
        }
    }

    // Session::flash()
    public function flash(Request $req){
        $req->session()->flash('msg', 'Post created successfully');
    }

    // show session for flash
    public function showMsg(Request $req){
        echo $req->session()->get('msg');
    }

}