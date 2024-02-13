<?php

namespace App\Models;

use App\Models\Environment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // public function environments()
    // {
    //     return $this->hasMany(Environment::class);
    // }

    public function deploy()
    {
        return $this->hasManyThrough(Deployment::class, Environment::class);
    }
}
