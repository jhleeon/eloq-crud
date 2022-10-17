<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/create',[PostController::class,'create']);
Route::post('/store',[PostController::class,'store'])->name('post.create');
Route::get('/index',[PostController::class,'index']);
Route::get('/show/{id}',[PostController::class,'show']);
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::post('/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('/delete/{id}',[PostController::class,'delete']);


