<?php

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

Route::view('/', 'welcome')->name('welcome');
Route::view('/blog', 'blog')->name('blog');
Route::view('/blog/{post:slug}', 'blog/show')->name('post');
Route::view('/contact', 'contact')->name('contact');
Route::view('/shop', 'shop/index')->name('shop');
Route::view('/shop/{product:slug}', 'shop/show')->name('product');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
