<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController; 
use Illuminate\Support\Facades\Route;

    Route::group(['prefix'=>'vendor'],function () {

Route::get('/register', [RegisteredUserController::class, 'create'])
->middleware('guest')
->name('register');
//1
Route::get('/location-permission', [RegisteredUserController::class, 'location_permission'])
->middleware('guest')
->name('location-permission');
//3 login vendor
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');   
        //page 3.1 login
        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');


//page 4 sign up
Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');


Route:: group(['middleware','auth'],function () {
//page 5 verify phone
Route::get('/verify-phone', [RegisteredUserController::class,'verify_phone_index'])
->middleware('auth')
->name('verify-phone');

Route::post('/save-verify-phone', [RegisteredUserController::class,'save_verify_phone'])
->name('save-verify-phone');

//7. 1 save store info
Route::get('store-info', [RegisteredUserController::class, 'store_info_index'])
->name('vendor-store-info');
        //page 7.1 store info
        Route::post('/store-info', [RegisteredUserController::class, 'save_store_info'])
                ->name('vendor-save-store-info');
        
//page 8 store location
Route::get('/store-location',[RegisteredUserController::class,'store_location']);
        //page 8.1 store location
        Route::post('store-location',[RegisteredUserController::class,'save_store_location'])
        ->name('vendor-save-store-location');

//page 9 store url

Route::get('/store-url',[RegisteredUserController::class,'store_url']);
 
      //page 9.1 save store url
        Route::post('/save-store-url',[RegisteredUserController::class,'save_store_url'])
        ->name('vendor-save-store-url');

        });

               

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
            });