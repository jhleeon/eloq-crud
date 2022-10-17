<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/add-post',[PostController::class,'addPost']);
Route::post('/create-post',[PostController::class,'createPost'])->name('post.create');
Route::get('/index',[PostController::class,'index']);
Route::get('/show/{id}',[PostController::class,'show']);
