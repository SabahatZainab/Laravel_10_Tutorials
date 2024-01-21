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

function getUsers(){
    return [
        1 =>['Name'=>'Sabahat Zainab','Designation'=>'Developer'],
        2 =>['Name'=>'Suha Konain','Designation'=>'Student'],
        3 =>['Name'=>'Muhammad Waryal','Designation'=>'University Student']
    ];
}
Route::get('/', function () {
    return view('welcome',['user'=>"Sabahat Zainab"]);
});

//Send Data as array
//Set Default Value if data is empty
// Route::get('/users',function(){
//     $username = "Sabahat Zainab";
//     return view('users',[
//             'user'=>$username, 
//             'workAs'=>'',
//             'alert' => '<script>alert("Hey Saba!");</script>'
//         ]);
// });

//If our data parameter is Multi dimentional array (Send Route File to View)
Route::get('/users',function(){
    $username = getUsers();
    return view('users',[
        'user'=>$username, 
        'workAs'=>'',
        'alert' => '<script>alert("Hey Saba!");</script>'
    ]);

});
    
//Use of With + two parameters key+value
// Route::get('/users',function(){        
//     $username = "Sabahat Zainab";
//     return view('users')
//     ->with('user',$username)
//     ->with('workAs','Developer')
//     ->with('alert','<script>alert("Hey Saba!");</script>');
// });

//Use of With+Key method
// Route::get('/users',function(){        
//     $username = "Sabahat Zainab";
//     return view('users')
//     ->withUser($username)
//     ->withWorkAs('Developer')
//     ->withAlert('<script>alert("Hey Saba!");</script>');
// });

Route::get('/user/{id}',function($id){
    $users = getUsers();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];
    // return "<h1>User : ". $id ."</h1>";
    return view('userDetails',['id'=> $user]);
})->name('view.user');