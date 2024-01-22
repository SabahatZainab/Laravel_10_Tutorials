<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/users.json');
        $users = collect(json_decode($json));

        $users->each(function($user){
            User::create([
                'name'=> $user->name,
                'email'=> $user->email,
                'age'=> $user->age,
                'city'=> $user->city,
            ]);
        });

    }
}
