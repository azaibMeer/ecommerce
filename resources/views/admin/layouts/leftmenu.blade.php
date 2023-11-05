                    <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            @if(isset($setting->logo_path))
                            <img src="{{url($setting->logo_path)}}" alt="{{$setting->website_name}}">
                            @endif
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
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
                            <img src="{{url('/backend_assets/img/card-backgrounds/cover-2-lg.png')}}" class="cover" alt="cover">
                        </div>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li class="{{ (request()->is('admin/dashboard')) ? 'active open' : '' }}">
                                <a href="{{url('/admin/dashboard')}}" title="Dashboard">
                                    <i class="fal fa-home"></i>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('category/*')) ? 'active open' : '' }}">
                                <a href="{{url('/category/list/')}}" title="Manage category">
                                    <i class="fal fa-list-alt"></i>
                                    <span class="nav-link-text">Category</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('product/*')) ? 'active open' : '' }}">
                                <a href="{{url('/product/list/')}}" title="Manage products">
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
                            <li class="{{ (request()->is('order/*') || request()->is('orders/*')) 
                                ? 'active open' : '' }}">
                                <a href="{{url('/order/list/')}}" title="Order">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="nav-link-text">Orders</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('blog/*') || request()->is('blogs/*')) 
                                ? 'active open' : '' }}">
                                <a href="{{url('/blog/list/')}}" title="Blogs">
                                    <i class="fal fa-blog"></i>
                                    <span class="nav-link-text">Blogs</span>
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