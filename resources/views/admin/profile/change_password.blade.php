@extends('admin.layouts.master')
@section('content')
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Change Password
      </h1>
   </div>
   <div class="row">
      <div class="col-lg-6">
        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @elseif(session()->has('danger'))
                            <div class="alert alert-danger">
                                {{ session()->get('danger') }}
                            </div>
                        @endif
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Password
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/store/password')}}"
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-row form-group">
                        <div class="col-lg-12">
                           <label class="form-label">Old Password</label>
                           <input type="password" name="old_password" class="form-control" 
                           placeholder="Old password">
                        </div>
                     </div>
                     <div class="form-group form-row">
                     	<div class="col-lg-12">
                           <label class="form-label">New Password</label>
                           <input type="password" name="new_password" class="form-control" 
                           placeholder="New password">
                        </div>
                     </div>
                     <div class="form-group form-row">
                     	<div class="col-lg-12">
                           <label class="form-label">Confirm password</label>
                           <input type="password" name="confirm_password" class="form-control" 
                           placeholder="New Password">
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                    Change</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection
@section('scripts')

@endsection