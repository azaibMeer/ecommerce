@extends('front.master')
@section('class', 'user-login blog')
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
                                    <span>Login</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

        </div> -->

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="container">
                        <h1 class="text-center title-page">Please Login</h1>
                        <div class="login-form">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                            <form id="customer-form" action="{{url('/authenticate')}}" method="post">
                                @csrf
                                <div>
                                    
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="email" type="email" placeholder=" Email" value="user@gmail.com">
                                    </div>
                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="no-gutters text-center">
                                        <div class="forgot-password">
                                            <a href="user-reset-password.html" rel="nofollow">
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