<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestLogController extends Controller
{
    public function log(){
        $message = "Welcome to dhaka";

        Log::debug($message);
    }

    public function get_user(){
        $user = User::find(1);

        Log::debug($user);
        Log::info($user);
    }
}
