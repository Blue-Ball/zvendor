<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorProfileController extends Controller
{
    public function edit()
    {
        return view('vendor.profile.edit',['active'=>'fazal']);
    }

   
}
