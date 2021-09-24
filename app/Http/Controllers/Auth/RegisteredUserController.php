<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; 
use App\Providers\RouteServiceProvider; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor.auth.register');
    }

    public function save_verify_phone(Request $request)
    {
        //  dd(Auth::user()); 
        $user=Auth::user();
        $user->otp_verified=1;
        $user->save();
      
        return redirect(RouteServiceProvider::HOME);
    }
    public function verify_phone_index()
    {
        return view('vendor.auth.verify_phone');
    }
   
    public function store_info_index()
    {
        return view('vendor.auth.store_info');
    }
    public function save_store_info(Request $request )
    { 
            $user=Auth::user();
          
                $user->store_name=$request->store_name;
 
            $user->save();  
            return redirect(RouteServiceProvider::HOME);
    }

    public function save_store_url(Request $request )
    {  
            $user=Auth::user();
          
                $user->url=$request->url;
 
            $user->save();  
            return redirect(RouteServiceProvider::HOME);
    }

    //page 8 store location index
    public function store_location()
    {
        return view('vendor.auth.store_location');
    }    
    //page 8 store location save data
    public function save_store_location(Request $request)
    {

        return view('vendor.auth.store_location');
    }

    //page 9 store url index
    public function store_url()
    {
         return view('vendor.auth.store_url');
    }


    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
     
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string',  'max:255', 'unique:uservendors'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); 
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]); 

        // event(new Registered($user));
//  dd($request);
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
