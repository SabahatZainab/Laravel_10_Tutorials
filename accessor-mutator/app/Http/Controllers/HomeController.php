<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = User::all();
        return $user;
    }

    public function add(){
        $user = new User();
        $user->name = 'userfour';
        $user->city = 'cityfour';
        $user->save();
    }
}
