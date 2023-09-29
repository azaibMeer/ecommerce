@extends('front.layouts.master')
@section('class', 'blog')
@section('id', 'contact')
@section('content')
<div class="main-content">
   <div id="wrapper-site">
      <div id="content-wrapper">
         <div id="main">
            <div class="page-home">
               <div class="container">
                  <h1 class="text-center title-page">Your Order Has Been Completed</h1>
                  <h5 class="text-center">Your Order No is  {{$order_no}}</h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
  
   
