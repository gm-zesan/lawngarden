<header>
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <p><i class="fa fa-phone"></i>+880 192 132 4091</p>
                    <p><i class="fa fa-envelope"></i>gmzesan7767@gmail.com</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 text-end">
                    <a href="{{ route('donation') }}" class="top_btn">Donate Now</a>
                    <div class="social_icons">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom home1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-xl-3">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('website/assets/images/logo.png') }}" alt="img" style="height: 120px"/></a>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-6 text-end">
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">About</a></li>
                            <li><a href="{{ route('all-projects') }}" class="{{ Route::is('all-projects') ? 'active' : '' }}">Our Projects</a></li>
                            <li><a href="{{ route('all-products') }}" class="{{ Route::is('all-products') ? 'active' : '' }}">Store</a></li>
                            <li><a href="{{ route('blog') }}" class="{{ Route::is('blog') ? 'active' : '' }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
                        </ul>
                        
                    </nav>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 responsive_center ms-auto">
                    <div class="cart_info">
                        <a href="{{ route('show-cart') }}"><img src="{{ asset('website/assets/images/cart.png') }}" alt="img" />
                            @php
                                $count = count(ShoppingCart::all());
                            @endphp
                            @if($count > 0)
                                <span>{{ $count }}</span>
                            @endif
                        </a>
                        @if (Session::get('customer_id'))
                            <a href="{{ route('customer.profile') }}" class="account_info">My Account</a>
                        @else
                            <a href="{{ route('customer.login') }}" class="account_info">Sign in / Sign up</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Header-->
<!--Responsive Nav-->
<div class="responsive_button">
    <p>Home</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class=""><i class="fa fa-bars"></i></span>
    </button>
</div>
<div class="responsive_nav collapse navbar-collapse" id="navbarToggleExternalContent">
    <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('all-projects') }}" class="{{ Route::is('all-projects') ? 'active' : '' }}">Our Projects</a></li>
        <li><a href="{{ route('all-products') }}" class="{{ Route::is('all-products') ? 'active' : '' }}">Store</a></li>
        <li><a href="{{ route('blog') }}" class="{{ Route::is('blog') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
</div>