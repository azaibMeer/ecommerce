@extends('front.master')
@section('class', 'user-register blog')
@section('content')
<div class="main-content">
   <!-- <div class="wrap-banner">
      <nav class="breadcrumb-bg">
          <div class="container no-index">
              <div class="breadcrumb">
                  <ol>
                      <li>
                          <a href="#">
                              <span>Home</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span>About us</span>
                          </a>
                      </li>
                  </ol>
              </div>
          </div>
      </nav>
      </div> -->
   <!-- main -->
   <div id="wrapper-site">
      <div class="container">
         <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
               <div id="main">
                  <div id="content" class="page-content">
                     <div class="register-form text-center">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                           {{ session()->get('message') }}
                        </div>
                        @elseif(session()->has('error'))
                        <div class="alert alert-danger">
                           {{ session()->get('error') }}
                        </div>
                        @endif
                        <h1 class="text-center title-page">Manage Profile</h1>
                        <form action="{{url('/update/user/profile')}}" id="customer-form" 
                           class="js-customer-form" method="post">
                           @csrf
                           <div>
                              <div class="form-group">
                                 <div>
                                    <input class="form-control" name="name" type="text" placeholder="First name" value="{{$user->name}}">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div>
                                    <input class="form-control" name="email" type="email"
                                       value="{{$user->email}}" readonly>
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col">
                                    <input type="text" class="form-control" name="phone" type="number" placeholder="Phone" 
                                       value="{{$user->phone}}">
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                 </div>
                                 <div class="col">
                                    <select class="form-control" name="gender">
                                       <option value="male" {{$user->gender == "male" ? 'selected': ''}}>Male </option>
                                       <option value="female" {{$user->gender == "female" ? 'selected': ''}}>Female</option>
                                       <option value="other">Other</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div>
                                    <input class="form-control" name="address" type="address" placeholder="Address" value="{{$user->address}}">
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                 </div>
                                 <div class="forgot-password">  
                                    <small>
                                    <a href="{{url('/change/password')}}"
                                       rel="nofollow">
                                    Change your Password </a>
                                    </small>
                                 </div>
                              </div>
                           </div>
                           <div class="clearfix">
                              <div>
                                 <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                 Update Profile
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection