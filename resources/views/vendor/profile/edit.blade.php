<x-vendor.layout>
	@slot('title')
		Edit Profile
	@endslot


		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{ asset('assets/images/avatars/avatar-2.png')}}"alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>John Doe</h4>
												<p class="text-secondary mb-1">Full Stack Developer</p>
												<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
												
											</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
												<span class="text-secondary">https://codervent.com</span>
										
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
												<span class="text-secondary">@codervent</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
												<span class="text-secondary">codervent</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
												<span class="text-secondary">codervent</span>
											</li>
										</ul> 
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
										    
											<div class="col-sm-12">
												
											
											<button style="" type="button" class="btn btn-outline-primary "><i class="fadeIn animated bx bx-message-alt-edit"></i>Change Password</button>
												
											</div>
											
								
									</div>
										
								<style>.btn{text-align:left !important;width:95%;
								}
								.card-body{
								    padding: 3rem 1rem;
								}
								.btn .bx-chevron-right-circle{
								   position:absolute;
								   right:20px;
								    
								}
								</style>		
										
										<div class="row mb-3">
											<div class="col-sm-12">
											<button style="" type="button" class="btn btn-outline-primary "><i class="fadeIn animated bx bx-message-rounded-dots"></i>Notifications 
											
											
											</button>
												
											</div>
										</div>
										<div class="row mb-3">
										<div class="col-sm-12">
											<button style="" type="button" class="btn btn-outline-primary"><i class="fadeIn animated bx bx-flag"></i>Language</button>
												
											</div>
										</div>
										<div class="row mb-3">
										<div class="col-sm-12">
											<button style="" type="button" class="btn btn-outline-primary"><i class="fadeIn animated bx bx-support"></i>Help & Chat With Us</button>
												
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-12">
												<form method="POST" action="{{ route('logout') }}">
													@csrf
													<button style="" type="submit" class="btn btn-outline-primary"><i class="fadeIn animated bx bx-log-out"></i>Logout</button>
												</form>
											</div>
										</div>
									
									</div>
								</div>
						<!--	<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<h5 class="d-flex align-items-center mb-3">Project Status</h5>
												<p>Web Design</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>Website Markup</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>One Page</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>Mobile Template</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>Backend API</p>
												<div class="progress" style="height: 5px">
													<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		
		
	</div>
	<!--end wrapper-->
	
</x-vendor.layout>