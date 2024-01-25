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
        $users = DB::table('users')->paginate(4); //get all records with Pagination
        return view('allUsers',['data'=> $users]);
    }
    public function singleUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('user',['data'=> $user]);
    }
    public function addUser(Request $request){
            $user = DB::table('users')
                            ->insert(
                            [
                              'name'=> $request->username,
                              'email'=> $request->useremail,
                              'age'=> $request->userage,
                              'city'=> $request->usercity,
                            ]);

            // return $user;
            if($user)
            {
                return redirect()->route('user');
            }else{
                echo "<h1>Data not Added.</h1>";
            }
    }
    public function updatePage($id)
    {
        // $user = DB::table('users')
        //                     ->where('id',$id)
        //                     ->get();
        $user = DB::table('users')->find($id);
        return view('updateUsers',compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name'=>$request->username,
                    'email'=>$request->useremail,
                    'age'=>$request->userage,
                    'city'=>$request->usercity
                ]);
        // $user = DB::table('users')
        //                 ->updateOrInsert(
        //                     [
        //                         'name'=>$request->username,
        //                         'email'=>$request->useremail,
        //                         'age'=>$request->userage,
        //                         'city'=>$request->usercity
        //                     ],
        //                     [
        //                         'id'=>$request->id
        //                     ]
        //                 );
        if($user)
        {
            return redirect()->route('user');
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
