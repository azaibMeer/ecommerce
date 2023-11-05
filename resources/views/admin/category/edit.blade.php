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
      <div class="col-md-8">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Category Edit
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
             <form method="post" action="{{url('/category/update/'.$category->id)}}" 
                     enctype="multipart/form-data">
                     @csrf
         <div class="form-row">
            <div class="form-group col-md-6">
               <label class="form-label">
                  Category
               </label>
               <input type="text" class="form-control" placeholder="name" name="category_name" 
               value="{{$category->name}}">
               @error('category_name')
                  <div class=" fs-7 text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="form-group col-md-6">
               <label class="form-label">
               Parent category
               </label>
               <select class="select2 form-control" name="sub_category">
                  <option value="0">None</option>
                  @foreach($categories as $subcategory)
                  <option value="{{$subcategory->id}}" 
                     {{$subcategory->id == $category->parent_id ? 'selected' : ''}}>
                     {{$subcategory->name}}</option>
                  @endforeach
               </select>
            @error('sub_category')
            <div class=" fs-7 text-danger">must select subcategory</div>
            @enderror
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Is featured category</label>
               <select class="form-control" name="is_featured">
                  <option value="1" {{$category->is_featured == 1 ? 'selected' : ''}}>Yes</option>
                  <option value="0" {{$category->is_featured == 0 ? 'selected' : ''}}>No</option>
               </select>
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Set order</label>
              <input type="text" class="form-control" placeholder="Order" name="order" value="{{$category->order}}">
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Show on header</label>
               <select class="form-control" name="show_on_header">
                  <option value="1" {{$category->show_on_header == 1 ? 'selected' : ''}}>Yes</option>
                  <option value="0" {{$category->show_on_header == 0 ? 'selected' : ''}}>No</option>
               </select>
         </div>
         <div class="form-group col-md-6">
               <label class="form-label">Status</label>
               <select class="form-control" id="example-select" name="status">
                  <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                  <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Inactive</option>
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
                  @if(isset($category->image))
                     <img src="{{$category->image}}" width="80px">
                  @endif
               </div>
         </div>
            <div class="form-group col-md-12">
            <label class="form-label">Description (Optional)
            </label>
            <textarea class="form-control" name="description">
               {{$category->description}}
            </textarea>
         </div>
         </div>
         <button type="submit" class="btn btn-primary waves-effect waves-themed mt-3">
        Update category</button>
      </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

   
@endsection
@section('scripts')
@include('scripts.script')
@endsection