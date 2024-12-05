@extends('customer.layout')

@section('title')
    Blog Post
@endsection
@section('page-title')
    Blog Post
@endsection

@push('styles')
    <style>
        .avatar-label{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            border: 2px solid #7da500;
            padding: 2px;
            border-radius: 5px;
            max-height: 308px;
            width: 100%;
            height: auto;
            margin: 0 auto;
        }
        .avatar-label i{
            position: absolute;
            bottom: 10px;
            right: 7px;
            cursor: pointer;
            font-size: 20px;
            color: #000;
        }
        .avatar-label img{
            width: 100%;
            max-height: 300px;
            height: auto;
            border-radius: 5px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <form action="{{ route('customer.blog-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="text-center mb-4">
            <label for="avatar" class="form-label avatar-label">
                <img id="imagePreview" src="{{ asset('website/assets/images/default.jpg') }}" alt="Default Avatar" class="avatar-img">
                <i class="fa fa-camera"></i>
            </label>
            <input type="file" id="avatar" name="image" class="form-control d-none" onchange="previewImage(event)">
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
            </div>

            {{-- category_id --}}
            <div class="col-12">
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category_id" name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            
            <div class="col-12">
                <div class="mb-3">
                    <label for="address" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5" placeholder="What's on your mind?"></textarea>
                </div>
            </div>

        </div>

        <div class="mb-3 button text-end">
            <button type="submit" class="btn">Post</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
