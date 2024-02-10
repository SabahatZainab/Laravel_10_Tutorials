<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = 'LG102';

        $customer = new Customer();
        $customer->name = 'sumit';
        $customer->email = 'sumit@gmail.com';

        $customer->save();
        $customer->mobile()->save($mobile);
        
    }
    public function show_mobile($id){
        $mobile = Customer::find($id)->mobile;//find mobile data on the basis of customer Id
        return view('welcome',compact('mobile'));
    }
}
