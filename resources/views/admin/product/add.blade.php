@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/formplugins/select2/select2.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Product
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
                 Add Product
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/product/store/')}}" 
                  	enctype="multipart/form-data">
                  	@csrf
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Product Name
                           </label>
                           <input type="text" name="product_name" class="form-control" placeholder="Product name" value="" />
                           @error('product_name')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <div class="form-group">
                           <label class="form-label" for="single-label">
                          Category
                           </label>
                           <select class="select2 form-control" id="single-label" name="category_id">
                              <option value="0" >None</option>
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Price
                           </label>
                           <input type="number" class="form-control" placeholder="Price" name="price">
                            @error('price')
                                 <span class="text-danger">{{$price}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Discount
                           </label>
                           <input type="number" class="form-control" placeholder="Discount" name="discount">
                           @error('discount')
                                 <span class="text-danger">{{$discount}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <label class="form-label">Short description
                           </label>
                           <input type="text" class="form-control" placeholder="Short description" name="short_description">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Quantity
                           </label>
                           <input type="number" class="form-control" placeholder="Quantity" name="quantity">
                        </div>
                        <div class="col">
                           <label class="form-label">Product SKU
                           </label>
                           <input type="number" class="form-control" placeholder="SKU" name="product_sku">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Image</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="main_image">
                              <label class="custom-file-label">Choose file</label>
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
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Weight
                           </label>
                           <input type="number" class="form-control" placeholder="Weight" name="weight">
                           <span>In gram</span>
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Height
                           </label>
                           <input type="number" class="form-control" placeholder="Height" name="height">
                        </div>
                        <div class="col">
                           <label class="form-label">Width
                           </label>
                           <input type="number" class="form-control" placeholder="Width" name="width">
                        </div>
                        <div class="col">
                           <label class="form-label">Length
                           </label>
                           <input type="number" class="form-control" placeholder="Length" name="length">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Meta Title
                           </label>
                           <input type="text" class="form-control" placeholder="Meta Title" name="meta_title">
                        </div>
                        <div class="col">
                           <label class="form-label">
                          Meta Description
                           </label>
                           <input type="text" class="form-control" placeholder="Meta Description" name="meta_description">
                        </div>
                        <div class="col">
                           <label class="form-label">Meta Tags
                           </label>
                           <input type="text" class="form-control" placeholder="Meta tags" name="meta_tags">
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                     Add Product</button>
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
