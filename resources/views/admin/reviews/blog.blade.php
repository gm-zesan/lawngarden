@extends('admin.master')
@section('title')
    Manage Blog Review
@endsection

@section('module')
    Blog Review
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Blog Reviews Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 8%">SL NO</th>
                                    <th>Customer Name</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <th>Created At</th>
                                    <th>Change Status</th>
                                    <th style="width: 12%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reviews as $key => $review)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $review->user->name }}</td>
                                        <td>
                                            {{ $review->rating }}/5
                                        </td>
                                        <td>
                                            <p>{{ $review->review }}</p>
                                        </td>
                                        <td>{{ $review->created_at->diffForHumans() }}</td>
                                        </td>
                                        <td>
                                            <form action="{{ route('blog.reviews.change-status', $review->id) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm {{ $review->status ? 'btn-success' : 'btn-warning' }}">
                                                    {{ $review->status ? 'Published' : 'Unpublished' }}
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('blog.reviews.delete', ['id' => $review->id]) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete this?');">
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
