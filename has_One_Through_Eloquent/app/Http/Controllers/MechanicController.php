<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function add_data()
    {
        // $mechanic = new Mechanic();
        // $mechanic->name= 'mechanic 3';
        // $mechanic->save();

        // $car1 = Car::create([
        //     'model'=>'car model 1',
        //     'mechanic_id'=>1
        // ]);
        // $car2 = Car::create([
        //     'model'=>'car model 2',
        //     'mechanic_id'=>2
        // ]);
        // $car3 = Car::create([
        //     'model'=>'car model 3',
        //     'mechanic_id'=>3
        // ]);

        // $owner1 = Owner::create([
        //     'name'=>'name1',
        //     'car_id'=> 1
        // ]);
        // $owner2 = Owner::create([
        //     'name'=>'name2',
        //     'car_id'=> 2
        // ]);
        // $owner3 = Owner::create([
        //     'name'=>'name3',
        //     'car_id'=> 3
        // ]);

    }
    public function show_data()
    {
        $mechanic = Mechanic::find(3)->carOwner;
        return $mechanic;
    }
}
