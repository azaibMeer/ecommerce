@extends('front.master')
@section('class', 'blog')
@section('id', 'contact')
@section('content')
<div class="main-content">
   <div id="wrapper-site">
      <div id="content-wrapper">
         <div id="main">
            <div class="page-home">
               <div class="container">
                  <h1 class="text-center title-page">Contact Us</h1>
                  <div class="row-inhert">
                     <div class="header-contact">
                        <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-4">
                              <div class="item d-flex">
                                 <div class="item-left">
                                    <div class="icon">
                                       <i class="zmdi zmdi-email"></i>
                                    </div>
                                 </div>
                                 <div class="item-right d-flex">
                                    <div class="title">Email:</div>
                                    <div class="contact-content">
                                       <a href="#">{{$setting->email}}</a>
                                       <br>
                                       <a href="#">
                                       {{$setting->email}}
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-4">
                              <div class="item d-flex">
                                 <div class="item-left">
                                    <div class="icon">
                                       <i class="zmdi zmdi-home"></i>
                                    </div>
                                 </div>
                                 <div class="item-right d-flex">
                                    <div class="title">Address:</div>
                                    <div class="contact-content">
                                       {{$setting->address}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-4">
                              <div class="item d-flex justify-content-end  last">
                                 <div class="item-left">
                                    <div class="icon">
                                       <i class="zmdi zmdi-phone"></i>
                                    </div>
                                 </div>
                                 <div class="item-right d-flex">
                                    <div class="title">Contact:</div>
                                    <div class="contact-content">
                                       {{$setting->contact}}
                                       <br>{{$setting->phone}}
                                       <br>{{$setting->mobile}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="input-contact">
                                 <h4 class="icon text-center">
                                    Feel Free To Contact Us .
                                 </h4>
                                 <h6 id="msg" class="text-center"></h6>
                                 <div class="d-flex justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                       <div class="contact-form">
                                          <form action="#" id="contactus-form">
                                             <div class="form-fields">
                                                <div class="form-group row">
                                                   <div class="col-md-6">
                                                      <input class="form-control" name="name" placeholder="Your name" id="name">
                                                   </div>
                                                   <div class="col-md-6 margin-bottom-mobie">
                                                      <input class="form-control" name="from" type="email" value="" placeholder="Your email" id="email">
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <div class="col-md-12 margin-bottom-mobie">
                                                      <input class="form-control" name="from" type="text" value="" placeholder="Subject" id="subject">
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <div class="col-md-12">
                                                      <textarea class="form-control" name="message" placeholder="Message" rows="8" id="message"></textarea>
                                                   </div>
                                                </div>
                                             </div>
                                             <div>
                                                <button class="btn" type="button"
                                                   id="contactus">
                                                <img class="img-fl" src="/front_assets/img/other/contact_email.png" alt="img">Send message
                                                </button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="contact-map">
                                 <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3785754726428!2d105.78134315594316!3d21.01753304734255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ab43c0c4db%3A0xdb6effebd6991106!2sKeangnam+Hanoi+Landmark+Tower!5e0!3m2!1svi!2s!4v1530175498947" allowfullscreen></iframe>
                                 </div>
                              </div>
                           </div> -->
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
   <script src="/front_assets/libs/jquery/jquery.min.js"></script>
   <script>
   $(document).ready(function(){
     $("#contactus").click(function(){
       //alert();
       let name = $("#name").val();
       let email = $("#email").val();
       let subject = $("#subject").val();
       let message = $("#message").val();
   
       if(email !== '' && subject !== '' && message !== '')
   
               $.ajax({
                 url: "{{url('/store/contact')}}",
                 type: "POST",
                 data: {
                     name: name,
                     email: email,
                     subject: subject,
                     message: message,
                     _token: '{{csrf_token()}}'
                 },
                 dataType: 'json',
                 success : function(response){
                   $('#msg').text(response.message);
                   $("#contactus-form")[0].reset();
                 }
                });
       else
           $('#msg').text("Please Filled Properly");
     });
   });
</script>
