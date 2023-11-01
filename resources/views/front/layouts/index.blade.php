@extends('front.layouts.master')
@section('content')
<div class="main-content">
   <div class="wrap-banner">
      @include('front.layouts.category')
      @include('front.layouts.slider')
   </div>
   <div id="wrapper-site">
      <div id="content-wrapper" class="full-width">
         <div id="main">
            <section class="page-home">
               @include('front.layouts.featured_categories')
               @include('front.layouts.featured_product')
               @include('front.layouts.blogs')
            </section>
         </div>
      </div>
   </div>
</div>
@endsection