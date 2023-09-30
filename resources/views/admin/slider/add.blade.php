@extends('admin.layouts.master')
@section('content')
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Sliders
      </h1>
   </div>
   @if(session()->has('message'))
   <div class="alert alert-success" role="alert">
    <strong>Settings</strong> updated success
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
                  Slider Add
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/slider/store/')}}" 
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                              Name
                           </label>
                           <input type="text" class="form-control" placeholder="Slider name" name="slider_title">
                           @error('slider_title')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <label class="form-label">Link</label>
                           <input type="text" class="form-control" placeholder="Slider link" name="slider_link">
                           @error('slider_link')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label" for="example-textarea">Description
                        </label>
                        <textarea class="form-control" rows="2" name="description">
                        </textarea>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Image</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                              <label class="custom-file-label">Choose file</label>
                              <span class="help-block">
                                  Image should be 1920 x 1010 px
                              </span>
                              @error('image')
                                 <span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">Status</label>
                           <select class="form-control" id="example-select" name="status">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                           
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                    Add slider</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

   
@endsection