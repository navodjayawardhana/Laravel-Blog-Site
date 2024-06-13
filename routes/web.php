<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [WellcomeController::class,'index' ])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//post

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/all', [HomeController::class, 'allposts'])->name('posts.all');