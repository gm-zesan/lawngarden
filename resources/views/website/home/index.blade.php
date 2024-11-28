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
                            <a href="about.html" class="button">Learn More</a> <a
                                href="https://themeforest.net/item/lawnexpress-lawn-mowing-gardening-landscaping-farming-and-florist-html5-responsive-template/20212910?s_rank=1"
                                class="button">purchase theme</a>
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
                            <a href="about.html" class="button">Learn More</a> <a
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
                            <a href="about.html" class="button">Learn More</a> <a
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
                                    <img src="{{ asset('website/assets/images/icons/icon1.png') }}" class="icon_one" alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh1.png') }}" class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Landscape Caring</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>
                                    <a href="services.html">read more</a>
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
                                    <img src="{{ asset('website/assets/images/icons/icon2.png') }}" class="icon_one" alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh2.png') }}" class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Watering Gardens</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>
                                    <a href="services.html">read more</a>
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
                                    <img src="{{ asset('website/assets/images/icons/icon3.png') }}" class="icon_one" alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh3.png') }}" class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>New Trees Planting</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>
                                    <a href="services.html">read more</a>
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
                                    <img src="{{ asset('website/assets/images/icons/icon4.png') }}" class="icon_one" alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh4.png') }}" class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Rubbbish Cleanup</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>
                                    <a href="services.html">read more</a>
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
                                    <img src="{{ asset('website/assets/images/icons/icon5.png') }}" class="icon_one" alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh5.png') }}" class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Lawn Moving</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>
                                    <a href="services.html">read more</a>
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
                                    <img src="{{ asset('website/assets/images/icons/icon6.png') }}" class="icon_one" alt="img" />
                                    <img src="{{ asset('website/assets/images/icons/iconh6.png') }}" class="icon_one icon_two" alt="img" />
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <h3>Design & Planning</h3>
                                    <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation
                                        ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </p>
                                    <a href="services.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Services-->
    <!--Start project-->
    <div class="project_wrap seaction_margin  animated fades">
        <div class="container">
            <div class="heading_wrap">
                <div class="icon_bar"></div>
                <h2 class="heading_a">projects <span>Gallery</span></h2>
            </div>
            <div class="my-selector" data-option-key="filter">
                <a href="#filter" data-option-value="*" class="selected">Show All Projects</a>
                <a href="#filter" data-option-value=".lawn_care">Lawn Care</a>
                <a href="#filter" data-option-value=".gardening">Gardening</a>
                <a href="#filter" data-option-value=".cleanup">Rubbish Cleanup</a>
                <a href="#filter" data-option-value=".planting">Planting</a>
            </div>
            <ul id="project-eliment" class="row da-thumbs">
                <li class="col-sm-12 col-md-4 item cleanup lawn_care">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-12 col-md-4 item gardening planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project2.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project2.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-12 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project3.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project3.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-12 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project4.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project4.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-12 col-md-4 item cleanup gardening ">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project5.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project5.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-12 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project6.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project6.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--End project-->
    <!--Start Quote-->
    <div class="qoute_wrap seaction_margin  animated entrance">
        <div class="layer">
            <div class="container">
                <div class="qoute">
                    <div class="heading_wrap">
                        <div class="icon_bar"></div>
                        <h2 class="heading_a">Get Instant Quote</h2>
                    </div>
                    <form action="http://www.shmai.com/preview/lawnexpress-html/process.php" method="post"
                        id="quote_form" class="row">
                        <div class="col-sm-12 col-md-6">
                            <input type="text" placeholder="Name" class="form-control" name="user_name" />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" name="user_phone" placeholder="Phone no." class="form-control" />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="email" name="user_email" placeholder="Email" class="form-control" />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <select class="form-control">
                                <option value="">Service Required</option>
                                <option value="">Service Required</option>
                                <option value="">Service Required</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" name="lawn_area" placeholder="Lawn Area (Sq Ft)"
                                class="form-control" />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" name="price" placeholder="$0.00" class="form-control" />
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <textarea name="message_box" placeholder="How can we help?" class="form-control"></textarea>
                        </div>
                        <div class="col-sm-12 col-xl-4 res_mrg">
                            <input type="submit" class="button" value="get estimate" name="get" id="get_quote" />
                        </div>
                        <div class="col-sm-12 col-xl-8">
                            <p>OR Call Us: <strong>+880 192 132 4091</strong></p>
                        </div>
                    </form>
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
                                <div class="item">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat
                                        cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="{{ asset('website/assets/images/user.png') }}" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat
                                        cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="{{ asset('website/assets/images/user.png') }}" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat
                                        cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="{{ asset('website/assets/images/user.png') }}" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
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
                <div class="col-sm-12 col-md-3 animated slide res_mrg">
                    <div class="tool">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/tool1.png') }}" alt="img" /></a>
                        </figure>
                        <div class="detail">
                            <h5><a href="#">Electric Mover</a></h5>
                            <span class="prc">$250.50</span>
                            <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 animated slide res_mrg">
                    <div class="tool">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/tool2.png') }}" alt="img" /></a>
                        </figure>
                        <div class="detail">
                            <h5><a href="#">Electric Mover</a></h5>
                            <span class="prc">$250.50</span>
                            <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 animated slide res_mrg">
                    <div class="tool">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/tool3.png') }}" alt="img" /></a>
                        </figure>
                        <div class="detail">
                            <h5><a href="#">Electric Mover</a></h5>
                            <span class="prc">$250.50</span>
                            <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 animated slide res_mrg">
                    <div class="tool">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/tool4.png') }}" alt="img" /></a>
                        </figure>
                        <div class="detail">
                            <h5><a href="#">Electric Mover</a></h5>
                            <span class="prc">$250.50</span>
                            <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Tools -->
    <!--Start News -->
    <div class="news_wrap seaction_margin">
        <div class="container">
            <div class="heading_wrap">
                <div class="icon_bar"></div>
                <h2 class="heading_a">Our <span>News blog</span></h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                    <div class="news">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/new1.jpg') }}" alt="img"></a>
                            <span class="date">25 <cite>April</cite></span>
                        </figure>
                        <div class="content">
                            <h5>clients, case-study</h5>
                            <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                    eiusmod temp incididunt</a></h3>
                            <a href="services.html">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                    <div class="news">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/new2.jpg') }}" alt="img"></a>
                            <span class="date">25 <cite>April</cite></span>
                        </figure>
                        <div class="content">
                            <h5>clients, case-study</h5>
                            <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                    eiusmod temp incididunt</a></h3>
                            <a href="services.html">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                    <div class="news">
                        <figure>
                            <a href="#"><img src="{{ asset('website/assets/images/custom/new3.jpg') }}" alt="img"></a>
                            <span class="date">25 <cite>April</cite></span>
                        </figure>
                        <div class="content">
                            <h5>clients, case-study</h5>
                            <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                    eiusmod temp incididunt</a></h3>
                            <a href="services.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End News -->
    
@endsection
