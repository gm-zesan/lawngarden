@extends('admin.master')
@section('title')
    Manage Project
@endsection

@section('module')
    Project
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Projects Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 8%">SL NO</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Image</th>
                                    <th>Starting Date</th>
                                    <th>Status</th>
                                    <th style="width: 12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->location }}</td>
                                        <td><img src="{{ asset($project->image) }}" alt="{{ $project->title }}" height="50" width="80"></td>
                                        <td>{{ $project->start_date }}</td>
                                        <td>{{ $project->status }}</td>
                                        <td>
                                            <a href="{{ route('project.show', ['id' => $project->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="{{ route('project.edit', ['id' => $project->id]) }}" class="btn btn-success btn-sm">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('project.delete', ['id' => $project->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?');">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
