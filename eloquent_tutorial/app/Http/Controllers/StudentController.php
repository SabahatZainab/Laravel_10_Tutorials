<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('home',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creating record
        // $student = new Student;
        // $student->name = $request->name;
        // $student->city = $request->city;
        // $student->marks = $request->marks;
        // $student->save();

        
        //Insert New Record Using Create Method (for using this method we need to defined fillable)
        $student = Student::create([
                'name'=> $request->name,
                'city'=>$request->city,
                'marks'=>$request->marks,
            ]);
            
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit',compact('student'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Update
        $student = Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();

        //Mass Update
        // Student::where('city','jamshoro')->update([
        //     'marks'=>100
        // ]);

        //Update or Create
        // Student::updateOrCreate(
        //     ['marks'=>100],
        //     ['city'=>'hala'],
        // );
        // Student::updateOrCreate(
        //     ['name'=>"test"],
        //     ['city'=>'hala','marks'=>'87'],
        // );


        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //In destroy method you don't need to find instance
        Student::destroy($id);

        // Delete Record Using Delete Method
        // $student = Student::find($id);
        // $student->delete();

        //Delete Record Using Quires
        // $student = Student::where('city','jamshoro')->delete();

        //truncate method - delete model associate tables
        // Student::truncate();

        return redirect(route('index'));
    }
}
