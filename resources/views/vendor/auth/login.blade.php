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
                                         <h3 class="">Login</h3>

                                       
                                     
                                         <p>Don't have an account yet? <a href="{{route('register')}}">Sign up here</a>
                                         </p>
                                     </div>
                                 <!--	<div class="d-grid">
                                         <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                           <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                           <span>Sign in with Google</span>
                                             </span>
                                         </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                     </div>
                                     <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                         <hr/>
                                     </div>-->
                                     <div class="form-body">
                                         <form class="row g-3" method="post" action="{{route('login')}}">
											 @csrf
                                             <div class="col-12">
                                                 <label for="PhoneNumber" class="form-label">Phone Number</label>
                                                 <div class="input-group">
													 <div class="input-group-prepend">
														 <span class="input-group-text" id="basic-addon1" style="background:rgb(86,49,145);color:white">+91</span>
													 </div>
													 <input type="text" aria-label="Phone Number" class="form-control" id="phone" name="phone" placeholder="Phone Number" maxlength="10">
												</div>
												@error('phone')
													<p style='color:red'>{{$message}}</p> 
												@enderror
                                             
                                             </div>
                                             <div class="col-12">
                                                 <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                 <div class="input-group" id="show_hide_password">
                                                     <input type="password" class="form-control border-end-0" id="password" name="password" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                 </div>
												 @error('password')
													<p style='color:red'>{{$message}}</p> 
												 @enderror
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-check form-switch">
                                                     <input class="form-check-input" type="checkbox" id="remember" name="remember" checked>
                                                     <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                 </div>
                                             </div>

                                             <div class="col-md-6 text-end">
                                                @if (Route::has('password.request'))
												<a  href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
												@endif
                                            
                                            
                                             </div>
                                             <div class="col-12">
                                                 <div class="d-grid">
                                                     <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Login</button>
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
   @push('js')
       
	<script src="{{ asset('assets/js/password.min.js')}}"></script>
   @endpush
</x-vendor.guest-layout>
