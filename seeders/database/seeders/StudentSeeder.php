<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                    'name' => 'Yahoo Baba',
                    'email' => 'yahoobaba@gmail.com'
            ],
            [
                    'name' => 'Yahoo Baba1',
                    'email' => 'yahoobaba1@gmail.com'
            ],
            [
                    'name' => 'Yahoo Baba2',
                    'email' => 'yahoobaba2@gmail.com'
            ],
        ]);
        $students->each(function($students){
            Student::insert($students);
        });
        // Student::create([
        //     'name' => 'Yahoo Baba',
        //     'email' => 'yahoobaba@gmail.com'
        // ]);
    }
}
