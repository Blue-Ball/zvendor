<x-vendor.layout>
   @slot('title')
       Dashboard
   @endslot

 
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class='col-12'>
				<div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                     <div class="card-body">
                         <div class="d-flex align-items-center">
							<h5 class="mb-0" style="color:white;font-weight:normal">Welcome to Newland Store</h5>
						</div>
					 </div>
				</div>
			</div>
            
            <div class="row row-cols-1 row-cols-lg-4">
                <div class="col">
                    <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Sales Value</p>
                                    <h5 class="mb-0 text-white">INR 867</h5>
                                </div>
                                <div class="ms-auto text-white">
                                </div>
                            </div>
                            <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden bg-gradient-burning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Total Sales</p>
                                    <h5 class="mb-0 text-white">INR 52,945</h5>
                                </div>
                                <div class="ms-auto text-white">
                                </div>
                            </div>
                            <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Total Orders</p>
                                    <h5 class="mb-0 text-white">24.5k</h5>
                                </div>
                                <div class="ms-auto text-white">
                                </div>
                            </div>
                            <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Pending Orders</p>
                                    <h5 class="mb-0 text-white">869</h5>
                                </div>
                                <div class="ms-auto text-white">
                                </div>
                            </div>
                            <div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 66%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
            
            <div class="card radius-10">
                <div class="card-header border-bottom-0 bg-transparent">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h6 class="font-weight-bold mb-2 mb-lg-0">Monthly Revenue</h6>
                        </div>
                        <div class="ms-lg-auto mb-2 mb-lg-0">
                            <div class="btn-group-round">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white">Day</button>
                                    <button type="button" class="btn btn-white">Week</button>
                                    <button type="button" class="btn btn-white">Month</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary radius-10 ms-lg-3">Download CSV</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart1"></div>
                </div>
            </div>
       

            <div class="card radius-10">
                <div class="card-header border-bottom-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">Recent Orders</h5>
                        </div>
                        <div class="ms-auto">
                            <button type="button" class="btn btn-white radius-10">View More</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Product Name</th>
                                    <th>Customer</th>
                                    <th>Product id</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/shoes.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Nike Sports NK</td>
                                    <td>Mitchell Daniel</td>
                                    <td>#9668521</td>
                                    <td>$99.85</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/smartphone.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Redmi Airdts</td>
                                    <td>Craig Clayton</td>
                                    <td>#8627523</td>
                                    <td>$59.35</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-danger radius-30">Cancelled</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/mouse.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Magic Mouse 2</td>
                                    <td>Julia Burke</td>
                                    <td>#6875954</td>
                                    <td>$42.68</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-warning radius-30">Pending</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/tshirt.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Coton-T-Shirt</td>
                                    <td>Clark Natela</td>
                                    <td>#4587892</td>
                                    <td>$32.78</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/headphones.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Headphones 7</td>
                                    <td>Robin Mandela</td>
                                    <td>#5587426</td>
                                    <td>$29.52</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/mouse.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Magic Mouse 2</td>
                                    <td>Julia Burke</td>
                                    <td>#6875954</td>
                                    <td>$42.68</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-warning radius-30">Pending</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src=" {{ asset('assets/images/icons/tshirt.png')}}" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Coton-T-Shirt</td>
                                    <td>Clark Natela</td>
                                    <td>#4587892</td>
                                    <td>$32.78</td>
                                    <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
</div>
<!--end wrapper-->
 
@push('js')
    <script>
    new PerfectScrollbar('.best-selling-products');
    new PerfectScrollbar('.recent-reviews');
    new PerfectScrollbar('.support-list');
</script> 
@endpush


</x-vendor.layout>