<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::controller(TodoListController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::post('/store','store')->name('store');
    Route::post('/update','update')->name('update');
    Route::get('/delete/{id}','delete')->name('delete');
});

