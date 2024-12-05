@extends('admin.master')
@section('title')
    Edit Project
@endsection

@section('module')
    Project
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Project Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('project.update', ['id' => $project->id]) }}"
                        method="Post" enctype="multipart/form-data">
                        @csrf

                        

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Project Title <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="title" value="{{ $project->title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Project Location</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="location" value="{{ $project->location }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="" name="start_date" value="{{ $project->start_date }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Project Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" id="" name="description" rows="5">{!! $project->description !!}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Project Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" height="100"
                                    width="130">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Status <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status">
                                    <option value="ongoing" {{ $project->status == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                    <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="upcoming" {{ $project->status == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Project Info</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
