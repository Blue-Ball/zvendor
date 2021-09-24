<x-vendor.guest-layout>
    @slot('title')
        Location Permission
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
                         <img src="{{ asset('assets/images/logo-img.png') }}" width="180" alt="" />
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <div class="m-20 p-10 rounded">
                                 <div class="text-center">
                                      <div class="progress mb-4" style="height:7px;">
                                 <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                                     <h3 class="">Store Info</h3>
                                     
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
                                     <form class="row g-3" action="{{route('vendor-save-store-info')}}" method="post">
                                         @csrf
                                         <div class="col-12">
                                           
                                             <label for="StoreName" class="form-label">Store Name</label>
                                             <div class="input-group">
                             
                                 <input type="text"  name='store_name'  aria-label="Store Name" class="form-control" id="StoreName" placeholder="Store Name">
                             </div>
                                         
                                         </div>
                                     <div class="col-12">
                                             <label for="GSTNumber" class="form-label">GST Number</label>
                                             <div class="input-group">
                             
                                 <input type="text" aria-label="GST Number" class="form-control" id="GSTNumber" placeholder="22xxxxxxxxxxxz5">
                             </div>
                                         </div>
                                         
                                         <div class="col-6">
                                             
                                         <div class="card" style="margin-bottom:0px !important">
                         <div class="card-body">
                                 
                                         <input id="fancy-file-upload1" type="file" name='web_logo'   accept=".jpg, .png, image/jpeg, image/png" multiple>
                                         </div>
                                         </div><label for="fancy-file-upload1" class="form-label" style="font-size:10px">Web Logo (390*140px)</label>
                                         </div>
                                         <div class="col-6" > 
                                             <div class="card" style="margin-bottom:0px !important">
                         <div class="card-body">
                                     <input id="fancy-file-upload2" type="file" name='app_logo' accept=".jpg, .png, image/jpeg, image/png" multiple>
                                         </div>
                                         </div><label for="fancy-file-upload2" class="form-label" style="font-size:10px">App Logo (512*512px)</label>
                                         </div>
                                         
                                         
                                             <div class="col-6" > 
                                             <div class="card" style="margin-bottom:0px !important">
                         <div class="card-body">
                                     <input id="fancy-file-upload3" type="file" name='featured_image' accept=".jpg, .png, image/jpeg, image/png" >
                                         </div>
                                         </div><label for="fancy-file-upload3" class="form-label" style="font-size:10px">Featured Image (1300*700px)</label>
                                         </div>
                                     
                                         <div class="col-md-12">
                                             <div class="form-check form-switch">
                                                 <input class="form-check-input" name="featured_image" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                 <label class="form-check-label" for="flexSwitchCheckChecked">Listing On ZYX App</label>
                                             </div>
                                         </div>
                                     <style>	.ff_fileupload_wrap .ff_fileupload_dropzone{ 
                                         height:60px;
                                         background-size:50px;
                                     }
                                     
                                     </style>
                                         
                                         
                                         
                                         
                                         
                                         
                                     
                                         <div class="col-12">
                                             <div class="d-grid">
                                                 <button type="submit" class="btn btn-primary">Next</button>
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



 @push('js')
    
 <script>
     $('#fancy-file-upload1').FancyFileUpload({
         params: {
             action: 'fileuploader'
         },
         maxfilesize: 1000000
     });
         $('#fancy-file-upload2').FancyFileUpload({
         params: {
             action: 'fileuploader'
         },
         maxfilesize: 1000000
     });
         $('#fancy-file-upload3').FancyFileUpload({
         params: {
             action: 'fileuploader'
         },
         maxfilesize: 1000000
     });
 </script>
 <script>
     $(document).ready(function () {
         $('#image-uploadify1').imageuploadify();
     })
     
         $(document).ready(function () {
         $('#image-uploadify2').imageuploadify();
     })
     
         $(document).ready(function () {
         $('#image-uploadify3').imageuploadify();
     })
 </script> 
 
 <script> 
     $(document).ready(function () {
         $("#show_hide_password a").on('click', function (event) {
             event.preventDefault();
             if ($('#show_hide_password input').attr("type") == "text") {
                 $('#show_hide_password input').attr('type', 'password');
                 $('#show_hide_password i').addClass("bx-hide");
                 $('#show_hide_password i').removeClass("bx-show");
             } else if ($('#show_hide_password input').attr("type") == "password") {
                 $('#show_hide_password input').attr('type', 'text');
                 $('#show_hide_password i').removeClass("bx-hide");
                 $('#show_hide_password i').addClass("bx-show");
             }
         });
     });
 </script>
@endpush


</x-vendor.guest-layout>