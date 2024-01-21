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

Route::get('/', function () {
    return view('welcome');
    // return view('welcome');
})->name('home');

Route::get('/post', function () {
    return view('post');
    // return view('post');
})->name('post');

Route::get('/about', function () {
    return view('about');
    // return view('about');
})->name('about');

// How to use Javascript in blade template
Route::get('/test',function(){
    return view('test');
});