@php
    use App\Models\Checkout;
    if(Auth::User()){


    $items = Checkout::Join('products','products.id','checkout.product_id')
                ->select('products.name','products.slug','products.main_image','checkout.*')
                ->where('checkout.user_id',Auth::User()->id)->get();
   $total =  Checkout::where('user_id',Auth::User()->id)->sum('price');
  
   }
@endphp
<div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="{{url('/')}}">
                                <img class="img-fluid" src="{{url($setting->logo_path)}}" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="">
                                    <a href="{{url('/')}}" class="parent">Home</a>   
                                </li>
                                 <li>
                                    <a href="#" class="parent">Page</a>
                                </li>
                                <li class=" {{ request()->is('contact') ? 'active' : '' }}">
                                    <a href="{{url('/contact')}}" class="parent">
                                    Contact US
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                        <form method="get" action="#">
                            <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <!-- acount  -->
                        @if(Auth::User())
                            <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>{{Str::limit(Auth::User()->name,'10')}}</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a class="login" href="{{url('/user/account')}}" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="login" href="{{url('/user/profile')}}" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>Manage Profile</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{url('/user/order')}}" 
                                        title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Orders</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{url('/user/wishlist')}}" 
                                        title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlists</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{url('/user/logout')}}" title="Logout">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Account</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a href="{{url('/user/login')}}" title="Login">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Login</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{url('/user/register')}}" title="Register">
                                            <i class="fa fa-user"></i>
                                            <span>Register</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endif
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
                                                            <img src="{{$item->main_image}}" alt="Product">
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
            </div>
        </div>
