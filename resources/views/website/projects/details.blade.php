@extends('website.master')

@section('title')
Project
@endsection


@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>Project Details</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> Project<span> Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <!--Start project-->
    <div class="project_detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 animated fades res_mrg">
                    <div class="project_slider_wrp">
                        <div class="slides">
                            <img src="{{ asset($project->image) }}" alt="img" />
                            <img src="{{ asset($project->image) }}" alt="img" />
                            <img src="{{ asset($project->image) }}" alt="img" />
                        </div>
                        <a href="#" class="lft"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="rht"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 projct-img animated fades">
                    <img src="{{ asset('website/assets/images/custom/single_1.jpg') }}" alt="img" />
                    <img class="img2" src="{{ asset('website/assets/images/custom/single_2.jpg') }}" alt="img" />
                </div>
            </div>
        </div>
    </div>
    <div class="about_poject seaction_margin  animated slide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 res_mrg mt-4">
                    <h3 class="heading_c">Project <span>Details</span></h3>
                    <p>
                        {!! $project->description !!}
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 right">
                    <ul>
                        <li>Project Name:<span>{{ $project->title }}</span></li>
                        <li>Location: <span>{{ $project->location }}</span></li>
                        <li>Start Data: <span>{{ $project->start_date }}</span></li>
                        <li>Status: <span>{{ $project->status }}</span></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

