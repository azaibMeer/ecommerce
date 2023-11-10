@extends('front.layouts.master')
@section('class', 'product-grid-sidebar-left')
@section('id', 'product-sidebar-left')
@section('content')

@if(count($search_result) > 0 )
<div class="main-content">
   <div id="wrapper-site">
      <div id="content-wrapper" class="full-width">
         <div id="main">
            <div class="page-home">
               <div class="container">
                  <div class="content">
                     <div class="row">
                        <div class="col-sm-8 col-lg-12 col-md-12 product-container">
                           <div class="js-product-list-top firt nav-top">
                              <div class="d-flex justify-content-around row">
                                 <div class="col col-xs-12">
                                    <ul class="nav nav-tabs">
                                       <li>
                                          <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                       </li>
                                       <li>
                                          <a href="#list" data-toggle="tab" class="fa fa-list-ul"></a>
                                       </li>
                                    </ul>
                                    <div class="hidden-sm-down total-products">
                                       <p>{{count($search_result)}} items found for 
                                        "{{$search ?? ''}}"</p>
                                    </div>
                                 </div>
                                 <div class="col col-xs-12">
                                    <div class="d-flex sort-by-row justify-content-lg-end justify-content-md-end">
                                       <div class="products-sort-order dropdown">
                                          <select class="select-title">
                                             <option value="">Sort by</option>
                                             <option value="">Name, A to Z</option>
                                             <option value="">Name, Z to A</option>
                                             <option value="">Price, low to high</option>
                                             <option value="">Price, high to low</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                         
                           <div class="tab-content product-items">
                              <div id="grid" class="related tab-pane fade in active show">
                                 <div class="row">
                                    @foreach($search_result as $item)
                                    <div class="item text-center col-md-3">
                                       <div class="product-miniature js-product-miniature item-one first-item">
                                          <div class="thumbnail-container border">
                                             <a href="{{url('/product/detail/'.$item->slug)}}">
                                             <img class="img-fluid" src="{{url($item->main_image)}}" alt="img">
                                             </a>
                                             
                                          </div>
                                          <div class="product-description">
                                             <div class="product-groups">
                                                <div class="product-title">
                                                   <a href="{{url('/product/detail/'.$item->slug)}}">{{$item->name}}</a>
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
                                                      <span class="price">{{$setting->currency}} {{$item->price}}</span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="product-buttons d-flex justify-content-center">
                                                <form action="{{url('/product/addtocart/'.$item->id)}}" method="post" class="formAddToCart">
                                                   @csrf
                                                    <input type="hidden" name="quantity" value="1">
                                                      <input type="hidden" name="price" value="{{$item->price - $item->discount}}">
                                                      @if($item->quantity > 0)
                                                   <button class="add-to-cart"  type="submit">
                                                   <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                   </button>
                                                   @endif
                                                </form>
                                                <a class="addToWishlist" href="JavaScript:Void(0)" data-id="{{$item->id}}">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('/product/detail/'.$item->slug)}}" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              <div id="list" class="related tab-pane fade">
                                 <div class="row">
                                    @foreach($search_result as $item)
                                    <div class="item col-md-12">
                                       <div class="product-miniature item-one first-item">
                                          <div class="row">
                                             <div class="col-md-2">
                                                <div class="thumbnail-container border">
                                                   <a href="{{url('/product/detail/'.$item->slug)}}">
                                                   <img class="img-fluid " src="{{url($item->main_image)}}" alt="img">
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col-md-8">
                                                <div class="product-description">
                                                   <div class="product-groups">
                                                      <div class="product-title">
                                                         <a href="{{url('/product/detail/'.$item->slug)}}">{{$item->name}}</a>
                                                         <span class="info-stock">
                                                         
                                                        @if($item->quantity >  0)
                                                         <span class="check">
                                                         <i class="fa fa-check-square-o" aria-hidden="true"></i>IN STOCK
                                                         </span>
                                                         @else
                                                         <span class=" text-danger">
                                                         <i class="fa fa-check-square-o " aria-hidden="true"></i>OUT OF STOCK
                                                         </span>
                                                         @endif
                                                         </span>
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
                                                            <span class="price">{{$setting->currency}} {{$item->price}}</span>
                                                         </div>
                                                      </div>
                                                      <div class="discription">
                                                         {{$item->short_description}}
                                                      </div>
                                                   </div>
                                                   <div class="product-buttons d-flex">
                                                      <form action="{{url('/product/addtocart/'.$item->id)}}" method="post" class="formAddToCart">
                                                         @csrf
                                                      <input type="hidden" name="quantity" value="1">
                                                      <input type="hidden" name="price" value="{{$item->price - $item->discount}}">
                                                      @if($item->quantity > 0)
                                                      <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                      <span>Add to cart</span>
                                                      </button>
                                                      @endif>
                                                      </form>
                                                      <a class="addToWishlist" href="JavaScript:Void(0)" data-id="{{$item->id}}" >
                                                      <i class="fa fa-heart" aria-hidden="true"></i>
                                                      </a>
                                                      <a href="{{url('/product/detail/'.$item->slug)}}" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                      <i class="fa fa-eye" aria-hidden="true"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                           </div>
                           
                           <!-- pagination -->
                           <div class="pagination">
                              <div class="js-product-list-top ">
                                 <div class="d-flex justify-content-around row">
                                    <div class="showing col col-xs-12">
                                       <span>SHOWING 1-3 OF 3 ITEM(S)</span>
                                    </div>
                                    <div class="page-list col col-xs-12">
                                       <ul>
                                          <li>
                                             <a rel="prev" href="#" class="previous disabled js-search-link">
                                             Previous
                                             </a>
                                          </li>
                                          <li class="current active">
                                             <a rel="nofollow" href="#" class="disabled js-search-link">
                                             1
                                             </a>
                                          </li>
                                          <li>
                                             <a rel="nofollow" href="#" class="disabled js-search-link">
                                             2
                                             </a>
                                          </li>
                                          <li>
                                             <a rel="nofollow" href="#" class="disabled js-search-link">
                                             3
                                             </a>
                                          </li>
                                          <li>
                                             <a rel="next" href="#" class="next disabled js-search-link">
                                             Next
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-md-9-1 -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@else
<div class="mt-5">
   <h2 class="mt-5 mb-3 text-center"><i class="fa fa-search"></i> Search No Result</h2>
   <p class="text-center">We're sorry. We cannot find any matches for your search term.</p>
   <p class="mt-0 mb-5 text-center">{{count($search_result)}} item found for "{{$search}}"</p>
</div>
@endif
@endsection
@section('script')
@include('scripts.wishlist_js')
@endsection