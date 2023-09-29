@extends('front.layouts.master')
@section('class', 'user-acount')
@section('content')
<div class="main-content">
        <div class="wrap-banner">
            <div class="acount head-acount">
                <div class="container">
                    <div id="main">
                        <h1 class="title-page">My Account</h1>
                        <div class="content" id="block-history">
                            <table class="std table">
                                <tbody>
                                    <tr>
                                        <th class="first_item">My Name :</th>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Email :</th>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Address :</th>
                                        <td>{{$user->address}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Phone :</th>
                                        <td>{{$user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Gender :</th>
                                        <td>{{$user->gender}}</td>
                                    </tr>
                                    </tbody>
                            </table>

                        </div>
                        <a href="{{url('/user/profile')}}" class="btn btn-primary">
                            Update Profile
                        </a>
                        <div class="order">
                            <h4>Order
                                <span class="detail">History</span>
                            </h4>
                            <p>You haven't placed any orders yet.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection