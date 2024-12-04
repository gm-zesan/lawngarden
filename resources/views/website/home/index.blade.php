@extends('website.master')

@section('title')
    Home
@endsection

@section('body')
    <!--Start Slider-->
    <div class="main_slider owl-carousel owl-theme seaction_margin">
        <div class="item">
            <img src="{{ asset('website/assets/images/custom/main_slider.jpg') }}" alt="img" />
            <div class="slide_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3>Using the latest technologies in landscaping</h3>
                            <h1>We are the best lawn care <br />
                                maintenance company </h1>
                            <a href="{{ route('about') }}" class="button">Learn More</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('website/assets/images/custom/main_slider2.jpg') }}" alt="img" />
            <div class="slide_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3>Using the latest technologies in landscaping</h3>
                            <h1>We are the best lawn care <br />
                                maintenance companies</h1>
                            <a href="{{ route('about') }}" class="button">Learn More</a> <a
                                href="https://themeforest.net/item/lawnexpress-lawn-mowing-gardening-landscaping-farming-and-florist-html5-responsive-template/20212910?s_rank=1"
                                class="button">purchase theme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('website/assets/images/custom/main_slider3.jpg') }}" alt="img" />
            <div class="slide_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3>Using the latest technologies in landscaping</h3>
                            <h1>We are the best lawn care <br />
                                maintenance companies</h1>
                            <a href="{{ route('about') }}" class="button">Learn More</a> <a
                                href="https://themeforest.net/item/lawnexpress-lawn-mowing-gardening-landscaping-farming-and-florist-html5-responsive-template/20212910?s_rank=1"
                                class="button">purchase theme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Slider-->
    <!--Start About-->
    <div class="about seaction_margin">
        <div class="container">
            <div class="heading_wrap animated fades">
                <div class="icon_bar"></div>
                <h2 class="heading_a">About <span>Lawn express</span></h2>
                <h5 class="heading_small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed ipsum eiusmod
                    tempor <br />
                    incididunt utsmat labore et dolore magna aliqua.
                </h5>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="icon_box animated fades">
                        <img src="{{ asset('website/assets/images/icons/top_icon1.png') }}" alt="img" />
                        <h4>Cerfified Workers</h4>
                    </div>
                    <div class="icon_box animated fades">
                        <img src="{{ asset('website/assets/images/icons/top_icon3.png') }}" alt="img" />
                        <h4>Honest & Realiable</h4>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 content about_content animated fades">
                    <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed laboret
                        dolore magna aliquat enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. </p>
                    <p>Duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nula pariatur.
                        Excepteur sint occaecat cupidatat non proidentera sunt culpa officia deserunt mollit anim est
                        laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium totam rem aperiam ipsa.</p>
                    <a href="#" class="button brdr">What we offers</a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="icon_box animated fades">
                        <img src="{{ asset('website/assets/images/icons/top_icon2.png') }}" alt="img" />
                        <h4>10+ Years Expertise</h4>
                    </div>
                    <div class="icon_box animated fades">
                        <img src="{{ asset('website/assets/images/icons/top_icon4.png') }}" alt="img" />
                        <h4>24h Free Helpline</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About-->
    <!--Start Services-->
    <div class="services_wrap seaction_margin">
        <div class="container">
            <div class="heading_wrap animated slide">
                <div class="icon_bar"></div>
                <h2 class="heading_a">Our <span>Services</span></h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 animated slide">
                    <div class="service">
                        <img src="{{ asset('website/assets/images/custom/home_services.jpg') }}" alt="img" />
                        <div class="service_content">
                            <div class="row">
                                <div class="col-sm-2 col-md-2 icon">
                                    <img src="{{ asset('website/assets/images/icons/icon1.png') }}" class="icon_one"
                                        alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh1.png') }}"
                                        class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Landscape Caring</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animated slide">
                    <div class="service">
                        <img src="{{ asset('website/assets/images/custom/home_services.jpg') }}" alt="img" />
                        <div class="service_content">
                            <div class="row">
                                <div class="col-sm-2 col-md-2 icon">
                                    <img src="{{ asset('website/assets/images/icons/icon2.png') }}" class="icon_one"
                                        alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh2.png') }}"
                                        class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Watering Gardens</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animated slide">
                    <div class="service">
                        <img src="{{ asset('website/assets/images/custom/home_services.jpg') }}" alt="img" />
                        <div class="service_content">
                            <div class="row">
                                <div class="col-sm-2 col-md-2 icon">
                                    <img src="{{ asset('website/assets/images/icons/icon3.png') }}" class="icon_one"
                                        alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh3.png') }}"
                                        class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>New Trees Planting</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animated slide">
                    <div class="service">
                        <img src="{{ asset('website/assets/images/custom/home_services.jpg') }}" alt="img" />
                        <div class="service_content">
                            <div class="row">
                                <div class="col-sm-2 col-md-2 icon">
                                    <img src="{{ asset('website/assets/images/icons/icon4.png') }}" class="icon_one"
                                        alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh4.png') }}"
                                        class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Rubbbish Cleanup</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animated slide">
                    <div class="service">
                        <img src="{{ asset('website/assets/images/custom/home_services.jpg') }}" alt="img" />
                        <div class="service_content">
                            <div class="row">
                                <div class="col-sm-2 col-md-2 icon">
                                    <img src="{{ asset('website/assets/images/icons/icon5.png') }}" class="icon_one"
                                        alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh5.png') }}"
                                        class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Lawn Moving</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animated slide">
                    <div class="service">
                        <img src="{{ asset('website/assets/images/custom/home_services.jpg') }}" alt="img" />
                        <div class="service_content">
                            <div class="row">
                                <div class="col-sm-2 col-md-2 icon">
                                    <img src="{{ asset('website/assets/images/icons/icon6.png') }}" class="icon_one"
                                        alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh6.png') }}"
                                        class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Design & Planning</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Services-->
    <!--Start News -->
    <div class="news_wrap seaction_margin">
        <div class="container">
            <div class="heading_wrap">
                <div class="icon_bar"></div>
                <h2 class="heading_a">Our <span>News blog</span></h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}">
                                </a>
                                <span
                                    class="date">{{ $blog->created_at->format('d') }}<cite>{{ $blog->created_at->format('F') }}</cite></span>
                            </figure>
                            <div class="content">
                                <h5>{{ $blog->createdBy->name }}</h5>
                                <h3><a href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                </h3>
                                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--End News -->
    <!--Start Tools -->
    <div class="tools_wrap seaction_margin">
        <div class="container">
            <div class="heading_wrap animated slide">
                <div class="icon_bar"></div>
                <h2 class="heading_a">shop <span>lawn tools</span></h2>
                <h5 class="heading_small">We recommend some very useful garden & lawn related tools you can buy online
                </h5>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-12 col-md-3 animated slide res_mrg">
                        <div class="tool">
                            <figure>
                                <a href="{{ route('product-detail', ['id' => $product->id]) }}"><img
                                        src="{{ asset($product->image) }}" alt="img" /></a>
                            </figure>
                            <div class="detail">
                                <h5><a
                                        href="{{ route('product-detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </h5>
                                <span class="prc">৳. {{ $product->selling_price }}</span>
                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="qty" class="form-control" value="1"
                                        min="1">
                                    <button type="submit"><i class="fa fa-shopping-basket"></i> add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--End Tools -->
    <!--Start Quote-->
    <div class="qoute_wrap seaction_margin  animated entrance">
        <div class="layer">
            <div class="container">
                <div class="qoute">
                    <div class="heading_wrap">
                        <div class="icon_bar"></div>
                        <h2 class="heading_a">Get Instant Quote</h2>
                    </div>
                    <div class="row text-center gy-3">
                        <div class="col-sm-12 col-xl-12 res_mrg">
                            <a href="{{ route('contact') }}" class="button">Contact Us</a>
                        </div>
                        <p>OR</p>
                        <div class="col-sm-12 col-xl-12">
                            <p>Call Us: <strong>+880 192 132 4091</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Quote-->
    <!--Start Testimonials -->
    <div class="testimonials_wrap  animated slide">
        <div class="testimonials_inner">
            <div class="container">
                <div class="heading_wrap">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">What <span>clients say</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="testi_slider">
                            <div class="owl-carousel right-img-carousel">

                                @foreach ($reviews as $review)
                                    <div class="item">
                                        <p>
                                            {{ $review->review }}
                                        </p>
                                        <div class="user_botom">
                                            <img src="{{ $review->user->image ? asset('storage/'. $review->user->image) : asset('admin/assets/images/default-avatar.png') }}" alt="{{ $review->user->name }}">
                                            <span> {{ $review->user->name }} </span>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="testi_img">
                            <img src="{{ asset('website/assets/images/testi_img.png') }}" alt="img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Testimonials -->
@endsection
