<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Mechanic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function cars()
    {
        return $this->hasOne(Car::class);
    }

    public function carOwner()
    {
        // return $this->hasOneThrough(Owner::class, Car::class); //agr relation nhi bana hua models ma to hum ya use kare ge nhi to nechee wale use kar sakte hai agr already relationship define hai sab models ma to
        // return $this->through('cars')->has('owner');
        return $this->throughCars()->hasOwner();
    }


}
