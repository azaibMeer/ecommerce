<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>{{$setting->website_name}}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="backend_assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{url('/backend_assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('/backend_assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		
	</head>

	<body id="kt_body" class="bg-body">
	
		<div class="d-flex flex-column flex-root">
		
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" 
			style="background-image: url(backend_assets/media/illustrations/sketchy-1/14.png)">
			
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
				
					<a href="../../demo1/dist/index.html" class="mb-12">
						<img alt="Logo" src="backend_assets/media/logos/logo-1.svg" class="h-40px" />
					</a>
					
					@if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class=" alert alert-danger w-lg-500px ">
                                {{ session()->get('error') }}
                            </div>
                        @endif
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" action="{{url('/authenticate')}}" method="post">
							@csrf
							
							<div class="text-center mb-10">
							
								<h1 class="text-dark mb-3">Sign In to {{$setting->website_name}}</h1>
								
							</div>
						
							<div class="fv-row mb-10">
						
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
							
								<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" value="iamadmin@gmail.com" />
								@error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
							
							</div>
						
							<div class="mb-10 fv-row" data-kt-password-meter="true">
                        
                                <div class="mb-1">
                                 <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid"  type="password" placeholder="" name="password" autocomplete="off" value="admin" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    @error('password')
                                	<p class="text-danger">{{ $message }}</p>
                                	@enderror
                                </div>
                            </div>
							
							<div class="text-center">
							
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								
								<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
							
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="backend_assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
								
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="backend_assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
							
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="backend_assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a>
								
							</div>
							
						</form>
						
					</div>
					
				</div>
			
			</div>
		
		</div>
		
		
		<script>var hostUrl = "assets/";</script>
		<script src="{{url('/backend_assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{url('/backend_assets/js/scripts.bundle.js')}}"></script>
		
	</body>
	
</html>