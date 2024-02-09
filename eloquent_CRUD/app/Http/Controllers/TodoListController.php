<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $todolist = Todolist::all();
        return view('welcome',compact('todolist'));
    }
    public function store(Request $request)
    {
        $todolist = Todolist::create([
            'title'=> $request->title,
            'description' => $request->description
        ]);
        if($todolist){

            return redirect(route('home'));
        }else{
            echo "<h1>Todolist Created!</h1>";
        }
    }
    public function update(Request $request)
    {
        $todolist = Todolist::find($request->id);
        $todolist->title = $request->update_title;
        $todolist->description = $request->update_description;
        $todolist->save();

        if($todolist){

            return redirect(route('home'));
        }else{
            echo "<h1>List not be updated!</h1>";
        }
    }
    public function delete($id)
    {
        $todolist = Todolist::find($id);
        $todolist->delete();

        if($todolist)
        {
            return redirect(route('home'));
        }else{
            echo "<h1>List not be deleted!</h1>";
        }
    }
}
