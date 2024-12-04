@extends('customer.layout')

@section('title')
    My Review
@endsection
@section('page-title')
    My Review
@endsection

@push('styles')
    <style>
        .btn-primary{
            background-color: #7da500;
            border-color: #7da500;
        }
        .btn-primary:hover{
            background-color: #7da500;
            border-color: #7da500;
        }
        label {
            font-weight: 700;
        }
        select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('customer.review.submit') }}" method="post">
        @csrf

        <!-- Rating -->
        <label for="rating">Rating:</label>
        <select name="rating" class="form-control" required>
            <option value="" disabled {{ $review ? '' : 'selected' }}>Select a rating</option>
            <option value="1" {{ $review && $review->rating == 1 ? 'selected' : '' }}>1 - Poor</option>
            <option value="2" {{ $review && $review->rating == 2 ? 'selected' : '' }}>2 - Fair</option>
            <option value="3" {{ $review && $review->rating == 3 ? 'selected' : '' }}>3 - Good</option>
            <option value="4" {{ $review && $review->rating == 4 ? 'selected' : '' }}>4 - Very Good</option>
            <option value="5" {{ $review && $review->rating == 5 ? 'selected' : '' }}>5 - Excellent</option>
        </select>

        <!-- Review -->
        <label for="review">Review:</label>
        <textarea name="review" class="form-control" required>{{ $review->review ?? '' }}</textarea>

        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>

@endsection
