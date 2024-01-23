<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', [UserController::class,'showUsers'])->name('user');
Route::get('/user/{id}', [UserController::class,'singleUser'])->name('view.user');
Route::get('/add', [UserController::class,'addUser'])->name('add.user');
Route::get('/update', [UserController::class,'updateUser'])->name('update.user');
Route::get('/delete/{id}', [UserController::class,'deleteUser'])->name('delete.user');
Route::get('/deleteAllUser', [UserController::class,'deleteAllUser']);
