<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoList extends Controller
{
    public function index()
    {
        $todolist = DB::table('todolist')->get();
        return view('welcome',['todolist'=> $todolist]);
    }
    public function store(Request $request)
    {
        $todolist = DB::table('todolist')->insertOrIgnore([
                [
                    'title'=> $request->title,
                    'description' => $request->description
                ]
            ]);
        if($todolist)
        {
            return redirect()->route('home');
        }
    }
    public function update(Request $request)
    {
        $todolist = DB::table('todolist')
                    ->where('id',$request->id)
                    ->update([
                        'title' => $request->update_title,
                        'description' => $request->update_description
                    ]);
        if($todolist)
        {
            return redirect()->route('home');
        }else{
            echo "<h1>List not Updated.</h1>";
        }
    }
    public function delete($id)
    {
        $todolist = DB::table('todolist')
                        ->where('id',$id)
                        ->delete();
        if($todolist)
        {
            return redirect()->route('home');
        }else{
            echo "<h1>List Not be Deleted!</h1>";
        }
    }
}
