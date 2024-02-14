<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'city'
    ];
    //Accessor
    public function getNameAttribute($value){
        return ucFirst($value);
        // return 'Mr. '. $value;
    }

    //Mutator
    public function setCityAttribute($value){
        $this->attributes['city'] = $value.' Pak'; //this code run when data insert
    }
}
