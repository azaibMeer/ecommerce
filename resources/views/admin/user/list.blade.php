@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/datagrid/datatables/datatables.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-table'></i> Users 
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
                  User <span class="fw-300"><i>list</i></span>
               </h2>
               <!-- <div class="panel-toolbar">
                  <a href="{{url('/slider/add')}}" class="btn btn-primary btn-sm">
                  Add slider</a>
               </div> -->
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <table id="dt-basic-example" class="table table-bordered w-100 table-sm">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($users as $user)
                        <tr>
                           <td>{{$user->id}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->phone}}</td>
                           <td>
                              @if($user->status == 1)
                              <span class="badge badge-primary">Active</span>
                              @else
                              <span class="badge badge-info">Inactive</span>
                              @endif
                           </td>
                           <td>
                              <a href="{{url('/user/edit/'.$user->id)}}" class="btn btn-info btn-sm btn-icon waves-effect waves-themed">
                              <i class="fal fa-edit"></i>
                              </a>
                              <a href="{{url('/user/delete/'.$user->id)}}" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed">
                              <i class="fal fa-trash"></i>
                              </a>
                              <a href="{{url('/user/detail/'.$user->id)}}" class="btn btn-warning btn-sm btn-icon waves-effect waves-themed">
                              <i class="fal fa-eye"></i>
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
           order : [['0','desc']]
       });
   
       $('.js-thead-colors a').on('click', function()
       {
           var theadColor = $(this).attr("data-bg");
           console.log(theadColor);
           $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
       });
   
       $('.js-tbody-colors a').on('click', function()
       {
           var theadColor = $(this).attr("data-bg");
           console.log(theadColor);
           $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
       });
   
   });
   
</script>
@endsection