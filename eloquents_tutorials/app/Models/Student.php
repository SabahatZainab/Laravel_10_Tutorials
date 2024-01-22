<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'cnic',
        'phone',
        'gender',
        'date_of_birth',
        'current_address',
        'permanent_address',
    ];
}
