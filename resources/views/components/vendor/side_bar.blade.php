	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
				
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{route('vendor.home')}}" class=""><i class="bx bx-home"></i>Home</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart-alt' ></i></div>
						<div class="menu-title">Orders </div>
					</a>
					<ul>
						<li> <a href="{{route('vendor.orders')}}"><i class="bx bx-right-arrow-alt"></i>Orders</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-file' ></i></div>
						<div class="menu-title">Inventory </div>
					</a>
					<ul>
						<li><a href="{{route('vendor.products')}}"><i class="bx bx-right-arrow-alt"></i>Products</a></li>
						<li><a href="{{route('vendor.product')}}"><i class="bx bx-right-arrow-alt"></i>Product Details</a></li>
						<li><a href="{{route('vendor.add_product')}}"><i class="bx bx-right-arrow-alt"></i>Add New Products</a></li>
						<li> <a href="{{route('vendor.add_category')}}"><i class="bx bx-right-arrow-alt"></i>Add New Category</a></li>
						<li> <a href="{{route('vendor.add_coupon')}}"><i class="bx bx-right-arrow-alt"></i>Add Coupon</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-dollar-circle' ></i></div>
						<div class="menu-title">Payments </div>
					</a>
					<ul>
						<li> <a href="{{route('vendor.add_bank')}}"><i class="bx bx-right-arrow-alt"></i>Add New Bank</a></li>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-user-pin' ></i></div>
						<div class="menu-title">Profile </div>
					</a>
					<ul>
						<li> <a href="{{route('vendor.edit_profile')}}"><i class="bx bx-right-arrow-alt"></i>My Profile</a></li>
						</li>
					</ul>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->