<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', function () {
    return "Create Post";
});

Route::get('/post/{post}', function ($post) {
    return "Post {$post}";
});



//Get
//Post
//Put
//Patch
//Delete