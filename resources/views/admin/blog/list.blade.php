@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/datagrid/datatables/datatables.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-table'></i> Blogs 
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
                  Blogs <span class="fw-300"><i>list</i></span>
               </h2>
               <div class="panel-toolbar">
                  <a href="{{url('/blog/add')}}" class="btn btn-primary btn-sm">
                  Add Blog</a>
               </div>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <table id="dt-basic-example" class="table table-bordered w-100 table-sm">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Title</th>
                           <th>Image</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                           <td>{{$blog->id}}</td>
                           <td>{{$blog->title}}</td>
                           <td>
                              <img src="{{$blog->image}}" width="50px">
                           </td>
                           <td>
                              @if($blog->status == 1)
                              <span class="badge badge-primary">Active</span>
                              @else
                              <span class="badge badge-info">Inactive</span>
                              @endif
                           </td>
                           <td>
                              <a href="{{url('/blog/edit/'.$blog->id)}}" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed">
                              <i class="fal fa-edit"></i>
                              </a>
                              <a href="{{url('/blog/delete/'.$blog->id)}}" class="btn btn-info btn-sm btn-icon waves-effect waves-themed">
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