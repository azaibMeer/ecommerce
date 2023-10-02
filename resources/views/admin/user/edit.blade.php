@extends('admin.layouts.master')
@section('content')
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Users
      </h1>
   </div>
   @if(session()->has('message'))
   <div class="alert alert-success" role="alert">
    {{session()->get('message')}}
   </div>
   @elseif(session()->has('error'))
   <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong>Change a few things up and try submitting again.
   </div>
   @endif
   <div class="row">
      <div class="col-xl-6">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  User edit
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/user/update/'.$user->id)}}" 
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                              Name
                           </label>
                           <input type="text" class="form-control" placeholder="Name" name="name" value="{{$user->name}}">
                        </div>
                        <div class="col">
                           <label class="form-label">email</label>
                           <input type="text" class="form-control" placeholder="Slider link" name="email" value="{{$user->email}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Password</label>
                           <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                     </div>
                     <div class="form-group form-row">
                        <div class="col">
                        <label class="form-label" for="example-textarea">Description
                        </label>
                        <textarea class="form-control" rows="2" name="address">
                         {{$user->address}}
                        </textarea>
                        </div>
                        <div class="col">
                        <label class="form-label" for="example-textarea">Phone
                        </label>
                       <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{$user->phone}}">
                       @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Profile</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                              <label class="custom-file-label">Choose file</label>
                              <span class="help-block">
                                  Image should be 1920 x 1010 px
                              </span>
                              @if(isset($user->profile))
                                <div>
                                    <img src="{{url($user->profile)}}" width="70px">
                                </div>
                              @endif
                              @error('image')
                                 <span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">Status</label>
                           <select class="form-control" id="example-select" name="status">
                              <option value="1" {{$user->status == 1 ? 'selected' : ''}}>Active</option>
                              <option value="0" {{$user->status == 0 ? 'selected' : ''}}>Inactive</option>
                           </select>
                           
                        </div>
                        <div class="col">
                           <label class="form-label">Gender</label>
                           <select class="form-control" id="example-select" name="gender">
                              <option value="male" {{$user->gender == 'male' ? 'selected' : ''}}>Male</option>
                              <option value="female" {{$user->gender == 'female' ? 'selected' : ''}}>Female</option>
                           </select>
                           
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Date of birth</label>
                           <input type="date" class="form-control" placeholder="Date of birth" name="date_of_birth" value="{{$user->date_of_birth}}">
                        </div>
                        <div class="col">
                           <label class="form-label">City</label>
                           <input type="text" class="form-control" placeholder="City" name="city" value="{{$user->city}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Zip Code </label>
                           <input type="text" class="form-control" placeholder="Zip code " name="zip_code" value="{{$user->zip_code}}">
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                    Update user</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

   
@endsection