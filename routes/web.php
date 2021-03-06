<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index']);
Route::post('/posts',[PostController::class,'store']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}/edit',[PostController::class,'edit']);
Route::put('/posts/{post}',[PostController::class,'update']);
Route::delete('/posts/{post}',[PostController::class,'delete']);