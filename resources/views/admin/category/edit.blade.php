@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/formplugins/select2/select2.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Categories
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
                  Category Edit
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/category/update/'.$category->id)}}" 
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                              Category
                           </label>
                           <input type="text" class="form-control" placeholder="name" name="category_name" value="{{$category->name}}">
                           @error('category_name')
                              <div class=" fs-7 text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col">
                        <div class="form-group">
                           <label class="form-label" for="single-label">
                           Parent category
                           </label>
                           <select class="select2 form-control" id="single-label" name="sub_category">
                              <option value="0">None</option>
                              @foreach($categories as $subcategory)
                              <option value="{{$subcategory->id}}" 
                              	{{$subcategory->id == $category->parent_id ? 'selected' : ''}}>
                              	{{$subcategory->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        @error('sub_category')
                        <div class=" fs-7 text-danger">Must Select Sub category</div>
                        @enderror
                     </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Image</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                              <label class="custom-file-label">Choose file</label>
                              @error('image')
                                 <span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">Status</label>
                           <select class="form-control" id="example-select" name="status">
                              <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                              <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Inactive</option>
                           </select>   
                        </div>
                        <div class="col">
                           <label class="form-label">Show Home Page </label>
                           <select class="form-control" id="example-select" name="show_home_page">
                              <option value="1" {{$category->show_home_page == 1 ? 'selected' : ''}}>Yes</option>
                              <option value="0" {{$category->show_home_page == 0 ? 'selected' : ''}}>No</option>
                           </select>
                           @error('show_home_page')
                              <div class=" fs-7 text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label" for="example-textarea">Description (Optional)
                        </label>
                        <textarea class="form-control" rows="2" name="description">
                        </textarea>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
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