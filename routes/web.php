<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsControllerController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/aa/{id}', function ($i) {
    // return view('welcome');
    return '我是'.$i;
});

Route::get('/about', [welcomeController::class, 'about']);

Route::resource('posts',PostsController::class)->only(['index','show']);

Route::resource('posts.comment',PostsController::class);