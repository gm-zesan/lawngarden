@extends('customer.layout')

@section('title')
    My Blogs
@endsection
@section('page-title')
    My Blogs
@endsection

@push('styles')
    <style>
        .table>thead>tr>th{
            color: #000;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" height="auto" width="100">
                        @else
                            N / A
                        @endif
                    </td>
                    <td>{{ $blog->created_at->diffForHumans() }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No blog found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
