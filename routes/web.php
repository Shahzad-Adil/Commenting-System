<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('post/{id}', [PostsController::class, 'post'])->name('post');
Route::post('custom-login', [CustomAuthController::class, 'login'])->name('login.custom');
Route::post('post-comment', [PostsController::class, 'postComment'])->name('comment.post');
