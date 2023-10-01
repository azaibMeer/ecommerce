@extends('front.layouts.master')
@section('class', 'user-reset-password blog')
@section('content')
<div class="main-content">
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="onecol">
                        <div id="main">
                            <div class="page-content">
                                @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @elseif(session()->has('danger'))
                            <div class="alert alert-danger">
                                {{ session()->get('danger') }}
                            </div>
                        @endif
                                <form action="{{url('/store/password')}}"
                                 class="forgotten-password" method="post" id="customer-form">
                                 @csrf
                                    <h1 class="text-center title-page">User Reset Password</h1>
                                    <div class="form-fields text-center ">
                                        <div class="form-group center-email-fields">
                                            <div class="email">
                                                <input type="password" name="old_password" id="password" value="" class="form-control" placeholder="Old Password">
                                            </div>
                                        </div>
                                        <div class="form-group center-email-fields">
                                        <div class="email">
                                                <input type="password" name="confirm_password" id="password" value="" class="form-control" placeholder="New Password">
                                        </div>
                                    </div>
                                        <div class="form-group center-email-fields">
                                            <div class="email">
                                                <input type="password" name="new_password" id="password" value="" class="form-control" placeholder="New Password">
                                            </div>
                                            

                                            <div>
                                                <button class="form-control-submit btn btn-primary" name="submit" type="submit">
                                                    Change Password
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{url('/')}}" class="account-link">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            <span class="text-center">Back to Home</span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection