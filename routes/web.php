<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;


Route::get('/', [BlogController::class, 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);


Route::get('/author/{user:username}', function(User $user) {

    $blogs =  $user->blogs->load('author', 'category');
    return view('blogs', compact('blogs'));
});

Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);