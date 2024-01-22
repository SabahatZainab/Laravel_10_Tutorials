<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', [UserController::class,'showUsers'])->name('showUsers');
Route::get('/user/{id}', [UserController::class,'singleUser'])->name('view.user');
