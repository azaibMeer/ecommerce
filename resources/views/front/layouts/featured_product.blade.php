@if(count($featured_products) > 0)
<div class="section living-room background-none">
         <div class="container">
            <div class="tiva-row-wrap row">
               <div class="col-md-12 col-xs-12 groupcategoriestab-vertical">
                  <div class="grouptab">
                     <div class="title-product">
                        <h2>Featured Products</h2>
                        <p>Just For You</p>
                     </div>
                     <div class="product-tab categoriestab-left flex-9">
                        <div class="tab-content">
                           <div id="all" class="tab-pane fade in active show">
                              <div class="item text-center row">
                                 @foreach($featured_products as $featured_product)
                                 <div class="col-md-3 col-xs-12">
                                    <div class="product-miniature js-product-miniature item-one first-item">
                                       <div class="thumbnail-container border">
                                          <a href="{{url('/product/detail/'.$featured_product->slug)}}">
                                          <img class="img-fluid" src="{{$featured_product->main_image}}" alt="img">
                                          </a>
                                          {{--
                                          <div class="product-flags discount">
                                             {{$featured_product->discount_percentage}}
                                          </div>
                                          --}}
                                       </div>
                                       <div class="product-description">
                                          <div class="product-groups">
                                             <div class="product-title">
                                                <a href="{{url('/product/detail/'.$featured_product->slug)}}">
                                                {{ ucwords(Str::limit($featured_product->name, 50)) }}
                                                </a>
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
                                                   {{$setting->currency}} {{$featured_product->price - $featured_product->discount}}</span>
                                                   <del class="regular-price">{{$featured_product->price}}</del>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="product-buttons d-flex justify-content-center">
                                             <form action="{{url('/product/addtocart/'.$featured_product->id)}}" method="post" class="formAddToCart">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="price" value="{{$featured_product->price - $featured_product->discount}}">
                                                <button  class="add-to-cart" type="submit">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </button>
                                             </form>
                                             <a class="addToWishlist wishlistProd_1" href="{{url('/user/wishlist/'.$featured_product->id)}}" data-rel="1" onclick="">
                                             <i class="fa fa-heart" aria-hidden="true"></i>
                                             </a> 
                                             <a href="{{url('/product/detail/'.$featured_product->slug)}}" class="quick-view hidden-sm-down" data-link-action="quickview">
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