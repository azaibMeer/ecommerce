@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/datagrid/datatables/datatables.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-table'></i> Categories 
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
      <div class="col-xl-12">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Categories <span class="fw-300"><i>list</i></span>
               </h2>
               <div class="panel-toolbar">
                  <a href="{{url('/category/add')}}" class="btn btn-primary btn-sm">
                  Add Category</a>
               </div>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <table id="dt-basic-example" class="table table-bordered w-100 table-sm">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Image</th>
                           <th>Category</th>
                           <th>Parent Category</th>
                           <th>Order</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($categories as $category)
                        <tr>
                           <td>{{$category->id}}</td>
                           <td>
                              @if(isset($category->image))
                              <img src="{{url($category->image)}}" width="50px">
                              @else
                              <span class="text-danger">Category have no image</span>
                              @endif
                           </td>
                           <td>{{$category->name}}</td>
                           <td>
                              @if(isset($category->child_category))
                              {{$category->child_category}}
                              @else
                              <span class="text-primary">This is main category</span>
                              @endif
                           </td>
                           <td>
                              {{$category->order_number}}
                           </td>
                           <td>
                              @if($category->status == 1)
                              <span class="badge badge-primary">Active</span>
                              @else
                              <span class="badge badge-info">Inactive</span>
                              @endif
                           </td>
                           <td>
                              <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed">
                              <i class="fal fa-edit"></i>
                              </a>
                              <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-info btn-sm btn-icon waves-effect waves-themed">
                              <i class="fal fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection
@section('scripts')
<script src="{{url('/backend_assets/js/datagrid/datatables/datatables.bundle.js')}}"></script>
<script>
   /* demo scripts for change table color */
   /* change background */
   
   
   $(document).ready(function()
   {
       $('#dt-basic-example').dataTable(
       {
           responsive: true,
           order: [[0, 'desc']]
       });
   });
   
</script>
@endsection