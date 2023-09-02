@extends('front.master')
@section('content')
@section('id', 'product-detail')
<div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->
                        
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                        <!-- category -->
                                         <div class="sidebar-block">
                                            <div class="title-block">Categories</div>
                                            <div class="block-content">
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#livingroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Living Room</a>
                                                    <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">Side Table</a>
                                                            <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">floor lamp</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ottoman</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">armchair</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">cushion</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Bathroom</a>
                                                    <div class="subCategory collapse" id="bathroom">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BROCCOLI</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">CABBAGE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">CUCUMBER</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">EGGPLANT</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Dining Rooom</a>
                                                    <div class="subCategory collapse" id="diningroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">DRY BREAD</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BREAD SLICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FRENCH BREAD</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BLACK BREAD</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">BedRoom</a>
                                                    <div class="subCategory collapse" id="bedroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ORANGE JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">APPLE JUICES</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Kitchen</a>
                                                    <div class="subCategory collapse" id="kitchen" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ORANGE JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">APPLE JUICES</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                        <!-- best seller -->
                                        <div class="sidebar-block">
                                            <div class="title-block">
                                                Best seller
                                            </div>
                                            <div class="product-content tab-content">
                                                <div class="row">
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/front_assets/img/product/1.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/front_assets/img/product/22.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Nulla et justo augue</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">£28.08</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/front_assets/img/product/2.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/front_assets/img/product/11.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Nulla et justo augue</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">£31.08</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/front_assets/img/product/3.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/front_assets/img/product/14.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Nulla et justo augue</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">£20.08</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- product tag -->
                                        
                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9">
                                            @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                   {{ session()->get('message') }}
                                                </div>
                                                @elseif(session()->has('error'))
                                                <div class="alert alert-danger">
                                                   {{ session()->get('error') }}
                                                </div>
                                                @endif
                                        <div class="main-product-detail">
                                            <h2>{{ucwords($product->name)}}</h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <div id="item1" class="tab-pane fade active in show">
                                                                    <img src="{{$product->main_image}}" alt="img" id="mainImage">
                                                                </div>
                                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                    <i class="fa fa-expand"></i>
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">
                                                                @foreach($product_images as $key => $image)
                                                                <li class="col">
                                                                    <a href="#item" data-toggle="tab" >
                                                                        <img src="{{$image->sub_image}}" alt="img" title="{{$key}}" class="sub-images " >
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <div class="modal-body">
                                                                                <div class="product-detail">
                                                                                    <div>
                                                                                        <div class="images-container">
                                                                                            <div class="js-qv-mask mask tab-content">
                                                                                                <div id="modal-item1" class="tab-pane fade active in show">
                                                                                                    <img src="{{$product->main_image}}" alt="img" id="modal-image-main">
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                            <ul class="product-tab nav nav-tabs">
                                                                                                @foreach($product_images as $image)
                                                                                                <li class="active">
                                                                                                    <a href="#modal-item1" data-toggle="tab" class="show">
                                                                                                        <img src="{{$image->sub_image}}" alt="img" class="modal-sub-images">
                                                                                                    </a>
                                                                                                </li>
                                                                                                @endforeach
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <form action="{{url('/product/addtocart/'.$product->id)}}" method="post">
                                                    @csrf
                                                    <div class="detail-description">
                                                        <div class="price-del">
                                                            <span class="price">
                                                                {{$setting->currency}} {{$product->price - $product->discount}}
                                                            </span>
                                                            <span class="float-right">
                                                                <span class="availb">Availability: </span>
                                                                 @if($product->quantity >  0)
                                                                <span class="check">
                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>IN STOCK
                                                                </span>
                                                                @else
                                                                <span class="uncheck">
                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>OUT OF STOCK
                                                                </span>
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <p class="description">{{$product->short_description}}</p>
                                                        <div class="option has-border d-lg-flex size-color">
                                                            <div class="size">
                                                                <span class="size">size :</span>
                                                                <select>
                                                                    <option value="">Choose your size</option>
                                                                    <option value="">M</option>
                                                                    <option value="">l</option>
                                                                    <option value="">xl</option>
                                                                </select>
                                                            </div>
                                                            <div class="colors">
                                                                <b class="title">Color : </b>
                                                                <span class="blue"></span>
                                                                <span class="yellow"></span>
                                                                <span class="pink"></span>
                                                                <span class="green"></span>
                                                                <span class="brown"></span>
                                                                <span class="red"></span>
                                                            </div>
                                                        </div>
                                                        <div class="has-border cart-area">
                                                            <div class="product-quantity">
                                                                <div class="qty">
                                                                    <div class="input-group">
                                                                        <div class="quantity">
                                                                            <span class="control-label">QTY : </span>
                                                                            <input type="text" name="quantity" id="quantity_wanted" value="1" class="input-group form-control">

                                                                            <span class="input-group-btn-vertical">
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                    +
                                                                                </button>
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                    -
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <span class="add">
                                                                            @if($product->quantity <= 0)
                                                                            <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="button" disabled title="Out of Stock">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                <span>Add to cart</span>
                                                                            </button>
                                                                            @else
                                                                            <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                <span>Add to cart</span>
                                                                            </button>
                                                                            @endif

                                                                            
                                                                            <a class="addToWishlist" href="{{url('/user/wishlist/'.$product->id)}}" >
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                        
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="product-minimal-quantity">
                                                            </p>
                                                        </div>
                                                        <div class="d-flex2 has-border">
                                                            <div class="btn-group">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-share"></i>
                                                                    <span>Share</span>
                                                                </a>
                                                                <a href="#" class="email">
                                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                    <span>SEN TO A FRIEND</span>
                                                                </a>
                                                                <a href="#" class="print">
                                                                    <i class="zmdi zmdi-print"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="rating-comment has-border d-flex">
                                                            <div class="review-description d-flex">
                                                                <span>REVIEW :</span>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="read after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-commenting-o color" aria-hidden="true"></i>
                                                                    <span>READ REVIEWS (3)</span>
                                                                </a>
                                                            </div>
                                                            <div class="apen after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-pencil color" aria-hidden="true"></i>
                                                                    <span>WRITE A REVIEW</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <p>SKU :
                                                                <span class="content2">
                                                                    <a href="#">{{$product->product_sku}}</a>
                                                                </span>
                                                            </p>
                                                            <p>Categories :
                                                                <span class="content2">
                                                                    <a href="#">{{$product->category_id}}</a>
                                                                </span>
                                                            </p>
                                                            <p>tags :
                                                                <span class="content2">
                                                                    <a href="#">{{$product->product_tag}}</a>
                                                                   
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
											
                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description" class="active show">Description</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tag">Product Tags</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#review">Reviews (2)</a>
                                                    </li>
                                                </ul>
												
                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <p>
                                                            {{$product->long_description}}
                                                        </p>
                                                        
                                                    </div>
													
                                                    <div id="review" class="tab-pane fade">
                                                        <div class="spr-form">
                                                            <div class="user-comment">
                                                                <div class="spr-review">
                                                                    <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>Peter Capidal</strong> -
                                                                            <span>Apr 14, 2018</span>
                                                                        </span>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                            eu. Proin massa justo, eleifend fermentum varius
                                                                            quis, semper gravida quam. Cras nec enim sed
                                                                            lacus viverra luctus. Nunc quis accumsan mauris.
                                                                            Aliquam fermentum sit amet est id scelerisque.
                                                                            Nam porta risus metus.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-review preview2">
                                                                    <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>David James</strong> -
                                                                            <span>Apr 13, 2018</span>
                                                                        </span>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                            eu. Proin massa justo, eleifend fermentum varius
                                                                            quis, semper gravida quam. Cras nec enim sed
                                                                            lacus viverra luctus. Nunc quis accumsan mauris.
                                                                            Aliquam fermentum sit amet est id scelerisque.
                                                                            Nam porta risus metus.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="#" class="new-review-form">
                                                            <input type="hidden" name="review[rating]" value="3">
                                                            <input type="hidden" name="product_id">
                                                            <h3 class="spr-form-title">Write a review</h3>
                                                            <fieldset>
                                                                <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Your Rating</label>
                                                                    <fieldset class="ratings">
                                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    </fieldset>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-contact">
                                                                <div class="spr-form-contact-name">
                                                                    <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Enter your name">
                                                                </div>
                                                                <div class="spr-form-contact-email">
                                                                    <input class="spr-form-input spr-form-input-email form-control" value="" placeholder="Enter your email">
                                                                </div>
                                                            </fieldset>
                                                            <fieldset>
                                                                <div class="spr-form-review-body">
                                                                    <div class="spr-form-input">
                                                                        <textarea class="spr-form-input-textarea" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="submit">
                                                                <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Submit Review">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tag" class="tab-pane fade in">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
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

@section('script')

<script>
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.sub-images');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            mainImage.src = thumbnail.src;
        });
    });

    const modalMainImage = document.getElementById('modal-image-main');
    const modalSubImages = document.querySelectorAll('.modal-sub-images');

    modalSubImages.forEach(modalsubimage => {
        modalsubimage.addEventListener('click', () => {
            modalMainImage.src = modalsubimage.src;
        });
    });
</script>

@endsection

