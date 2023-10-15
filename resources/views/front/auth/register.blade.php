@extends('front.layouts.master')
@section('class', 'user-register blog')
@section('content')
<div class="main-content">
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
                                    
                                    <h1 class="text-center title-page">
                                        Create your {{$setting->website_name}} Account
                                    </h1>
                                    <form action="{{url('/create/user')}}" id="customer-form" 
                                    class="js-customer-form" method="post">
                                    @csrf
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="label-register">Full Name</label>
                                                    <input class="form-control" name="name" type="text" placeholder="First name">
                                                    @error('name')
                                                    <p class="error-alignment">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div>
                                                    <label class="label-register">Email</label>
                                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                                     @error('email')
                                                    <p class="error-alignment">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="label-register">Password</label>
                                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                                     @error('password')
                                                    <p class="error-alignment">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col">
                                                  <label class="label-register">Phone</label>
                                                  <input type="text" class="form-control" name="phone" type="number" placeholder="Phone">
                                                   @error('phone')
                                                    <p class="error-alignment">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <label class="label-register">Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option value="male">Male </option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="label-register">Address</label>
                                                    <input class="form-control" name="address" type="address" placeholder="Address">
                                                     @error('address')
                                                    <p class="error-alignment">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="clearfix">
                                            <div>
                                            <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                                    Create Account
                                            </button>
                                            </div>
                                            <div class="forgot-password">  
                                            <small>Already Member?
                                            <a href="{{url('/user/login')}}" rel="nofollow">
                                                Login
                                            </a>
                                            Here
                                            </small>
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