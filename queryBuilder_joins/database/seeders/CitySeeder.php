<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/cities.json');
        $cities = collect(json_decode($json));

        $cities->each(function($cities){
            City::create([
                'city_name'=> $cities->city_name,
            ]);
        });
    }
}
