@extends('website.master')

@section('title')
    About us
@endsection

@push('styles')
    <style>
        .team img{
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
    
@endpush

@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>About Us</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Who We Are</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <!--Start About-->
    <div class="about about_two seaction_margin">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 animated slide">
                    <figure>
                        <img src="{{ asset('website/assets/images/custom/about_img.jpg') }}" alt="img" />
                        <a href="#"><i class="fa fa-play"></i></a>
                    </figure>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 animated slide">
                    <h6>Consectetur adipisicing elit sed ipsum eiusmod tempor incididunt utsmat. </h6>
                    <h3>We Offer Best Services & Take Care of your Lawn
                        or Garden Like No Other
                    </h3>
                    <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed laboret lore
                        magna minim veniam nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute reprehenderit voluptate velit esse.</p>
                    <p> Cillum dolore fugiat nula pariatur sed cepteur sint occaecat cupidatat non sunt culpa officia
                        deserunt mollit anim est laborum.
                    </p>
                    <a href="#" class="button brdr"> View Services</a>
                </div>
            </div>
        </div>
    </div>
    <!--End About-->
    <!--Start About Col-->
    <div class="intro_box seaction_margin">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 res_mrg animated fades">
                    <figure>
                        <img src="{{ asset('website/assets/images/custom/col1.jpg') }}" alt="img" />
                    </figure>
                    <h3>LawnExpress Mission</h3>
                    <p>Abore et dolore magna aliqua enim minim veniam qus nostrud exercitation ulamco laboris nis
                        aliquip eiusmod tempor incididunt labore.
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 res_mrg animated fades">
                    <figure>
                        <img src="{{ asset('website/assets/images/custom/col2.jpg') }}" alt="img" />
                    </figure>
                    <h3>Our Achievements </h3>
                    <p>Abore et dolore magna aliqua enim minim veniam qus nostrud exercitation ulamco laboris nis
                        aliquip eiusmod tempor incididunt labore.
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 animated fades">
                    <figure>
                        <img src="{{ asset('website/assets/images/custom/col3.jpg') }}" alt="img" />
                    </figure>
                    <h3>The Objectives</h3>
                    <p>Abore et dolore magna aliqua enim minim veniam qus nostrud exercitation ulamco laboris nis
                        aliquip eiusmod tempor incididunt labore.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End About Col-->
    <!--Start Features-->
    <div class="features_two features_three seaction_margin">
        <div class="features_two_inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 res_mrg">
                        <div class="heading_wrap  animated slide">
                            <div class="icon_bar"></div>
                            <h2 class="heading_a">Why Choose Us</h2>
                            <h4 class="heading_small">Apsum dolor sit amet consectetur adipisicing elit usmod tempor
                                incididunt utsmat labore et dolore aliqua.
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 animated slide">
                                <div class="icon_box">
                                    <img src="{{ asset('website/assets/images/icons/top_icon1.png') }}" alt="img" />
                                    <h4>Cerfified Workers</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 animated slide">
                                <div class="icon_box">
                                    <img src="{{ asset('website/assets/images/icons/top_icon3.png') }}" alt="img" />
                                    <h4>Honest & Realiable</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 animated slide">
                                <div class="icon_box">
                                    <img src="{{ asset('website/assets/images/icons/top_icon3.png') }}" alt="img" />
                                    <h4>Free Maintenance</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 animated slide">
                                <div class="icon_box">
                                    <img src="{{ asset('website/assets/images/icons/top_icon2.png') }}" alt="img" />
                                    <h4>10+ Years Expertise</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 animated slide">
                                <div class="icon_box">
                                    <img src="{{ asset('website/assets/images/icons/top_icon4.png') }}" alt="img" />
                                    <h4>24h Free Helpline</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 animated slide">
                                <div class="icon_box">
                                    <img src="{{ asset('website/assets/images/icons/top_icon4.png') }}" alt="img" />
                                    <h4>Best Equipments</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Features-->
    <!--Start Skills -->
    <div class="skill_wrap seaction_margin ">
        <div class="container">
            <div class="heading_wrap  animated fadess">
                <div class="icon_bar"></div>
                <h2 class="heading_a">The <span>Skills we got</span></h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 animated fades res_mrg">
                    <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusm tempor incididunt lore magna minim
                        veniam nostrud exercitation ullamco laboris nisi ut aliquip consequat duis aute reprehenderit
                        voluptate.
                    </p>
                    <div class="progress_bar_wrap" id="progress_bars">
                        <label>Plantation</label>
                        <div class="progress ">
                            <div class="bar one" data-percent="80" style="width: 80%;"></div>
                        </div>
                        <label>Agriculture</label>
                        <div class="progress">
                            <div class="bar yellow two" data-percent="98" style="width: 98%;"></div>
                        </div>
                        <label>Watering Gardens</label>
                        <div class="progress">
                            <div class="bar three" data-percent="90" style="width: 90%;"></div>
                        </div>
                        <label>Rubbish Cleanup</label>
                        <div class="progress">
                            <div class="bar three" data-percent="90" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animated fades">
                    <div class="skill_img ">
                        <figure>
                            <img src="{{ asset('website/assets/images/custom/skill_img.jpg') }}" alt="img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Skills -->
    <!--Start Skills -->
    <div class="statistics bg2 seaction_margin  animated slide">
        <div class="statistics_inner  animated hatch">
            <div class="container">
                <ul class="row clearfix">
                    <li id="counter1" class="col-sm-6 col-lg-3 res_mrg">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ asset('website/assets/images/icons/counter_icon.png') }}" alt="img">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <a href="#">1345+</a>
                                <small>Trees Plantation</small>
                            </div>
                        </div>
                    </li>
                    <li id="counter2" class="col-sm-6 col-lg-3 res_mrg">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ asset('website/assets/images/icons/counter_icon2.png') }}" alt="img">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <a href="#">150+</a>
                                <small>Qualified Staff</small>
                            </div>
                        </div>
                    </li>
                    <li id="counter3" class="col-sm-6 col-lg-3">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ asset('website/assets/images/icons/counter_icon3.png') }}" alt="img">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <a href="#">350+</a>
                                <small>Garden Tools</small>
                            </div>
                        </div>
                    </li>
                    <li id="counter4" class="col-sm-6 col-lg-3">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ asset('website/assets/images/icons/counter_icon4.png') }}" alt="img">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <a href="#">1200+</a>
                                <small>Satisfied Clients</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Skills -->
    <!--Start Team-->
    <div class="team_wrap team_wrap_two seaction_margin">
        <div class="container">
            <div class="heading_wrap animated fades">
                <div class="icon_bar"></div>
                <h2 class="heading_a">the <span>experts team</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-3 animated fades res_mrg">
                    <div class="team">
                        <figure>
                            <img src="{{ asset('website/assets/images/custom/team1.jpg') }}" alt="img" />
                            <div class="social_overlay">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </figure>
                        <h5>G.M. Zesan</h5>
                        <span>Developer</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 animated fades res_mrg">
                    <div class="team">
                        <figure>
                            <img src="{{ asset('website/assets/images/custom/team2.jpg') }}" alt="img" />
                            <div class="social_overlay">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </figure>
                        <h5>Mainul Abedin Bhuiyan</h5>
                        <span>Designer</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 animated fades res_mrg">
                    <div class="team">
                        <figure>
                            <img src="{{ asset('website/assets/images/custom/team3.jpg') }}" alt="img" />
                            <div class="social_overlay">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </figure>
                        <h5>Riaj Ahamed</h5>
                        <span>Designer</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--End Team-->

@endsection