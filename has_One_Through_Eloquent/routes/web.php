<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController;

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

Route::get('add-data',[MechanicController::class,'add_data']);
Route::get('show-data',[MechanicController::class,'show_data']);
