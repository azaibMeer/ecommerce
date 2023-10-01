<footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="tiva-html col-lg-4 col-md-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img src="/front_assets/img/home/logo.png" alt="img">
                                    </p>
                                    <p class="content-logo">
                                        {{$setting->description}}
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#">Meet the teaml</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact our buyers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <p class="img-payment ">
                                        Developed By : 
                                        <a href="#">
                                       {{$setting->developed_by}}
                                       </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-html col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="title-block">
                                    Contact Us
                                </div>
                                <div class="block-content">
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Address :</span>
                                        </div>
                                        <div class="content-contact address-contact">
                                            <p>{{$setting->address}}</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Email :</span>
                                        </div>
                                        <div class="content-contact mail-contact">
                                            <p>{{$setting->email}}</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Contact :</span>
                                        </div>
                                        <div class="content-contact phone-contact">
                                            <p>{{$setting->contact}}</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>Opening Hours :</span>
                                        </div>
                                        <div class="content-contact hours-contact">
                                            <p>{{$setting->opening_hours}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-modules col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="title-block">Newsletter</div>
                                    <div class="sub-title">
                                        {{$setting->newsletter_description}}
                                    </div>
                                    <div class="block-newsletter">
                                        <form id="form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email" id="subscribe_email">
                                                <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary " name="email" type="button" id="subscribe">
                                                        <span>subscribe</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <p id="result_output"></p>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="social-content">
                                        <div class="title-block">
                                            Follow us on
                                        </div>
                                        <div id="social-block">
                                            <div class="social">
                                                <ul class="list-inline mb-0 justify-content-end">
                                                    <li class="list-inline-item mb-0">
                                                        <a href="{{$setting->facebook_link}}" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="{{$setting->twitter_link}}" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="{{$setting->whatsapp_link}}" target="_blank">
                                                            <i class="fa fa-whatsapp"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="{{$setting->instagram_link}}" target="_blank">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="block m-top1">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="/front_assets/img/home/payment.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
@section('script')
<script>
$(document).ready(function(){
  $("#subscribe").click(function(){

    let subscribe = $("#subscribe_email").val();
    if(subscribe !== '')

            $.ajax({
              url: "{{url('/subscribe')}}",
              type: "POST",
              data: {
                  email: subscribe,
                  _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success : function(response){
                $('#result_output').text(response.message);
                $("#form")[0].reset();
              }
             });
    else
        $('#result_output').text("Please enter email");
  });
});
</script>
@endsection