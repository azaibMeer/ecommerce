@extends('front.layouts.master')
@section('class', 'user-login blog')
@section('content')
<div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="container">
                        <h1 class="text-center title-page">Please Login</h1>
                        @if(session()->has('message'))
                           <div class="alert alert-success">
                             {{ session()->get('message') }}
                           </div>
                           @elseif(session()->has('error'))
                           <div class=" alert alert-danger w-lg-500px ">
                            {{ session()->get('error') }}
                           </div>
                        @endif
                        <div class="login-form">
                            <form id="customer-form" action="{{url('/authenticate')}}" method="post">
                                @csrf
                                <div>
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="email" type="email" placeholder=" Email">
                                    </div>
                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="no-gutters text-center">
                                        <div class="forgot-password">
                                            <a href="#" rel="nofollow">
                                                Forgot your password?
                                            </a>
                                        </div>
                                        <div class="forgot-password">  
                                            <small>New Member?
                                            <a href="{{url('/user/register')}}" rel="nofollow">
                                                Register
                                            </a>
                                            Here
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-center no-gutters">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                            Sign in
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
@endsection