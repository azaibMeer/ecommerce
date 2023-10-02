<aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="{{url($setting->logo_path)}}" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">{{$setting->website_name}}</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                            <img src="{{Auth::User()->profile}}" class="profile-image rounded-circle" 
                            alt="{{Auth::User()->name}}">
                            <div class="info-card-text">
                                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ucfirst(Auth::User()->name)}}
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm">
                                    {{ucfirst(Auth::User()->city)}}  
                                </span>
                            </div>
                            <img src="/backend_assets/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li class="{{ (request()->is('admin/dashboard')) ? 'active open' : '' }}">
                                <a href="{{url('/admin/dashboard')}}" title="Dashboard">
                                    <i class="fal fa-tachometer"></i>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('category/*')) ? 'active open' : '' }}">
                                <a href="{{url('/category/list')}}" title="Manage category">
                                    <i class="fal fa-list-alt"></i>
                                    <span class="nav-link-text">Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/product/add/')}}" title="Manage products">
                                    <i class="fal fa-edit"></i>
                                    <span class="nav-link-text">Product</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('slider/*')) ? 'active open' : '' }}">
                                <a href="{{url('/slider/list')}}" title="Sliders">
                                    <i class="fal fa-image"></i>
                                    <span class="nav-link-text">Sliders</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('user/*') || request()->is('users/*')) 
                                ? 'active open' : '' }}">
                                <a href="{{url('/users/list/')}}" title="Users">
                                    <i class="fal fa-user"></i>
                                    <span class="nav-link-text">Users</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('website/setting')) ? 'active open' : '' }}">
                                <a href="{{url('/website/setting')}}" title="Website settings">
                                    <i class="fal fa-cog"></i>
                                    <span class="nav-link-text">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </aside>