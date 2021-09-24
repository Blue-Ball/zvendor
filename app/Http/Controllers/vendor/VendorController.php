<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller; 

class VendorController extends Controller
{
   public function index()
   {
       $data['active']='dashboard';
       
       return view('vendor.home',$data);
       # code...
   }


   public function location_permission()
   {
      
       return view('vendor.common.location_permission');
   }
}
