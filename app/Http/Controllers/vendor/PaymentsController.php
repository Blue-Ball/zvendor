<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{ 
    public function add_new_bank()
    {
        return view('vendor.ecommerce.add_new_bank');
    }
}
