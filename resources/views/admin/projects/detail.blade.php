@extends('admin.master')
@section('title')
    Project Details
@endsection

@section('module')
    Project
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Project Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            <tr>
                                <th>Project Title</th>
                                <td>{{ $project->title }}</td>
                            </tr>
                            <tr>
                                <th>Project Location</th>
                                <td>{{ $project->location }}</td>
                            </tr>
                            <tr>
                                <th>Project Starting Date</th>
                                <td>{{ $project->start_date }}</td>
                            </tr>
                            <tr>
                                <th style="width: 20%">Project Description</th>
                                <td>{!! $project->description !!}</td>
                            </tr> 
                            <tr>
                                <th>Project Image</th>
                                <td>
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" height="100"
                                        width="100">
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $project->status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
