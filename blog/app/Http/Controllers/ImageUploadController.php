<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function image(){
        return view('upload.image');
    }

    public function store(Request $req){
        // echo $req->file('image')->getClientOriginalName();
        // echo "<br>";
        // echo $req->file('image')->extension();

        $path = $req->file('image')->store('images');

        return $path;
    }

    public function files(){
        // $url = Storage::url('images/kJvKZFJcIsFyLAO9xeAEb2A3x5hemeYGZVsCtwfL.png');
        $url = asset(Storage::url('images/kJvKZFJcIsFyLAO9xeAEb2A3x5hemeYGZVsCtwfL.png'));

        return view('upload.showImage', ['path' => $url]);
        // echo "<img src='$url'>";
    }

    public function delete(){
        Storage::delete('public/images/GlE6qrz88OtWa9DvjQPBxY03X1MQ4gDDgPQT1uL6.jpg');
    }
}
