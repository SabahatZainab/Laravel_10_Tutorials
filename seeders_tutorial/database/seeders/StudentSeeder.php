<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::create([
        //     'name' =>'Yahoo Baba',
        //     'email' =>'yahoobaba@gmail.com'
        // ]);

        // $students = collect(
        //     [
        //         [
        //             'name' =>'Yahoo Baba',
        //             'email' =>'yahoobaba@gmail.com'
        //         ],
        //         [
        //             'name' =>'Yahoo Baba1',
        //             'email' =>'yahoobaba1@gmail.com'
        //         ],
        //         [
        //             'name' =>'Yahoo Baba2',
        //             'email' =>'yahoobaba2@gmail.com'
        //         ],
        //     ]
        // );

        // $json = File::get('database/json/students.json');
        //getting the json file and in second file decode it, writing "path :" word is optional.
        // $json = File::get(path: 'database/json/students.json');
        // $students = json_decode($json);//converting json to array
        // $students = collect(json_decode($json));//use collect function

        // $students->each(function($student){
        //     Student::create([
        //         'name' =>$student->name,
        //         'email' =>$student->email,
        //     ]);//save data in database
        // });
        // $students->each(function($student){
        //     student::insert($student);
        // });

        //use of fake helper function
        // Student::create([
        //     'name' => fake()->name(), //generate fake name
        //     'email' => fake()->unique()->email(), //generate fake email which are also unique
        // ]);

        //for generating multiple fake records
        for($i=1; $i<=10; $i++)
        {
            Student::create([
                'name' => fake()->name(), //generate fake name
                'email' => fake()->unique()->email(), //generate fake email which are also unique
            ]);
        }

    }
}
