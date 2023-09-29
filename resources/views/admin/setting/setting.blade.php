@extends('admin.layouts.master')
@section('content')
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Website Settings
      </h1>
   </div>
   <div class="row">
      <div class="col-xl-6">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Settings
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Website Name
                           </label>
                           <input type="text" class="form-control" placeholder="Website name" name="name">
                        </div>
                        <div class="col">
                           <label class="form-label">Email</label>
                           <input type="email" class="form-control" placeholder="Website email" name="email">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Phone
                           </label>
                           <input type="phone" class="form-control" placeholder="Phone" name="phone">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Mobile
                           </label>
                           <input type="phone" class="form-control" placeholder="Mobile" name="mobile">
                        </div>
                        <div class="col">
                           <label class="form-label">Contact
                           </label>
                           <input type="phone" class="form-control" placeholder="Phone" name="phone">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Address
                           </label>
                           <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        <div class="col">
                           <label class="form-label">Opening Hours
                           </label>
                           <input type="text" class="form-control" placeholder="Opening hours" name="opening_hours">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Newsletter 
                           </label>
                           <input type="text" class="form-control" placeholder="Description" name="newsletter_description">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Currency
                           </label>
                           <input type="text" class="form-control" placeholder="Currency" name="currency">
                        </div>
                        <div class="col">
                           <label class="form-label">Shipping Charges
                           </label>
                           <input type="text" class="form-control" placeholder="Shipping charges" name="shipping_charges">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Facebook Link 
                           </label>
                           <input type="text" class="form-control" placeholder="Facebook link" name="facebook_link">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Whatsapp link
                           </label>
                           <input type="text" class="form-control" placeholder="Whatsapp link" name="whatsapp_link">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Twitter link
                           </label>
                           <input type="text" class="form-control" placeholder="Twitter link" name="twitter_link">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Instagram link
                           </label>
                           <input type="text" class="form-control" placeholder="Instagram link" name="instagram_link">
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">
                           Tiktok link
                           </label>
                           <input type="text" class="form-control" placeholder="Tiktok link" name="tiktok_link">
                        </div>
                        <div class="col">
                           <label class="form-label">
                           Developed by
                           </label>
                           <input type="text" class="form-control" placeholder="Developed by" readonly>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label" for="example-textarea">Website description
                        </label>
                        <textarea class="form-control" rows="2"></textarea>
                     </div>
                     <div class="form-row form-group">
                        <div class="col">
                           <label class="form-label">Website Logo</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="website_logo">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">Website Logo (Footer)</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="footer_logo">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                        </div>
                     </div>
                     <button type="button" class="btn btn-primary waves-effect waves-themed">Update settings</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection