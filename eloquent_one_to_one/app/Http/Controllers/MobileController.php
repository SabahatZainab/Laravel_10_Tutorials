<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function show_customer($id){
        $customer = Mobile::find($id)->customer; //find customer which belongs to $id mobile
        return view('welcome',compact('customer'));
    }
}
