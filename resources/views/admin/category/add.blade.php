@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/formplugins/select2/select2.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Categories
      </h1>
   </div>
   @include('error.error')
<div class="row">
<div class="col-lg-9">
<div id="panel-1" class="panel">
<div class="panel-hdr">
   <h2>
      Category Add
   </h2>
</div>
<div class="panel-container show">
   <div class="panel-content">
      <form method="post" action="{{url('/category/store/')}}" 
         enctype="multipart/form-data">
         @csrf
         <div class="form-row">
            <div class="form-group col-md-6">
               <label class="form-label">
                  Category
               </label>
               <input type="text" class="form-control" placeholder="name" name="category_name">
               @error('category_name')
                  <div class=" fs-7 text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="form-group col-md-6">
               <label class="form-label">
               Parent category
               </label>
               <select class="select2 form-control" name="sub_category">
                  <option value="0" >None</option>
                  @foreach($categories as $subcategory)
                  <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                  @endforeach
               </select>
            @error('sub_category')
            <div class=" fs-7 text-danger">Must Select Sub category</div>
            @enderror
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Is featured category</label>
               <select class="form-control" name="is_featured">
                  <option value="1">Yes</option>
                  <option value="0" selected >No</option>
               </select>
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Set order</label>
              <input type="text" class="form-control" placeholder="Order" name="order">
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Show on header</label>
               <select class="form-control" name="show_on_header">
                  <option value="1">Yes</option>
                  <option value="0" selected >No</option>
               </select>
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Status</label>
               <select class="form-control" name="status">
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
               </select>   
         </div>
         <div class="form-group col-md-12">
               <label class="form-label">Category image</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image">
                  <label class="custom-file-label">Choose file</label>
                  @error('image')
                     <span class="text-danger">{{$message}}</span>
                  @enderror
               </div>
         </div>
            <div class="form-group col-md-12">
            <label class="form-label">Description (Optional)
            </label>
            <textarea class="form-control" name="description">
            </textarea>
         </div>
         </div>
         <button type="submit" class="btn btn-primary waves-effect waves-themed mt-3">
        Add Category</button>
      </form>
   </div>
</div>
</div>
</div>
</div>
</main>   
@endsection
@section('scripts')
<script src="{{url('/backend_assets/js/formplugins/select2/select2.bundle.js')}}"></script>
<script>
   $(document).ready(function()
   {
       $(function()
       {
         $('.select2').select2();
       });
   });
</script>
@endsection