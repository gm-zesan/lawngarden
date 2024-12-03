@extends('website.master')

@section('title')
    Blog Details
@endsection

@section('body')
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
                                <span class="date">{{ $blog->created_at->format('d') }}<cite>{{ $blog->created_at->format('F') }}</cite></span>
                            </figure>
                            <div class="content">
                                <h5>{{ $blog->createdBy->name }}</h5>
                                <h3><a href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                                <p>
                                    {!! $blog->description !!}
                                </p>
                            </div>
                        </article>
                        <!--End Comment Form -->
                        <div class="comment_form seaction_margin  animated slide">
                            <h4 class="heading_c">Post <span>a Comment</span></h4>
                            <form action="http://www.shmai.com/preview/lawnexpress-html/process.php" method="post"
                                class="row ">
                                <fieldset class="col-sm-12 col-md-12 field-control">
                                    <input type="text" placeholder="Full Name" name="name" class="form-control">
                                    <label></label>
                                </fieldset>
                                <div class="clearfix"></div>
                                <fieldset class="col-sm-12 col-md-12 field-control">
                                    <input type="email" placeholder="Email" name="email" class="form-control">
                                    <label></label>
                                </fieldset>
                                <div class="clearfix"></div>
                                <div class="col-sm-12 col-md-12">
                                    <textarea placeholder="Message" name="message" class="form-control"></textarea>
                                    <input type="submit" value="submit comment" class="button yellow">
                                </div>
                            </form>
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
