<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;

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
});

Route::get('add-customer',[CustomerController::class, 'add_customer']);
Route::get('show-mobile/{id}',[CustomerController::class, 'show_mobile']);
Route::get('show_customer/{id}',[MobileController::class, 'show_customer']);

Route::get('index/{id}',[IndexController::class,'index']);