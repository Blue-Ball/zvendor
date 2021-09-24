<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ECommerceController extends Controller
{ 
    public function product()
    {
        return view('vendor.ecommerce.product');
    }
    public function product_detail()
    {
        return view('vendor.ecommerce.product_detail');
    }
    public function add_new_product()
    {
        return view('vendor.ecommerce.add_new_product');
    }
    public function add_new_category()
    {
        return view('vendor.ecommerce.add_new_category');
    }
    public function add_coupen()
    {
        return view('vendor.ecommerce.add_coupen');
    }
   

    public function add_new_bank()
    {
        return view('vendor.ecommerce.add_new_bank');
    } 
     public function order()
    {
        return view('vendor.ecommerce.order');
    }
}
