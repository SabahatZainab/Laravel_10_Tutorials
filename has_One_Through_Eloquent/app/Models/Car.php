<?php

namespace App\Models;

use App\Models\Owner;
use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'model','mechanic_id'
    ];

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }
}
