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
            <ul id="project-eliment" class="row da-thumbs">
                @foreach ($projects as $project)
                    <li class="col-sm-4 col-md-4 item cleanup lawn_care">
                        <div class="item_inner">
                            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                            <div class="overlay">
                                <h5><a href="{{ route('project.details', $project->id) }}">{{ $project->title }}</a></h5>
                            </div>
                        </div>
                    </li>
                @endforeach
                
            </ul>
        </div>
    </div>
    <!--End project-->
@endsection
