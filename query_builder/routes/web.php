<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::controller(UserController::class)->group(function(){
    Route::get('/','showUsers')->name('user');
    Route::get('/user/{id}','singleUser')->name('view.user');
    Route::post('/add','addUser')->name('addUser');
    Route::put('/update/{id}','updateUser')->name('update.user');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');
    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
    Route::get('/deleteAllUser','deleteAllUser');
});

Route::view('newuser','/addUsers');
