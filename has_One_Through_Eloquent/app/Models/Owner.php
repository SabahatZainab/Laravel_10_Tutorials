<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'car_id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
