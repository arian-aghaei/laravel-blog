<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [App\Http\Controllers\HomeController::class, 'posts'])->name('posts');

Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');
Route::post('/new', [App\Http\Controllers\HomeController::class, 'store']);

Route::post('/posts', [App\Http\Controllers\HomeController::class, 'delete']);

Route::get('/posts/{post}', [App\Http\Controllers\HomeController::class, 'view1'])->name('post.show');

Route::get('/posts/edit/{post}', [App\Http\Controllers\HomeController::class, 'edit'])->name('post.edit');
Route::post('/posts/edit/{post}', [App\Http\Controllers\HomeController::class, 'saveEdit'])->name('post.edit');

Route::get('/{post:title}', [App\Http\Controllers\HomeController::class, 'viewPost'])->name('post.home');
