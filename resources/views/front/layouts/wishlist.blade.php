@extends('front.layouts.master')
@section('class', 'user-wishlist blog')
@section('content')
<div class="main-content">
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <div id="main">
                            <div id="content" class="page-content">
                                <div id="mywishlist">
                                    <h1 class="title-page">My Wishlists</h1>
                                    <div id="block-history" class="block-center">
                                        <table class="std table">
                                            <thead>
                                                <tr>
                                                    <th class="first_item">Image</th>
                                                    <th class="item mywishlist_first">Name</th>
                                                    <th class="item mywishlist_first">Price</th>
                                                    <th class="item mywishlist_first">Viewed</th>
                                                    <th class="item mywishlist_second">Created</th>
                                                    <th class="last_item mywishlist_first">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($wishlist) > 0)
                                                    @foreach($wishlist as $list)
                                                    <tr>
                                                        <td><img src="{{$list->main_image}}" id="set-dimension"></td>
                                                        <td>{{$list->name}}</td>
                                                        <td>{{$list->price - $list->discount}}</td>
                                                        <td><a href="{{url('/product/detail/'.$list->slug)}}">view</a></td>
                                                        <td>{{$list->created_at}}</td>
                                                        <td>
                                                            <a href="{{url('/wishlist/delete/'.$list->id)}}" class="icon-size" title="remove">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        
                                                            </a>
                                                    @php
                                                        $product = App\Models\Product::where('id',$list->product_id)->first();
                                                    @endphp
                                                            @if(($product->quantity) > 0)
                                                            <a href="{{url('/user/addtocart/'.$list->id)}}" class="icon-size" title="add to cart ">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            </a>
                                                            @endif
                                                        </td>
                                                       
                                                    </tr>
                                                    @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="6">There are no favorites yet.
                                                    Add your favorites to wishlist and they will show here.</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="page-home">
                                        <a class="btn btn-default" href="{{url('/')}}">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Homepage</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection