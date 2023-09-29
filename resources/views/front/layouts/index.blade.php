@extends('front.layouts.master')
@section('content')

<div class="main-content">
   <div class="wrap-banner">
      @include('front.layouts.category')
      @include('front.layouts.slider')
   </div>
   <!-- main -->
   <div id="wrapper-site">
      <div id="content-wrapper" class="full-width">
         @include('front.layouts.featured_product')
      </div>
   </div>
</div>

@endsection