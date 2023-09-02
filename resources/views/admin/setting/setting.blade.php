@extends('admin.layouts.master')
@section('content')
<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Website Setting</h1>
									<!--end::Title-->
									<!--begin::Separator-->
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
								<!--begin::Navbar-->
								@if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
								
								<!--end::Navbar-->
								<!--begin::Basic info-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">Website Details</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form" method="post" action="{{url('/update/setting/'.$setting->id)}}" enctype="multipart/form-data">
											@csrf
																						<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Website Logo</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-3">
														<!--begin::Image input-->
														<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{$setting->logo_path}}')"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																<i class="bi bi-pencil-fill fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="logo_path"  />
																<input type="hidden"  />
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
														<div class="text-danger form-text">
															@error('logo_path')
														{{$message}}
														@enderror
														</div>
														<!--end::Hint-->
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Footer Logo</label>
													<div class="col-lg-4">
														<!--begin::Image input-->
														<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{$setting->footer_logo}}')"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																<i class="bi bi-pencil-fill fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="footer_logo"  />
																<input type="hidden"  />
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
														<span class="text-danger form-text">
															@error('footer_logo')
														{{$message}}
														@enderror
														</span>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label required fw-bold fs-6">Website Name</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-10 fv-row">
														<input type="text" name="website_name" class="form-control form-control-lg form-control-solid" placeholder="Website name" value="{{$setting->website_name}}" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">
														<span class="required">Description</span>
														
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-10 fv-row">
														<input type="text" name="description" class="form-control form-control-lg form-control-solid" placeholder="Description" value="{{$setting->description}}" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Address</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-10 fv-row">
														<input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Address" value="{{$setting->address}}" />
													</div>
													<!--end::Col-->
												</div>
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Email</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{$setting->email}}" />
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Phone</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="number" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone" value="{{$setting->phone}}" />
														
													</div>
													
													<!--end::Col-->
												</div>
												
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Contact</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="number" name="contact" class="form-control form-control-lg form-control-solid" placeholder="Contact" value="{{$setting->contact}}" />
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Mobile</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="number" name="mobile" class="form-control form-control-lg form-control-solid" placeholder="Mobile" value="{{$setting->mobile}}" />
													</div>
													<!--end::Col-->
												</div>
												
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Opening hours</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="opening_hours" class="form-control form-control-lg form-control-solid" placeholder="Opening Hours" value="{{$setting->opening_hours}}" />
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Currency</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="currency" class="form-control form-control-lg form-control-solid" placeholder="Currency" value="{{$setting->currency}}" />
													</div>
													<!--end::Col-->
												</div>	
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Facebook Link</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="facebook_link" class="form-control form-control-lg form-control-solid" placeholder="Facebobk Link" value="{{$setting->facebook_link}}" />
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Whatsapp Link</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="whatsapp_link" class="form-control form-control-lg form-control-solid" placeholder="Whatsapp Link" value="{{$setting->whatsapp_link}}" />
													</div>
													<!--end::Col-->
												</div>
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Twitter Link</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="twitter_link" class="form-control form-control-lg form-control-solid" placeholder="Twitter Link" value="{{$setting->twitter_link}}" />
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Instagram Link</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="instagram_link" class="form-control form-control-lg form-control-solid" placeholder="Instagram Link" value="{{$setting->instagram_link}}" />
													</div>
													<!--end::Col-->
												</div>
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-2 col-form-label fw-bold fs-6">Tiktok Link</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="tiktok_link" class="form-control form-control-lg form-control-solid" placeholder="Tiktok Link" value="{{$setting->tiktok_link}}" />
													</div>

													<label class="col-lg-2 col-form-label fw-bold fs-6">Newsletter</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="text" name="newsletter_desc" class="form-control form-control-lg form-control-solid" placeholder="Instagram Link" value="{{$setting->instagram_link}}" />
													</div>
													<!--end::Col-->
												</div>
												
												<!--end::Input group-->
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Basic info-->
								<!--begin::Sign-in Method-->
								
								<!--end::Sign-in Method-->
								<!--begin::Connected Accounts-->
								
								<!--end::Connected Accounts-->
								<!--begin::Notifications-->
								
								<!--end::Notifications-->
								<!--begin::Notifications-->
								
								<!--end::Notifications-->
								<!--begin::Deactivate Account-->
								
								<!--end::Deactivate Account-->
								<!--begin::Modals-->
								<!--begin::Modal - Two-factor authentication-->
								
								<!--end::Modal - Two-factor authentication-->
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>

@endsection

