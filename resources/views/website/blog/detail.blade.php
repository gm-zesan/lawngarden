@extends('website.master')

@section('title')
    Blog Details
@endsection

@push('styles')
    <style>
        /* Styling for the comment section */
        .comment {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .comment:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        /* Styling for the user image */
        .comment .image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .comment .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Styling for the text content */
        .comment .text {
            flex-grow: 1;
        }

        .comment .text h6 {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            color: #333;
            transition: color 0.3s ease;
        }

        .comment .text h6:hover {
            color: #3498db; /* Color on hover */
        }

        .comment .text span {
            font-size: 12px;
            color: #888;
            margin-bottom: 5px;
            display: block;
        }

        .comment .text p {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }

        /* Add responsiveness for smaller screens */
        @media (max-width: 767px) {
            .comment {
                flex-direction: column;
                align-items: flex-start;
            }

            .comment .image {
                margin-bottom: 10px;
            }

            .comment .text {
                width: 100%;
            }
        }

    </style>
@endpush

@section('body')
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
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>{{ $blog->title }}</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <!--Start Blog -->
    <div class="blog_wrap">
        <div class="container">
            <div class="row">
                <!--Start Articles-->
                <div class="col-lg-9 col-sm-12">
                    <section>
                        <article class="news single  animated fades">
                            <figure>
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                <span
                                    class="date">{{ $blog->created_at->format('d') }}<cite>{{ $blog->created_at->format('F') }}</cite></span>
                            </figure>
                            <div class="content">
                                <h5>{{ $blog->createdBy ? $blog->createdBy->name : 'Admin' }}</h5>
                                <h3><a href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                                <p>
                                    {!! $blog->description !!}
                                </p>
                            </div>
                        </article>
                        <!--End Comment Form -->

                        <!--Start Comments -->

                        @if ($reviews->count() > 0)
                            <h4 class="heading_c">Comments {{ $reviews->count() }}</h4>
                            @foreach ($reviews as $comment)
                                <div class="comment d-flex align-items-center gap-2">
                                    <div class="image">
                                        <img src="{{ $comment->user->image ? asset('storage/'. $comment->user->image) : asset('admin/assets/images/default-avatar.png') }}" alt="{{ $comment->user->name }}">
                                    </div>
                                    <div class="text">
                                        <h6>{{ $comment->user->name }}</h6>
                                        <span>{{ $comment->created_at->format('F d, Y') }}</span>
                                        <p>{{ $comment->review }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h4 class="heading_c">No Comments</h4>
                        @endif


                        <div class="comment_form seaction_margin  animated slide">
                            <h4 class="heading_c">Post <span>a Comment</span></h4>
                            @if (Session::get('customer_id'))
                                <form action="{{ route('blog.reviews.store', $blog->id) }}" method="post" class="row">
                                    @csrf
                                    <!-- Rating -->
                                    <fieldset class="col-sm-12 col-md-12 field-control">
                                        <label for="rating">Rating</label>
                                        <select name="rating" class="form-control" required>
                                            <option value="" disabled selected>Select a rating</option>
                                            <option value="1">1 - Poor</option>
                                            <option value="2">2 - Fair</option>
                                            <option value="3">3 - Good</option>
                                            <option value="4">4 - Very Good</option>
                                            <option value="5">5 - Excellent</option>
                                        </select>
                                    </fieldset>
                                    <div class="clearfix"></div>

                                    <!-- Review Message -->
                                    <fieldset class="col-sm-12 col-md-12 field-control">
                                        <textarea placeholder="Write your review here" name="review" class="form-control" required></textarea>
                                    </fieldset>
                                    <div class="clearfix"></div>

                                    <!-- Submit Button -->
                                    <div class="col-sm-12 col-md-12">
                                        <input type="submit" value="Submit Review" class="button yellow">
                                    </div>
                                </form>
                            @else
                                <p>Please <a class="button yellow" href="{{ route('customer.login') }}">Login</a> to post a
                                    comment.</p>
                            @endif
                        </div>
                        <!--End Comment Form -->
                    </section>
                </div>
                <!--End Articles-->
                <!--Start Sidebar-->
                <div class="col-sm-12 col-lg-3">
                    <aside>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">The <span>Categories </span></h5>
                            <ul>
                                @foreach ($blogCategories as $category)
                                    <li><a
                                            href="{{ route('category-wise-blogs', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">Recent<span> News </span></h5>
                            <div class="recent_post">
                                <ul>
                                    @foreach ($latestBlogs as $blog)
                                        <li>
                                            <div class="image">
                                                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}"><img
                                                        src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"></a>
                                            </div>
                                            <div class="context">
                                                <a
                                                    href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                                <span><i
                                                        class="fa fa-calendar"></i>{{ $blog->created_at->format('F d, y') }}</span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </div>
    <!--End Blog -->
@endsection
