<?php

use App\Http\Controllers\vendor\ECommerceController;
use App\Http\Controllers\vendor\PaymentsController;
use App\Http\Controllers\vendor\VendorController;
use App\Http\Controllers\vendor\VendorProfileController;
use Illuminate\Support\Facades\Route; 

Route::group(['prefix'=>'vendor'],function () {

	Route::get('location-permission',[VendorController::class,'location_permission']);
  

 
    Route::get('home',[VendorController::class,'index'])->name('vendor.home')
       ->middleware('VendorAuth'); 
 
    Route::prefix('profile')->group(function(){

     Route::get('edit',[VendorProfileController::class,'edit'])->name('vendor.edit_profile');
        
    });

    Route::prefix('inventory')->group(function () {
         
        Route::get('/products',[ECommerceController::class,'product'])->name('vendor.products');
        Route::get('/product-detail',[ECommerceController::class,'product_detail'])->name('vendor.product');
        Route::get('/add-new-product',[ECommerceController::class,'add_new_product'])->name('vendor.add_product');
        Route::get('/add-new-category',[ECommerceController::class,'add_new_category'])->name('vendor.add_category');
        Route::get('/add-coupen',[ECommerceController::class,'add_coupen'])->name('vendor.add_coupon');
        Route::get('/order',[ECommerceController::class,'order'])->name('vendor.orders');
    });


    Route::prefix('payments')->group(function () {
        Route::get('/add-new-bank',[PaymentsController::class,'add_new_bank'])->name('vendor.add_bank');
    });
});

