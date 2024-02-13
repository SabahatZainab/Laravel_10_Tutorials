<?php

namespace App\Models;

use App\Models\Deployment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Environment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'project_id'];

    // public function deployments()
    // {
    //     return $this->hasMany(Deployment::class);
    // }
}
