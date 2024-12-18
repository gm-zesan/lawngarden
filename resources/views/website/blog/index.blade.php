@extends('website.master')

@section('title')
    Blog
@endsection

@push('styles')
    <style>
        .pagination_numbering {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            font-family: Arial, sans-serif;
        }

        /* All pagination elements */
        .all_paginate {
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        /* Styling for individual page number links */
        .page_number {
            color: #7da500;
            padding: 8px 16px;
            margin: 0 5px;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #7da500;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Active page */
        .page_number.active {
            background-color: #7da500;
            border-color: #7da500;
            color: white;
        }

        /* Hover effect for page links */
        .page_number.cursor:hover {
            background-color: #7da500;
            color: white;
            transform: scale(1.1);
        }

        /* Previous and Next buttons */
        .prev_page, .next_page {
            color: #7da500;
            padding: 8px 16px;
            border: 1px solid #7da500;
            margin: 0 5px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Disabled Previous and Next buttons */
        .prev_page[aria-disabled="true"], .next_page[aria-disabled="true"] {
            color: #ccc;
            border-color: #ccc;
            pointer-events: none;
        }

        /* Hover effect for Previous and Next buttons */
        .prev_page:hover, .next_page:hover {
            background-color: #7da500;
            color: white;
            transform: scale(1.1);
        }

        /* For the "Next" button: add right arrow icon */
        .next_page::after {
            content: " →";
        }

        /* For the "Previous" button: add left arrow icon */
        .prev_page::before {
            content: "← ";
        }

        /* Optional: Adjust size for small screens */
        @media (max-width: 768px) {
            .page_number {
                padding: 6px 12px;
                font-size: 14px;
            }

            .prev_page, .next_page {
                padding: 6px 12px;
                font-size: 14px;
            }
        }
    </style>
@endpush

@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>latest news</h1>
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
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <section class="text-center mb-5">
                        @foreach ($blogs as $blog)
                            <article class="news  animated fades">
                                <figure>
                                    <a href="{{ route('blog-detail', ['id' => $blog->id]) }}"><img src="{{ asset($blog->image) }}"
                                            alt="{{ $blog->title }}"></a>
                                    <span class="date">{{ $blog->created_at->format('d') }}<cite>{{ $blog->created_at->format('F') }}</cite></span>
                                </figure>
                                <div class="content">
                                    <h5>{{ $blog->createdBy ? $blog->createdBy->name : 'Admin' }}</h5>
                                    <h3><a href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                                    <p>
                                        {!! \Illuminate\Support\Str::words($blog->description, 80) !!}

                                    </p>
                                    <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">read more</a>
                                </div>
                            </article>
                        @endforeach

                        {{ $blogs->links() }}
                    </section>
                </div>
                <!--End Articles-->
                <!--Start Sidebar-->
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <aside>
                        <div class="side_widget animated slide">
                            <h5 class="heading_c">The <span>Categories </span></h5>
                            <ul>
                                @foreach ($blogCategories as $category)
                                    <li><a href="{{ route('category-wise-blogs', ['id' => $category->id]) }}">{{ $category->name }}</a>
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
                                                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}"><img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"></a>
                                            </div>
                                            <div class="context">
                                                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                                <span><i class="fa fa-calendar"></i>{{ $blog->created_at->format('F d, y') }}</span>
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
