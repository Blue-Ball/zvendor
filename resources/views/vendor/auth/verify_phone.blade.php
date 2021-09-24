<x-vendor.guest-layout>
    @slot('title')
        Login
    @endslot
     
    <style>
        .authentication-header{
            background-image: linear-gradient(to bottom right, rgb(204,26,141), rgb(86,49,145));
        }
     </style>
     <!--wrapper-->
     <div class="wrapper">
         <div class="authentication-header"></div>
         <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
             <div class="container-fluid">
                 <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                     <div class="col mx-auto">
                         <div class="mb-4 text-center">
                             <img src="assets/images/logo-img.png" width="180" alt="" />
                         </div>
                         <div class="card">
                             <div class="card-body">
                                 <div class="p-4 rounded">
                                     <div class="text-center">
                                         <h3 class="">Verification Code</h3> 
                                     </div>
 
                                     <div class="form-body">
                                         <form class="row g-3" method='post' action="{{ route('save-verify-phone')}}">
                                                 @csrf
                                                 <div class="col-12" style="margin:50px 0px">
                                                     <div class="input-group"> 
                                     <input type="text" maxlength="1" name='code[]' aria-label="" class="form-control inputs">
                                     <input type="text" maxlength="1"  name='code[]' aria-label="" class="form-control inputs">
                                     <input type="text" maxlength="1"  name='code[]' aria-label="" class="form-control inputs">
                                     <input type="text" maxlength="1"  name='code[]' aria-label="" class="form-control inputs">
                                     
                                 </div>
                                                     
                                     <p style="margin-top:20px;font-size:12px;text-align:center">Enter the OTP we Sent to <span style="color:rgb(204,26,141)">{{Auth::user()->phone}}</span> in SMS</p>	    	    
                                                 
                                             </div>
                                             
                                             
                                         
                                         
                                         
                                         
                                             
                                             <div class="col-12">
                                                 <div class="d-grid">
                                                  
                                                             <button class="btn btn-primary" type="submit">Verify</button>
                                                     <a   style="text-align:center;margin:15px 0px">Resend Code</a>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--end row-->
             </div>
         </div>
     </div>
     <!--end wrapper-->



</x-vendor.guest-layout>
