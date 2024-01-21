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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post', function () {
//     // return view('post');
//     // return "Post Page";
//     return "<h1>Post Page</h1>"; 
// });
// Route::view('/','welcome');
// Route::view('/post','post');
// Route::view('/welcome','welcome');

// //sub route implementation
// Route::get('/post/firstPost/',function(){
//     return view('firstPost');
// });

//Router Parameter New Tutorial
// Route::get('/post/{id}',function(string $id){
//     return "<h1>The Value of Post Id is : ".$id."</h1>";
// });
//Now Sending Parameter as a Optional
// Route::get('/post/{id?}', function(string $id = null){
//     return "<h1>The Value is : ".$id."</h1>";
// });
// Route::get('/post/{id?}', function(string $id = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// });

//Sending Multiple Values as a Parameter
// Route::get('/post/{id?}/comment/{commentid?}', function(string $id = null, string $commentid = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1><h2> And The Comment Is: ".$commentid."</h2>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// });

//Route Constraints
//Alpha
// Route::get('/post/{id?}', function(string $id = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// })->whereAlpha('id');
//Alpha Numeric
// Route::get('/post/{id?}', function(string $id = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// })->whereAlphaNumeric('id');
// Number
// Route::get('/post/{id?}', function(string $id = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// })->whereNumber('id');

//Category parameter values should be from the array which is defined
// Route::get('/post/{id?}', function(string $id = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// })->whereIn('id',['song','movie','painting']); //predefined value

//Category Uses Regular Expression
// Route::get('/post/{id?}', function(string $id = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// // })->where('id','[0-9]+'); //Regular Expression Allow Numberic Value 
// })->where('id','[a-zA-Z]+'); //Regular Expression Allow Alphabetic Value 

//How to Apply Multiple Constraints in Multiple Parameters
// Route::get('/post/{id?}/comment/{commentid?}', function(string $id = null, string $commentid = null){
//     if($id)
//     {
//         return "<h1>The Value is : ".$id."</h1><h2> And The Comment Is: ".$commentid."</h2>";
//     }else
//     {
//         return "<h1>No Id Found</h1>";
//     }
// })->whereNumber('id')->whereAlpha('commentid');


// Route Name
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('page')->group(function(){
    Route::get('/post', function () {
        return view('post');
    })->name('post');
    
    Route::get('/posts', function () {
        return view('firstPost');
    })->name('firstPost');
});


// Route::redirect('/firstPost','/posts');
//solution of 404 page not found
Route::fallback(function(){
    return "<h1>Page Not Found!</h1>";
});