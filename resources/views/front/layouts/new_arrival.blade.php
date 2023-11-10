@if(count($new_arrivals) > 0)
<div id="home3">
   <div class="section product-living-room">
      <div class="container">
         <div class="row">
            <div class="new-arrivals product-tab col">
               <div class="tab-content">
                  <div class="title-tab-content product-tab justify-content-between">
                     <div class="title-product">
                        <h2>NEW ARRIVALS</h2>
                        {{--<p>LOREM IPSUM DOLOR SIT AMET CONSECTETUR </p>--}}
                     </div>
                  </div>
                  <div class="tab-content">
                     <div id="new" class="tab-pane fade in active show">
                        <div class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                            @foreach($new_arrivals as $item)
                           <div class="item text-center">
                              <div class="product-miniature js-product-miniature item-one first-item">
                                 <div class="thumbnail-container">
                                    <a href="{{url('/product/detail/'.$item->slug)}}">
                                    <img class="img-fluid" src="{{url($item->main_image)}}" alt="img">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <div class="product-groups">
                                       <div class="product-title">
                                          <a href="{{url('/product/detail/'.$item->slug)}}">
                                            {{$item->name}}</a>
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
                                             <span class="price">
                                               {{$setting->currency}} {{$item->price - $item->discount}}</span>
                                               <del class="regular-price">
                                                {{$setting->currency}} {{$item->price}}</del>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-buttons d-flex justify-content-center">
                                       {{--<form action="#" method="post" class="formAddToCart">
                                          <input type="hidden" name="token">
                                          <input type="hidden" name="id_product" value="1">
                                          <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                          </a>
                                       </form>--}}
                                       <a class="addToWishlist" href="JavaScript:Void(0)" data-id="{{$item->id}}">
                                       <i class="fa fa-heart" aria-hidden="true"></i>
                                       </a>
                                       <a href="{{url('/product/detail/'.$item->slug)}}" 
                                        class="quick-view hidden-sm-down" data-link-action="quickview">
                                       <i class="fa fa-eye" aria-hidden="true"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endif
@section('script')
@include('scripts.wishlist_js')
@endsection