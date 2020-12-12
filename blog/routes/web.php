<?php

use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('create_user', function () {
    $data = [
        'title' => 'weolcome',
        'description' => 'lorem torem porem morem sorem jarem arem',
        'user_id' => 1,
        'status' => 0
    ];   

    Post::create($data);
});

Route::get('add-post', function () {
    $post = new Post;

    $post->title = 'This is title';
    $post->description = 'This is descripotion';
    $post->user_id = 1;
    $post->status = 1;
    $post->save();
});

Route::get('update-post', function () {
    $post = Post::find(5);
    $post->title = 'This is new title';

    $post->save();
});

Route::get('/', function () {
    return view('welcome');
});
