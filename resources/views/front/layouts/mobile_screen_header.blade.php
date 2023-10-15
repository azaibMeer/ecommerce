@php
    use App\Models\Checkout;
    if(Auth::User()){


    $items = Checkout::Join('products','products.id','checkout.product_id')
                ->select('products.name','products.slug','products.main_image','checkout.*')
                ->where('checkout.user_id',Auth::User()->id)->get();
   $total =  Checkout::where('user_id',Auth::User()->id)->sum('price');
  
   }
@endphp
<div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <!-- <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div> -->

                <!-- logo -->
                <div class="mobile-logo">
                 <a href="{{url('/')}}">
                    <img class="logo-mobile img-fluid" src="{{url($setting->logo_path)}}" alt="Prestashop_Furnitica">
                 </a>
                </div>

                <!-- menu right -->
                <!-- <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div> -->
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">
                        <input type="text" name="s" value="" placeholder="Search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    @if(Auth::User() && count($items) > 0)
                                    <span class="cart-products-count">{{count($items)}}</span>
                                    @endif
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                @if(Auth::User())
                                                @if(count($items) > 0)
                                                @foreach($items as $item)
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="{{url('/product/detail/'.$item->slug)}}">
                                                            <img src="{{$item->main_image}}" alt="{{$item->name}}">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="{{url('/product/detail/'.$item->slug)}}">{{Str::limit($item->name,50)}}</a>
                                                        </div>
                                                        <div>
                                                            {{$item->quantity}} x
                                                            <span class="product-price">{{$setting->currency}} {{$item->price / $item->quantity}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="{{url('/remove/cart/product/'.$item->id)}}">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <span>There Have No Item In your Cart</span>
                                                </tr>
                                                @endif
                                                @else
                                               <tr>
                                                    <span>Login To View Item In your Cart</span>
                                                </tr>
                                                @endif
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    @if(Auth::User())
                                                        <td>{{$setting->currency}} {{$total}}</td>
                                                    @else
                                                        <td>00</td>
                                                    @endif
                                                </tr>

                                                <tr>
                                                    <td colspan="3" class="d-flex">
                                                        <div class="cart-button">
                                                            <a href="{{url('/user/cart')}}" title="View Cart">View Cart</a>
                                                            @if(Auth::User() && count($items) > 0)
                                                            <a href="{{url('/user/checkout')}}" title="Checkout">Checkout</a>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
            </div>
        </div>