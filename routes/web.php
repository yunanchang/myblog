<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aa/{id}', function ($i) {
    // return view('welcome');
    return '我是'.$i;
});

Route::get('/about', [welcomeController::class, 'about']);