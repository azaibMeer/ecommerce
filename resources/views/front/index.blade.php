@extends('front.master')
@section('content')

<div class="main-content">
   <div class="wrap-banner">
      @include('front.category')
      @include('front.slider')
   </div>
   <!-- main -->
   <div id="wrapper-site">
      <div id="content-wrapper" class="full-width">
         @include('front.featured_product')
      </div>
   </div>
</div>

@endsection