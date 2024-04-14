<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsControllerController;

use App\Http\Controllers\ArticlesController;
use App\Models\Article;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ArticlesController::class,'index'])->name('root');

Route::get('/aa/{id}', function ($i) {
    // return view('welcome');
    return '我是'.$i;
});

Route::get('/about', [welcomeController::class, 'about']);

Route::resource('posts',PostsController::class)->only(['index','show']);

Route::resource('posts.comment',PostsController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// 

Route::resource('articles', ArticlesController::class);