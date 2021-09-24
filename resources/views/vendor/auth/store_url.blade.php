<x-vendor.guest-layout>
@slot('title')
Store url
    
@endslot

<style>
    .authentication-header{
        background-image: linear-gradient(to bottom right, rgb(204,26,141), rgb(86,49,145));
    }
    .section-authentication-signin{
        height:auto;
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
                                      <div class="progress mb-4" style="height:7px;">
                                 <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                                     <h3 class="">Store Url</h3>
                                     
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
                                     <form class="row g-3" method="post" action='{{ route('vendor-save-store-url') }}'>
                                        @csrf
                                         <div class="col-12">
                                 <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                 <label class="form-check-label" for="flexCheckDefault1">Choose A Subdomain</label>
                             </div></div>
                                             <div class="col-6">
                                           
                                         
                                             
                                 <input type="text" aria-label="Search" class="form-control" name='url' id="Search" placeholder="Search">
                         
                                         
                                         </div>
                                         
                                             
                                           
                                         
                                             
                             <div class="col-6">
                                             <div class="d-grid">
                                                 
                                                 <button type="button" class="btn btn-primary">Check Availability</button>
                                             
                                             </div>
                                         </div>
                         
                                             <p style="text-align:center;font-size:11px">Congratulations.Vendor zyx.com is available</p>
                                         
                                             <div class="col-12">
                                             <div class="d-grid">
                                                     
                                                 <button type="button" class="btn btn-primary">Launch my ZYX Store</button>
                                             
                                             </div>
                                         </div>
                                          <div class="col-12">
                                 <div class="form-check" style="margin:10px 0px 0px 0px !important">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" >
                                 <label class="form-check-label" for="flexCheckDefault2">Use Own Domain Registered Elsewhere</label>
                             </div></div>
                                         
                                     <div class="col-12">
                                             <label for="NewURL" class="form-label">New URL</label>
                                             <div class="input-group">
                             
                                 <input type="text" aria-label="NewURL" class="form-control" id="NewURL" placeholder="(Enter Subdomain).zyx.com">
                             </div>
                                         </div>
                             
                         <div class="col-12">
                                             <div class="d-grid">
                                                     
                                                 <button type="button" class="btn btn-primary">Use My Domain</button>
                                             
                                             </div>
                                         </div>
                             <p style="text-align:left;font-size:11px;margin:10px 0px 1px 0px">Please Update below nameservers:</p>
                                 <p style="text-align:left;font-size:11px;margin:1px 0px 1px 0px">ns1.zyx.com:</p>
                                 <p style="text-align:left;font-size:11px;margin:1px 0px 1px 0px">ns2.zyx.com:</p>
                                 <p style="text-align:left;font-size:11px;margin:1px 0px 1px 0px">Create a record for www and @ with below IP</p>
                                                                     <p style="text-align:left;font-size:11px;margin:1px 0px 1px 0px">1.1.1.1</p>

                                 
                             
                             
                             
                                         
                                  <div class="col-12">
                                 <div class="form-check" style="margin:10px 0px 0px 0px !important">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                 <label class="form-check-label" for="flexCheckDefault3">Register A domain</label>
                             </div></div>
                             
                                 <div class="col-8">
                                           
                                             <label for="Sdomain" class="form-label">Search Domain</label>
                                             <div class="input-group">
                             
                                 <input type="text" aria-label="Sdomain" class="form-control" id="Sdomain" placeholder="Enter Here">
                             </div>
                                         
                                         </div>
                             
                                         <div class="col-4">
                                           
                                         <label for="Extension" class="form-label">Extension</label>
                                     <select id="Extension" class="form-select">
                                         <option selected>.com</option>
                                         <option>...</option>
                                     </select>
                                         </div>
                                         
                                         
                                         <div class="col-12">
                                             <div class="d-grid">
                                                 <button type="submit"  class="btn btn-primary">Check Availability </button>
                                                  
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