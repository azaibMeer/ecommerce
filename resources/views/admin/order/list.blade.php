@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/datagrid/datatables/datatables.bundle.css')}}">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         Orders 
      </h1>
   </div>
   @include('error.error')
   <div class="row">
      <div class="col-xl-12">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Orders <span class="fw-300"><i>list</i></span>
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <table id="dt-basic-example" class="table table-bordered w-100 table-sm">
                     <thead>
                        <tr>
                           <th>Order no</th>
                           <th>Customer</th>
                           <th>quantity</th>
                           <th>Total price</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                     	@foreach($orders as $order)
                     	<tr>
                     		<td>{{$order->order_no}}</td>
                     		<td>{{$order->user_name}}</td>
                     		<td>{{$order->quantity}}</td>
                     		<td>{{$order->total_price}}</td>
                     		<td>
                     			@if($order->status == 1)
                     				New
                     			@endif
                     			@if($order->status == 2)
                     				Shipped
                     			@endif
                     			@if($order->status == 3)
                     				Deliverd
                     			@endif
                     			@if($order->status == 4)
                     				Canclled
                     			@endif
                     		</td>
                     		<td>
                              <a href="{{url('/view/order/'.$order->id)}}" class="btn btn-primary btn-sm btn-icon">
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