<?php

use App\Http\Controllers\TodoList;
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

Route::controller(TodoList::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::post('/store','store')->name('store');
    Route::post('/update','update')->name('update');
    Route::get('/view/{id}','view')->name('view');
    Route::get('/delete/{id}','delete')->name('delete');
});
