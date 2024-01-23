<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showUsers()
    {
        $users = DB::table('users')->get(); //get all records

        return view('allUsers',['data'=> $users]);
    }
    public function singleUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('user',['data'=> $user]);
    }
    public function addUser(){

            $user = DB::table('users')
                            ->insertOrIgnore(
                            [
                              'name'=>'Ram Kumar',
                              'email'=>'ram1@gmail.com',
                              'age'=> 30,
                              'city'=>'delhi',
                            ]);

            // return $user;
            if($user)
            {
                echo "<h1>Data Successfully Added.</h1>";
            }else{
                echo "<h1>Data not Added.</h1>";
            }
    }
    public function updateUser()
    {
        $user = DB::table('users')
                        ->updateOrInsert(
                            [
                                'email'=>'xyz@gmail.com',
                                'name'=>'xyz',
                                'city'=>'goa'
                            ],
                            [
                                'age'=>98
                            ]
                        );
        if($user)
        {
            echo "<h1>Data Successfully Updated.</h1>";
        }else{
            echo "<h1>Data not Updated.</h1>";
        }
    }
    public function deleteUser($id)
    {
        $user = DB::table('users')
                            ->where('id',$id)
                            ->delete();
        if($user)
        {
            return redirect()->route('user');
        }else{
            echo "<h1>Data not Deleted.</h1>";
        }
    }
    public function deleteAllUser()
    {
        // $user = DB::table('users')
        //                     ->delete(); //delete whole records

        $user = DB::table('users')
                            ->truncate(); //delete whole records, but reset (start from '1') id incremental column
    }
}
