@extends('admin.layouts.master')
@section('content')
<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Category</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>

									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit</h1>
									<span class="h-20px border-gray-300 border-start mx-4"></span>
											<!--end::Separator-->
									<!--begin::Breadcrumb-->
									
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" 
								action="{{url('/category/update/'.$category->id)}}" method="post" enctype="multipart/form-data">
									@csrf
									<!--begin::Aside column-->
									<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
										<!--begin::Thumbnail settings-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Thumbnail</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body text-center pt-0">
												<!--begin::Image input-->
												<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{$category->image}}')">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-150px h-150px"></div>
													<!--end::Preview existing avatar-->
													<!--begin::Label-->
													<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
														<!--begin::Icon-->
														<i class="bi bi-pencil-fill fs-7"></i>
														<!--end::Icon-->
														<!--begin::Inputs-->
														<input type="file" name="image"/>
														<input type="hidden" name="" />
														<!--end::Inputs-->
													</label>
													<!--end::Label-->
													<!--begin::Cancel-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Cancel-->
													<!--begin::Remove-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Remove-->
												</div>
												<!--end::Image input-->
												<!--begin::Description-->
												@error('image')
														<div class=" fs-7 text-danger">{{$message}}</div>
												@enderror
												<div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Thumbnail settings-->
										<!--begin::Status-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Status</h2>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
												</div>
												<!--begin::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Select2-->
												<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select" name="status">
													<option></option>
													<option value="1" {{$category->status == 1 ? 'selected' : ''}}>Published</option>
													<option value="0" {{$category->status == 0 ? 'selected' : ''}}>Unpublished</option>
												</select>
												@error('status')
														<div class=" fs-7 text-danger">{{$message}}</div>
												@enderror
												<!--end::Select2-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the category status.</div>
												<!--end::Description-->
												<!--begin::Datepicker-->
												
												<!--end::Datepicker-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Status-->
										<!--begin::Template settings-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Store Template</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Select store template-->
												<label for="kt_ecommerce_add_category_store_template" class="form-label">Show On Home Page</label>
												<!--end::Select store template-->
												<!--begin::Select2-->
												<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_store_template"
												name="show_home_page">
													<option></option>
													<option value="1" {{$category->show_home_page == 1 ? 'selected' : ''}}>Yes</option>
													<option value="0" {{$category->show_home_page == 0 ? 'selected' : ''}}>No</option>
													
												</select>
												@error('show_home_page')
														<div class=" fs-7 text-danger">{{$message}}</div>
												@enderror
												<!--end::Select2-->
												<!--begin::Description-->
												
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Template settings-->
									</div>
									<!--end::Aside column-->
									<!--begin::Main column-->
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
													<!--begin::Label-->
													<label class="required form-label">Category Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="category_name" class="form-control mb-2" placeholder="Category name" value="{{$category->name}}" />
													<!--end::Input-->
													<!--begin::Description-->
													@error('category_name')
														<div class=" fs-7 text-danger">{{$message}}</div>
													@enderror
													
													<div class="text-muted fs-7">A category name is required and recommended to be unique.</div>

													<!--end::Description-->
												</div>

												<div class="mb-10 fv-row">
									                     <label class="required form-label">
									                     Sub Category
									                     </label>
									                     <select class="form-select" data-control="select2"  data-placeholder="Select an option"  name="sub_category">
									                        <option value="0" >None</option>
									                        @foreach($categories as $subcategory)
									                        <option value="{{$subcategory->id}}" {{$category->parent_id == $subcategory->id ? 'selected' : ''}}>{{$subcategory->name}}</option>
									                        @endforeach
									                     </select>
									             </div>
												@error('sub_category')
														<div class=" fs-7 text-danger">Must Select Sub category</div>
												@enderror
												<!--end::Input group-->
												<!--begin::Input group-->
												<div>
													<!--begin::Label-->
													<label class="form-label">Description</label>
													<!--end::Label-->
													<!--begin::Editor-->
													<div id="kt_ecommerce_add_category_description" name="description" class="min-h-200px mb-2">

													</div>
													<input type="hidden" name="product_descp">
													<!--end::Editor-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set a description to the category for better visibility.</div>
													<!--end::Description-->
												</div>


												<!--end::Input group-->
											</div>
											<!--end::Card header-->
										</div>
										<!--end::General options-->
										<!--begin::Meta options-->
										
										<!--end::Meta options-->
										<!--begin::Automation-->
										
										<!--end::Automation-->
										<div class="d-flex justify-content-end">
											<!--begin::Button-->
											<a href="{{url('/category/add')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="submit" class="btn btn-primary">
												<span class="indicator-label">Save Changes</span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Button-->
										</div>
									</div>
									<!--end::Main column-->
								</form>
							</div>
							<!--end::Container-->
						</div>

@endsection

@section('script')
<script src="{{url('/backend_assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
<script src="{{url('/backend_assets/js/custom/apps/ecommerce/catalog/save-category.js')}}"></script>
@endsection