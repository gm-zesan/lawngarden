@extends('website.master')

@section('title')
    Blog
@endsection

@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>latest news</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <!--Start Blog -->
    <div class="blog_wrap">
        <div class="container">
            <div class="row">
                <!--Start Articles-->
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <section>
                        <article class="news  animated fades">
                            <figure>
                                <a href="single.html"><img src="{{ asset('website/assets/images/custom/article1.jpg') }}"
                                        alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed
                                    laboret dolore magna ad minim veniam nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute reprehenderit voluptate velit esse cillum
                                    dolore fugiat nula pariatur. Excepteur sint occaecat cupidatat non sunt culpa
                                    officia deserunt mollit anim est laborum.
                                </p>
                                <a href="single.html">read more</a>
                            </div>
                        </article>
                        <article class="news  animated fades">
                            <figure>
                                <a href="single.html"><img src="{{ asset('website/assets/images/custom/article2.jpg') }}"
                                        alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed
                                    laboret dolore magna ad minim veniam nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute reprehenderit voluptate velit esse cillum
                                    dolore fugiat nula pariatur. Excepteur sint occaecat cupidatat non sunt culpa
                                    officia deserunt mollit anim est laborum.
                                </p>
                                <a href="single.html">read more</a>
                            </div>
                        </article>
                        <article class="news   animated fades">
                            <figure>
                                <a href="single.html"><img src="{{ asset('website/assets/images/custom/article4.jpg') }}"
                                        alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed
                                    laboret dolore magna ad minim veniam nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute reprehenderit voluptate velit esse cillum
                                    dolore fugiat nula pariatur. Excepteur sint occaecat cupidatat non sunt culpa
                                    officia deserunt mollit anim est laborum.
                                </p>
                                <a href="single.html">read more</a>
                            </div>
                        </article>
                        <article class="news  animated fades">
                            <figure>
                                <a href="single.html"><img src="{{ asset('website/assets/images/custom/article3.jpg') }}"
                                        alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed
                                    laboret dolore magna ad minim veniam nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute reprehenderit voluptate velit esse cillum
                                    dolore fugiat nula pariatur. Excepteur sint occaecat cupidatat non sunt culpa
                                    officia deserunt mollit anim est laborum.
                                </p>
                                <a href="single.html">read more</a>
                            </div>
                        </article>
                    </section>
                </div>
                <!--End Articles-->
                <!--Start Sidebar-->
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <aside>
                        <div class="side_widget animated slide">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">The <span>Categories </span></h5>
                            <ul>
                                <li><a href="#">Garden Care Tools</a></li>
                                <li><a href="#">The Lawn Accessories</a></li>
                                <li><a href="#">Latest Movers</a></li>
                                <li><a href="#">How To Videos</a></li>
                                <li><a href="#">Ask The Experts</a></li>
                                <li><a href="#">Special Discounts</a></li>
                            </ul>
                        </div>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">Insta <span>Widget </span></h5>
                            <div class="row insta">
                                <div class="col-4">
                                    <img src="{{ asset('website/assets/images/custom/insta.png') }}" alt="img" />
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('website/assets/images/custom/insta2.png') }}" alt="img" />
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('website/assets/images/custom/insta3.png') }}" alt="img" />
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('website/assets/images/custom/insta4.png') }}" alt="img" />
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('website/assets/images/custom/insta5.png') }}" alt="img" />
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('website/assets/images/custom/insta6.png') }}" alt="img" />
                                </div>
                            </div>
                        </div>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">Our<span> Newsletter </span></h5>
                            <form action="#">
                                <input type="text" placeholder="Subscribe">
                                <button type="submit"><i class="fa fa-envelope"></i></button>
                            </form>
                        </div>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">Recent<span> News </span></h5>
                            <div class="recent_post">
                                <ul>
                                    <li>
                                        <div class="image">
                                            <a href="#"><img
                                                    src="{{ asset('website/assets/images/custom/thumb1.png') }}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="context">
                                            <a href="#">We have won our 95% of cases</a>
                                            <span><i class="fa fa-calendar"></i> april 25,2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#"><img
                                                    src="{{ asset('website/assets/images/custom/thumb2.png') }}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="context">
                                            <a href="#">We have won our 95% of cases</a>
                                            <span><i class="fa fa-calendar"></i> april 25,2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#"><img
                                                    src="{{ asset('website/assets/images/custom/thumb3.png') }}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="context">
                                            <a href="#">We have won our 95% of cases</a>
                                            <span><i class="fa fa-calendar"></i> april 25,2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </div>
    <!--End Blog -->
@endsection
