<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $student1 = Student::create([
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'cnic' => '123456789',
            'phone' => '1234567890',
            'gender' => 'Male',
            'date_of_birth' => '1990-01-01',
            'current_address' => '123 Main St, City',
            'permanent_address' => '456 Second St, City',
        ]);

        $student2 = Student::create([
            'id' => 2,
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'cnic' => '987654321',
            'phone' => '9876543210',
            'gender' => 'Female',
            'date_of_birth' => '1992-02-02',
            'current_address' => '789 Third St, City',
            'permanent_address' => '012 Fourth St, City',
        ]);

        $student3 = Student::create([
            'id' => 3,
            'name' => 'Bob Smith',
            'email' => 'bob@example.com',
            'cnic' => '567890123',
            'phone' => '5551234567',
            'gender' => 'Male',
            'date_of_birth' => '1985-05-05',
            'current_address' => '555 Oak St, Town',
            'permanent_address' => '789 Pine St, Town',
        ]);
    }
}
