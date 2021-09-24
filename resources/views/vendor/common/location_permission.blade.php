<x-vendor.guest-layout>
    @slot('title')
        Location Permission
    @endslot

 
        <style>
            .bg-lock-screen{
                 background-image: linear-gradient(to bottom right, rgb(204,26,141), rgb(86,49,145));
            }
            
            
        </style>
        <!-- wrapper -->
        <div class="wrapper">
            <div class=""></div>
            <div class="authentication-forgot d-flex align-items-center justify-content-center">
                <div class="card forgot-box">
                    <div class="card-body">
                        <div class="p-4 rounded">
                            <div class="text-center">
                                <i class="lni lni-map-marker" style="color:rgb(204,26,141);font-size:80px"></i>
                            </div>
                            <h4 class="mt-5" style="font-weight-bold;visibility:hidden">Location</h4>
                            <p class="text-muted" style="font-size:12px;text-align:center">ZYX needs permission to access location data once from user.<br/>User must allow to continue</p>
                            <div class="my-4">
                            <!--	<label class="form-label">Email id</label>-->
                            <!--	<input type="text" class="form-control form-control-lg" placeholder="example@user.com" />
                            </div>-->
                            <div class="d-grid gap-2">
                                <a href="{{route('register')}}" class="btn btn-primary btn-lg">
                                Allow </a>
                                {{-- <a href="{{route('login')}}" class="btn btn-white btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a> --}}
             				    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end wrapper -->

</x-vendor.guest-layout>