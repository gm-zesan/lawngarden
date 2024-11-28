@extends('website.master')

@section('title')
    Projects
@endsection

@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>our projects</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>The Works</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <!--Start project-->
    <div class="project_wrap seaction_margin  animated fades">
        <div class="container">
            <div class="my-selector" data-option-key="filter">
                <a href="#filter" data-option-value="*" class="selected">Show All Projects</a>
                <a href="#filter" data-option-value=".lawn_care">Lawn Care</a>
                <a href="#filter" data-option-value=".gardening">Gardening</a>
                <a href="#filter" data-option-value=".cleanup">Rubbish Cleanup</a>
                <a href="#filter" data-option-value=".planting">Planting</a>
            </div>
            <ul id="project-eliment" class="row da-thumbs">
                <li class="col-sm-4 col-md-4 item cleanup lawn_care">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item gardening planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project2.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project2.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project3.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project3.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project4.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project4.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item cleanup gardening ">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project5.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project5.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project6.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project6.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item cleanup planting">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project7.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project7.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item gardening lawn_care">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project8.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project8.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
                <li class="col-sm-4 col-md-4 item gardening lawn_care">
                    <div class="item_inner">
                        <img src="{{ asset('website/assets/images/custom/project9.jpg') }}" alt="img" />
                        <div class="overlay">
                            <a href="{{ asset('website/assets/images/custom/project9.jpg') }}" class="zoom"><i class="fa fa-search"></i></a>
                            <h5><a href="#">Lawn Worker</a></h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--End project-->
@endsection
