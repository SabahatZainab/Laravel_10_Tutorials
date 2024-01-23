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
        // $users = DB::table('users')->get(); //get all records
        // $users = DB::table('users')->select('name','city')->get(); //get selected columns
        // $users = DB::table('users')->select('name','email as user_email')->get(); // using alias
        // $users = DB::table('users')->select('city')->distinct()->get(); //use distinct method for getting non-duplicate records
        // $users = DB::table('users')->pluck('name','id'); //use of pluck method
        // $users = DB::table('users')->where('city','goa')
        //                            ->where('age','<>',20)
        //                            ->get();
        // $users = DB::table('users')->where('name','like','S%')->get();
        // $users = DB::table('users')->where([
        //     ['city','=','goa'],
        //     ['age','>',20]
        // ])->get();

        // $users = DB::table('users')
        //             ->where('city','=','mumbai')
        //             ->orWhere('age','<',18)
        //             ->get();

        // $users = DB::table('users')
        // ->whereBetween('age',[18,20]) //get whose record which have age between 18 to 20, whereBetween clause only work on numeric record
        // ->get();

        // $users = DB::table('users')
        // ->whereNotBetween('age',[18,20]) //get whose record which have age not in between 18 to 20, whereBetween clause only work on numeric record
        // ->get();

        // $users = DB::table('users')
        //             ->whereIn('id', [1, 2, 3])
        //             ->get();

        // $users = DB::table('users')
        //             ->whereNull('email')
        //             ->get();
        // $users = DB::table('users')
        //             ->whereNotNull('email')
        //             ->get();

        // $users = DB::table('users')
        //         ->whereDate('created_at', '2024-02-21')
        //         ->get();

        // $users = DB::table('users')
        //         ->whereMonth('created_at', '1')
        //         ->get();

        // $users = DB::table('users')
        //                 // ->orderBy('name')
        //                 ->orderBy('age','asc')
        //                 ->get();
        //for retreiving first record
        // $users = DB::table('users')->first();

        //show lastest record which inserted or changed
        // $users = DB::table('users')->latest()->first();
        //show last entry which inserted
        // $users = DB::table('users')->oldest()->first();

        //generate random record (first -> 1)
        // $users = DB::table('users')->inRandomOrder()->first();

        //fetch record according to limit
        // $users = DB::table('users')->limit(3)->get();

        //for fetching record after limit
        // $users = DB::table('users')->limit(3)->offset(3)->get();

        //laravel rename limit to "take" and offset to "skip"
        // $users = DB::table('users')->take(3)->skip(6)->get();

        //count the number of records 'these methods works on numeric value'
        $users = DB::table('users')->count();

        //maximum value record
        $users = DB::table('users')->max('age');
        $users = DB::table('users')->min('age');
        $users = DB::table('users')->avg('age');
        $users = DB::table('users')->sum('age');




        return $users;
        // return view('allUsers',['data'=> $users]);
    }
    public function singleUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('user',['data'=> $user]);
    }
}
