@extends('admin.layouts.master')
@section('content')

<div class="toolbar" id="kt_toolbar">
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Slider</h1>
            <span class="h-20px border-gray-300 border-start mx-4"></span>
            
         </div>
         <!-- <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{url('/admin/slider/list')}}" class="btn btn-sm btn-primary" >Slider List</a>
         </div> -->
      </div>
   </div>
   <div class="post d-flex flex-column-fluid" id="kt_post">
      <div id="kt_content_container" class="container-xxl">
      			@if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
         <form action="{{url('/slider/store/')}}" method="post" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" 
            enctype="multipart/form-data"  >
            @csrf
           <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
               <div class="card card-flush py-4">
                  <div class="card-header">
                     <div class="card-title">
                        <h2>Slider Image</h2>
                     </div>
                  </div>
                  <div class="card-body text-center pt-0">
                     <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(/backend_assets/media/svg/files/blank-image.svg)">
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <input type="file" 
                           name="image"  accept=".png, .jpg, .jpeg"  />
                        </label>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                        </span>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                        </span>
                        
                     </div>

                     <div class="text-muted fs-7">Set the Slider image.Image should be 1920 x 1010 px</div>
                     <span class="text-danger">
                     	@error('image')
                     	{{$message}}
                     	@enderror
                     </span>
                  </div>
               </div>
               <div class="card card-flush py-4">
                  <div class="card-header">
                     <div class="card-title">
                        <h2>Status</h2>
                     </div>
                  </div>
                  <div class="card-body pt-0">
                     <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select" name="status" required>
                       
                        <option value="1" selected="selected">Active</option>
                        <option value="0">Inactive</option>
                     </select>
                     
                    </div>
               </div>
              </div>
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
               <!--begin::General options-->
               <div class="card card-flush py-4">
                  <!--begin::Card header-->
                  <div class="card-header">
                     <div class="card-title">
                        <h2>General</h2>
                     </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Input group-->
                  <div class="mb-10 fv-row">
                     <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="required form-label">Slider Title</label>
                                 <input type="text" name="slider_title" class="form-control mb-2" placeholder="title" value=""  />
                                 <span class="text-danger">
			                     	@error('slider_title')
			                     	{{$message}}
			                     	@enderror
			                     </span>
                            </div>
                        </div>
                        
                    </div>
                 </div>
                 <div class="mb-10 fv-row">
                     <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="required form-label">Slider Link</label>
                                 <input type="text" name="slider_link" class="form-control mb-2" placeholder="link" value=""  />
                            </div>
                        </div>
                        
                    </div>
                 </div>
                 
                <div class="mb-10 fv-row">
                   <div class="row clearfix">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                         <div class="form-group">
                            <label class="required form-label"> Description</label>
                            <textarea class="form-control mb-2" name="description" placeholder="Enter your description" rows="4"></textarea>
                         </div>
                      </div>
                   </div>
              </div>
               <div class="d-flex justify-content-end">
                  <!--begin::Button-->
                  <a href="" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                  <!--end::Button-->
                  <!--begin::Button-->
                  <button type="submit"  class="btn btn-primary btn-sm">
                  <span class="indicator-label">Add Slider</span>
                  </button>
                  <!--end::Button-->
               </div>
               </div>
                  <!--end::Card header-->
            </div> 
            </div>
         </form>
      </div>
   </div>
@endsection