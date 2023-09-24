
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login - - {{$setting->website_name}}
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/vendors.bundle.css')}}">
        <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/app.bundle.css')}}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('/backend_assets/img/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('/backend_assets/img/favicon/favicon-32x32.png')}}">
        <link rel="mask-icon" href="{{url('/backend_assets/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <!-- Optional: page related CSS-->
       <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/page-login-alt.css')}}">
    </head>
    <body>
        <div class="blankpage-form-field">
        	@if(session()->has('message'))
               <div class="alert alert-success">
                 {{ session()->get('message') }}
               </div>
               @elseif(session()->has('error'))
               <div class=" alert alert-danger w-lg-500px ">
                {{ session()->get('error') }}
               </div>
            @endif
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <!-- <img src="{{$setting->logo_path}}" alt="SmartAdmin WebApp" aria-roledescription="logo"> -->
                    <span class="page-logo-text mr-1">Login Into {{$setting->website_name}}</span>
                    <!-- <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i> -->
                </a>
            </div>
            
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <form action="{{url('/authenticate')}}" method="post">
                	@csrf
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" 
                        placeholder="your id or email" value="iamadmin@gmail.com">
                        @error('email')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" 
                        class="form-control" placeholder="password">
                        @error('password')
                                	<p class="text-danger">{{ $message }}</p>
                        @enderror    
                    </div>
                    <!-- <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-default float-right">Login</button>
                </form>
            </div>
            <!-- <div class="blankpage-footer text-center">
                <a href="#"><strong>Recover Password</strong></a> | <a href="#"><strong>Register Account</strong></a>
            </div> -->
        </div>
        <!-- <div class="login-footer p-2">
            <div class="row">
                <div class="col col-sm-12 text-center">
                    <i><strong>System Message:</strong> You were logged out from 198.164.246.1 on Saturday, March, 2017 at 10.56AM</i>
                </div>
            </div>
        </div> -->
        <video poster="{{url('/backend_assets/img/backgrounds/clouds.png')}}" id="bgvid" playsinline autoplay muted loop>
            <source src="{{url('/backend_assets/media/video/cc.webm')}}" type="video/webm">
            <source src="{{url('/backend_assets/media/video/cc.mp4')}}" type="video/mp4">
        </video>
        <!-- BEGIN Color profile -->
        <!-- this area is hidden and will not be seen on screens or screen readers -->
        <!-- we use this only for CSS color refernce for JS stuff -->
        <p id="js-color-profile" class="d-none">
            <span class="color-primary-50"></span>
            <span class="color-primary-100"></span>
            <span class="color-primary-200"></span>
            <span class="color-primary-300"></span>
            <span class="color-primary-400"></span>
            <span class="color-primary-500"></span>
            <span class="color-primary-600"></span>
            <span class="color-primary-700"></span>
            <span class="color-primary-800"></span>
            <span class="color-primary-900"></span>
            <span class="color-info-50"></span>
            <span class="color-info-100"></span>
            <span class="color-info-200"></span>
            <span class="color-info-300"></span>
            <span class="color-info-400"></span>
            <span class="color-info-500"></span>
            <span class="color-info-600"></span>
            <span class="color-info-700"></span>
            <span class="color-info-800"></span>
            <span class="color-info-900"></span>
            <span class="color-danger-50"></span>
            <span class="color-danger-100"></span>
            <span class="color-danger-200"></span>
            <span class="color-danger-300"></span>
            <span class="color-danger-400"></span>
            <span class="color-danger-500"></span>
            <span class="color-danger-600"></span>
            <span class="color-danger-700"></span>
            <span class="color-danger-800"></span>
            <span class="color-danger-900"></span>
            <span class="color-warning-50"></span>
            <span class="color-warning-100"></span>
            <span class="color-warning-200"></span>
            <span class="color-warning-300"></span>
            <span class="color-warning-400"></span>
            <span class="color-warning-500"></span>
            <span class="color-warning-600"></span>
            <span class="color-warning-700"></span>
            <span class="color-warning-800"></span>
            <span class="color-warning-900"></span>
            <span class="color-success-50"></span>
            <span class="color-success-100"></span>
            <span class="color-success-200"></span>
            <span class="color-success-300"></span>
            <span class="color-success-400"></span>
            <span class="color-success-500"></span>
            <span class="color-success-600"></span>
            <span class="color-success-700"></span>
            <span class="color-success-800"></span>
            <span class="color-success-900"></span>
            <span class="color-fusion-50"></span>
            <span class="color-fusion-100"></span>
            <span class="color-fusion-200"></span>
            <span class="color-fusion-300"></span>
            <span class="color-fusion-400"></span>
            <span class="color-fusion-500"></span>
            <span class="color-fusion-600"></span>
            <span class="color-fusion-700"></span>
            <span class="color-fusion-800"></span>
            <span class="color-fusion-900"></span>
        </p>
        <!-- END Color profile -->
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="{{url('/backend_assets/js/vendors.bundle.js')}}"></script>
        <script src="{{url('/backend_assets/js/app.bundle.js')}}"></script>
        <!-- Page related scripts -->
    </body>
</html>
