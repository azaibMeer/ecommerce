@extends('admin.layouts.master')
@section('content')
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Profile
      </h1>
   </div>
@if(session()->has('message'))
              <div class="alert alert-success">
               {{ session()->get('message') }}
            </div>
           @elseif(session()->has('error'))
              <div class="alert alert-danger">
                   {{ session()->get('error') }}
              </div>
           @endif
   <div class="row">

      <div class="col-xl-6">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Update Profile
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/update/profile/'.$admin->id)}}" 
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                              Name
                           </label>
                           <input type="text" class="form-control" placeholder="name" name="name" value="{{$admin->name}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Email</label>
                           <input type="text" class="form-control" placeholder="Email" name="email" value="{{$admin->email}}">
                           {{-- @error('email')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror --}}
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                              Phone
                           </label>
                           <input type="number" class="form-control" placeholder="Phone" name="phone"
                            value="{{$admin->phone}}">
                        </div>
                        <div class="col">
                           <label class="form-label">City</label>
                           <input type="text" class="form-control" placeholder="City" name="city" 
                           value="{{$admin->city}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Date of birth</label>
                           <input type="date" class="form-control" placeholder="Birth Date" name="birth_date" 
                           value="{{$admin->date_of_birth}}">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                              Zip code 
                           </label>
                           <input type="number" class="form-control" placeholder="Zip code" name="zip_code"
                            value="{{$admin->zip_code}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Address</label>
                           <input type="text" class="form-control" placeholder="Address" name="address" 
                           value="{{$admin->address}}">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Profile</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                              <label class="custom-file-label">Choose file</label>
                               <span class="help-block">
                                  Image should be 50 by 50px
                              </span>
                              @if(isset($admin->profile))
                              <br>
                              <img src="{{url($admin->profile)}}" width="70px">
                              @endif
                              @error('image')
                                 <br>
                                 <span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">Status</label>
                           <select class="form-control" id="example-select" name="status">
                              <option value="1" {{$admin->status == 1 ? 'selected' : ''}}>Active</option>
                              <option value="0" {{$admin->status == 0 ? 'selected' : ''}}>Inactive</option>
                           </select>
                        </div>
                        <div class="col">
                           <label class="form-label">Gender</label>
                           <select class="form-control" id="example-select" name="gender">
                              <option value="male" {{$admin->gender == 'male' ? 'selected' : ''}}>Male</option>
                              <option value="female" {{$admin->gender == 'female' ? 'selected' : ''}}>Female</option>
                           </select>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                    Update</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

   
@endsection