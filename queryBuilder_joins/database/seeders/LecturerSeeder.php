<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/lecturers.json');
        $lecturers = collect(json_decode($json));

        $lecturers->each(function($lecturers){
            Lecturer::create([
                'name'=> $lecturers->name,
                'email'=> $lecturers->email,
                'age'=> $lecturers->age,
                'city'=> $lecturers->city,
            ]);
        });
    }
}
