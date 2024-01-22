<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        //return all data
        // $students = Student::all();


        // $students = [];
        // $students = Student::where('email','bob@example.com')->orderBy('name')->get();
        // $students = Student::where('gender','Male')->orderBy('name')->get();

        //Chunking Result
        // Student::chunk(2,function($students){
        //     echo 'Chunk of Data <br>';
        //     foreach($students as $std){
        //         echo $std->name;
        //         echo '<br>';
        //     }
        // });

        //Retrieving Single Models/Aggregates
        $students = Student::find(2); //retreving first record by using its primary key

        // $students = Student::where('gender','Male')->first(); //retrieve first record which have gender male

        //another way to write above query
        // $students = Student::firstWhere('gender','Male'); //retrieve first record which have gender male

        // $students = Student::where('date_of_birth','=','1992-02-02')->firstOr(function(){
        //     echo 'First not found so function executed';
        // });

        //Retrieving or Creating Models
        //Retreive record or create it if it not exits
        // $students = Student::firstOrCreate(
        //     ['name'=>'JDoe'],
        //     ['email' => 'bob1@example.com',
        //     'cnic' => '567890123',
        //     'phone' => '5551234567',
        //     'gender' => 'Male',
        //     'date_of_birth' => '1985-05-05',
        //     'current_address' => '555 Oak St, Town',
        //     'permanent_address' => '789 Pine St, Town',]
        // );

        //Retrieve record or instantiate a new Student instance
        // $students = Student::firstOrNew(
        //     ['name'=>'hp'],
        //     ['email' => 'hp@example.com',
        //     'cnic' => '567890123',
        //     'phone' => '5551234567',
        //     'gender' => 'Male',
        //     'date_of_birth' => '1985-05-05',
        //     'current_address' => '555 Oak St, Town',
        //     'permanent_address' => '789 Pine St, Town',]
        // ); //only create instance can't created this record
        // // $students->save(); //manually save it

        //Aggregates
        //count , max, min, sum
        // $students = Student::where('gender','Female')->count();

        //Insert New Record

        dd($students);
        return view('welcome',compact(('students')));
    }
}
