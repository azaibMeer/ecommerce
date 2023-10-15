<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            {{$setting->website_name}}
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/vendors.bundle.css')}}">
        <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/app.bundle.css')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/fa-brands.css')}}">
    </head>
    <body>
        <div class="page-wrapper">
   <div class="page-inner bg-brand-gradient">
      <div class="page-content-wrapper bg-transparent m-0">
         <div class="flex-1">
            <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
               <div class="row">
                  <div class="col col-md-6 col-lg-7 hidden-sm-down">
                     <h2 class="fs-xxl fw-500 mt-4 text-white">
                        {{$setting->website_name}}
                        <small class="h5 fw-300 mt-3 mb-5 text-white opacity-60">
                       {{$setting->description}}
                        </small>
                     </h2>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                     <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                        Secure login
                     </h1>
                        @if(session()->has('message'))
                         <div class="alert alert-primary">
                          {{ session()->get('message') }}
                        </div>
                      @elseif(session()->has('error'))
                         <div class="alert alert-primary">
                              {{ session()->get('error') }}
                         </div>
                      @endif
                     <div class="card p-4 rounded-plus bg-faded">
                        <form action="{{url('/authenticate')}}" method="post" id="login">
                           @csrf
                           <div class="form-group">
                              <label class="form-label" for="email">Email</label>
                              <input type="email" id="email" name="email" class="form-control"placeholder="Email">
                              @error('email')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                           </div>
                           <div class="form-group">
                              <label class="form-label" for="password">Password</label>
                              <input type="password" name="password" id="password" 
                                 class="form-control" placeholder="Password">
                              @error('password')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror    
                           </div>
                           <div class="form-group text-left">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="rememberme">
                                 <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                              </div>
                           </div>
                           <div class="row no-gutters">
                              {{--<div class="col-lg-6 pr-lg-1 my-2">
                                 <button type="submit" class="btn btn-info btn-block btn-lg">Sign in with <i class="fab fa-google"></i></button>
                              </div>--}}
                              <div class="col-lg-6 pl-lg-1 my-2">
                                 <button id="js-login-btn" type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               @php
                  use Carbon\Carbon;
               @endphp
               @if(isset($setting->developed_by))
               <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                  © {{Carbon::now()->format('Y')}} 
                  <a href="{{url('http://www.technidersolutions.com/')}}" 
                     class='text-white' target='_blank'>{{$setting->developed_by}}</a>
               </div>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>
</body>
</html>
