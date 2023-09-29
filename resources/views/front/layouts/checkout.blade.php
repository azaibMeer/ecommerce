@extends('front.master')
@section('content')
@section('class', 'product-checkout checkout-cart')

<div id="checkout" class="main-content">
        <div class="wrap-banner">
            <div id="wrapper-site">
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <div id="main">
                                <div class="cart-grid row">
                                    <div class="col-md-9 check-info">
                                        <div class="checkout-personal-step">
                                            <h3 class="step-title h3 info">
                                                BILLING DETAIL AND SHIPPING ADDRESS
                                            </h3>
                                        </div>
                                        <div class="content">
                                            
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active show" id="checkout-guest-form" role="tabpanel">
                                                    <form action="{{url('/place/order')}}" id="customer-form" class="js-customer-form" method="post">
                                                        @csrf
                                                        <div>
                                                            <input type="hidden" name="id_customer" value="{{Auth::User()->id}}">
                                                            <div class="form-group row">
                                                                <input class="form-control" name="firstname" type="text" placeholder="Full name" value="{{Auth::User()->name}}">
                                                            </div>
                                                            <div class="form-group row">
                                                                <input class="form-control" name="email" type="email" placeholder="Email" value="{{Auth::User()->email}}">
                                                            </div>
                                                            <div class="form-group row">
                                                                <input class="form-control" name="email" type="email" placeholder="Phone" value="{{Auth::User()->phone}}">
                                                            </div>
                                                            <div class="form-group row">
                                                                <input class="form-control" name="address" type="text" placeholder="Phone" value="{{Auth::User()->address}}">
                                                            </div>

                                                        </div>
                                                        <div class="clearfix">
                                                            <div class="row">
                                                                <input type="hidden" name="submitCreate" value="1">

                                                                <button class="continue btn btn-primary pull-xs-right" name="continue" data-link-action="register-new-customer" type="submit"
                                                                    value="1">
                                                                    Continue
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="checkout-personal-step">
                                            <h3 class="step-title h3">
                                                <span class="step-number">2</span>Addresses
                                            </h3>
                                        </div>
                                        <div class="checkout-personal-step">
                                            <h3 class="step-title h3">
                                                <span class="step-number">3</span>Shipping Method
                                            </h3>
                                        </div>
                                        <div class="checkout-personal-step">
                                            <h3 class="step-title h3">
                                                <span class="step-number">4</span>Payment
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="cart-grid-right col-xs-12 col-lg-3">
                <div class="cart-summary">
                  <div class="cart-detailed-totals">
                    <div class="cart-summary-products">
                      <div class="summary-label">There are {{count($items)}} item in your cart</div>
                    </div>
                    <div class="cart-summary-line" id="cart-subtotal-products">
                      <span class="label js-subtotal">
                      Sub Total :
                      </span>
                      <span class="value"> {{$setting->currency}} {{$total}}</span>
                    </div>
                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                      <span class="label">
                    Shipping:
                      </span>
                      <span class="value">{{$setting->shipping_charges}}</span>
                      <div>
                        <small class="value"></small>
                      </div>
                    </div>
                    <div class="cart-summary-line cart-total">
                      <span class="label">Total:</span>
                      @if(empty($total))
                      <span class="value">{{$setting->currency}} {{$total}}</span>
                      @else
                      <span class="value">{{$setting->currency}} {{$total + $setting->shipping_charges}}</span>
                      @endif
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <button class="btn btn-success btn-sm" type="submit" onclick="submit()">
                        
                        Placed Order </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="block-reassurance">
                  <ul>
                    <li>
                      <div class="block-reassurance-item">
                        <img src="/front_assets/img/product/check1.png" alt="Security policy (edit with Customer reassurance module)">
                        <span>Security policy (edit with Customer reassurance module)</span>
                      </div>
                    </li>
                    <li>
                      <div class="block-reassurance-item">
                        <img src="/front_assets/img/product/check2.png" alt="Delivery policy (edit with Customer reassurance module)">
                        <span>Delivery policy (edit with Customer reassurance module)</span>
                      </div>
                    </li>
                    <li>
                      <div class="block-reassurance-item">
                        <img src="/front_assets/img/product/check3.png" alt="Return policy (edit with Customer reassurance module)">
                        <span>Return policy (edit with Customer reassurance module)</span>
                      </div>
                    </li>
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
@endsection
<script>
    
    function submit(){
        document.getElementById("customer-form").submit();
    }
</script>
   
   
