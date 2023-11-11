@if(isset($best_sellers))
                           <div class="sidebar-block">
                              <div class="title-block">
                                 Best solds
                              </div>
                              <div class="product-content tab-content">
                                 <div class="row">

                                    @foreach($best_sellers as $item)
                                    @foreach($item->products as $product)
                                    <div class="item col-md-12">
                                       <div class="product-miniature item-one first-item d-flex">
                                          <div class="thumbnail-container border">
                                             <a href="{{url('/product/detail/'.$product->slug)}}">
                                             <img class="img-fluid" src="{{url($product->main_image)}}" alt="img">
                                             </a>
                                          </div>
                                          <div class="product-description">
                                             <div class="product-groups">
                                                <div class="product-title">
                                                   <a href="{{url('/product/detail/'.$product->slug)}}">{{$product->name}}</a>
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
                                                         {{$setting->currency}}
                                                         {{$product->price - $product->discount}}
                                                      </span>
                                                      <div class="text-warning mt-1">
                                                         Total : {{$item->total_quantity_sold}} sold
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                 </div>
                              </div>
                           </div>
                           @endif