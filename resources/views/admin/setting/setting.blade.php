@extends('admin.layouts.master')
@section('content')
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Website Settings
      </h1>
   </div>
   @if(session()->has('message'))
   <div class="alert alert-success" role="alert">
    <strong>Settings</strong> updated success
   </div>
   @elseif(session()->has('error'))
   <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong>Change a few things up and try submitting again.
   </div>
   @endif
   <div class="row">
      <div class="col-xl-6">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Settings
               </h2>
            </div>
            @if(isset($setting))
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/update/setting/'.$setting->id)}}" 
                  	enctype="multipart/form-data">
                  	@csrf
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Website Name
                           </label>
                           <input type="text" class="form-control" placeholder="Website name" name="website_name" value="{{$setting->website_name}}">
                           @error('website_name')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <label class="form-label">Email</label>
                           <input type="email" class="form-control" placeholder="Website email" name="email" 
                           value="{{$setting->email}}">
                           @error('email')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Phone
                           </label>
                           <input type="number" class="form-control" placeholder="Phone" name="phone"
                           value="{{$setting->phone}}" >
                            @error('phone')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Mobile
                           </label>
                           <input type="number" class="form-control" placeholder="Mobile" name="mobile"
                           value="{{$setting->mobile}}" >
                           @error('mobile')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="col">
                           <label class="form-label">Contact
                           </label>
                           <input type="number" class="form-control" placeholder="Phone" name="contact" 
                           value="{{$setting->contact}}">
                            @error('contact')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Address
                           </label>
                           <input type="text" class="form-control" placeholder="Address" name="address" 
                           value="{{$setting->address}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Opening Hours
                           </label>
                           <input type="text" class="form-control" placeholder="Opening hours" name="opening_hours" value="{{$setting->opening_hours}}">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Newsletter 
                           </label>
                           <input type="text" class="form-control" placeholder="Description" 
                           name="newsletter_desc" value="{{$setting->newsletter_description}}">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Currency
                           </label>
                           <input type="text" class="form-control" placeholder="Currency" name="currency" value="{{$setting->currency}}">
                        </div>
                        <div class="col">
                           <label class="form-label">Shipping Charges
                           </label>
                           <input type="text" class="form-control" placeholder="Shipping charges" name="shipping_charges" value="{{$setting->shipping_charges}}">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Facebook Link 
                           </label>
                           <input type="text" class="form-control" placeholder="Facebook link" name="facebook_link" value="{{$setting->facebook_link}}">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Whatsapp link
                           </label>
                           <input type="text" class="form-control" placeholder="Whatsapp link" name="whatsapp_link" value="{{$setting->whatsapp_link}}">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Twitter link
                           </label>
                           <input type="text" class="form-control" placeholder="Twitter link" name="twitter_link"
                            value="{{$setting->twitter_link}}" >
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Instagram link
                           </label>
                           <input type="text" class="form-control" placeholder="Instagram link" name="instagram_link" value="{{$setting->instagram_link}}">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Tiktok link
                           </label>
                           <input type="text" class="form-control" placeholder="Tiktok link" name="tiktok_link" value="{{$setting->tiktok_link}}">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Developed by
                           </label>
                           <input type="text" class="form-control" placeholder="Developed by" value="{{$setting->developed_by}}" readonly>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label" for="example-textarea">Website description
                        </label>
                        <textarea class="form-control" rows="2" name="description">{{$setting->description}}
                        </textarea>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Website Logo</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="logo_path">
                              <label class="custom-file-label">Choose file</label>
                              <span class="help-block">
                                  Image should be 127 by 24 px
                              </span>
                              @if(isset($setting->logo_path))
	                             <div>
	                              	<img src="{{url($setting->logo_path)}}">
	                             </div>
                              @endif
                              @error('logo_path')
                              	<span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">Website Logo (Footer)</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="footer_logo">
                              <label class="custom-file-label">Choose file</label>
                              <span class="help-block">
                                  Image should be 127 by 24 px
                              </span>
                              @if(isset($setting->footer_logo))
	                              <div>
	                              	<img src="{{url($setting->footer_logo)}}">
	                              </div>
                              @endif
                              @error('footer_logo')
                              	<span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                     Update settings</button>
                  </form>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
</main>
@endsection