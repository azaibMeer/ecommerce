@extends('admin.layouts.master')
@section('content')

<main id="js-page-content" role="main" class="page-content">
                        
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Profile
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xl-3 order-lg-1 order-xl-1">
                                <!-- profile summary -->
                                <div class="card mb-g rounded-top">
                                    <div class="row no-gutters row-grid">
                                        <div class="col-12">
                                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                                <img src="{{$admin->profile}}" class="rounded-circle shadow-2 img-thumbnail" alt="">
                                                <h5 class="mb-0 fw-700 text-center mt-3">
                                                    {{$admin->name}}
                                                    <small class="text-muted mb-0">{{$admin->city}}</small>
                                                </h5>                                             
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center py-3">
                                                <h5 class="mb-0 fw-700">
                                                    Email
                                                    <small class="text-muted mb-0">{{$admin->email}}</small>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center py-3">
                                                <h5 class="mb-0 fw-700">
                                                    Status
                                                    @if($admin->status == 1)
                                                    <small class="text-muted mb-0 ">Active</small>
                                                    @endif
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="p-3 text-center">
                                                <span class="text-primary d-inline-block mx-3">
                                                	{{$admin->address}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
@endsection