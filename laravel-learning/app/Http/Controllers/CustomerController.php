<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        // $mobile->model = 'samsung s21fe';

        $customer = new Customer();
        // $customer->name = 'pranav';

        $customer->save();

        $customer->mobile()->Save($mobile);

    }
    
    // showing mobile data using customer id
    
    public function show_mobile($id){
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }
}
