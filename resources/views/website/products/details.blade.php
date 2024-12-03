@extends('website.master')

@section('title')
    Products
@endsection

@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>Product Details</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> products<span> Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <!-- section -->
    <section class="layout_padding_2 seaction_margin">
        <div class="container">
            <div class="row">
                <div class="col-md-5 res_mrg">
                    <div class="full">
                        <div class="thumb_product_slider">
                            <div class="item"><img src="{{ asset($product->image) }}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 product_detail_side detail_style1">
                    <div class="product-heading">
                        <h2>{{ $product->name }}</h2>
                    </div>
                    <div class="product-detail-side">
                        <span><del>৳. {{ $product->regular_price }}</del></span><span class="new-price">৳.
                            {{ $product->selling_price }}</span>
                    </div>
                    <div class="category">
                        <h5>Category : <a href="#">{{ $product->category->name }}</a></h5>
                    </div>
                    <div class="detail-contant">
                        @if ($product->stock_amount > 0)
                            <form class="cart" method="POST" action="{{ route('add-to-cart', ['id' => $product->id]) }}">
                                @csrf
                                <div class="quantity">
                                    <input step="1" min="1" name="qty" value="1" title="Qty"
                                        class="input-text qty text" size="4" type="number">
                                </div>
                                <button type="submit" class="theme-btn btn-style-one">Add to cart</button>
                            </form>
                        @else
                            <div class="alert alert-warning">
                                <strong>Warning!</strong> This product is out of stock.
                            </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                    <div class="share_item">
                        <h5>Overview</h5>
                        <p>{{ $product->short_description }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="full">
                        <div class="tab_bar_section">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                        href="#description">Description</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#reviews">Reviews
                                        (2)</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="description" class="tab-pane active">
                                    <div class="product_desc">
                                        <p>
                                            {!! $product->long_description !!}
                                        </p>
                                    </div>
                                </div>
                                <div id="reviews" class="tab-pane fade">
                                    <div class="product_review">
                                        <h3>Reviews (2)</h3>
                                        <div class="commant-text row">
                                            <div class="col-lg-2 col-md-2 col-sm-4">
                                                <div class="profile">
                                                    <img class="img-responsive"
                                                        src="{{ asset('website/assets/images/custom/insta.png') }}"
                                                        alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <h5>David</h5>
                                                <p><span class="c_date">March 2, 2021</span> | <span><a rel="nofollow"
                                                            class="comment-reply-link" href="#">Reply</a></span></p>
                                                <span class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </span>
                                                <p class="msg">ThisThis book is a treatise on the theory of ethics, very
                                                    popular during the Renaissance. The first line of Lorem Ipsum,
                                                    “Lorem ipsum dolor sit amet..
                                                </p>
                                            </div>
                                        </div>
                                        <div class="commant-text row">
                                            <div class="col-lg-2 col-md-2 col-sm-4">
                                                <div class="profile">
                                                    <img class="img-responsive"
                                                        src="{{ asset('website/assets/images/custom/insta5.png') }}"
                                                        alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <h5>Jack</h5>
                                                <p><span class="c_date">March 2, 2021</span> | <span><a rel="nofollow"
                                                            class="comment-reply-link" href="#">Reply</a></span></p>
                                                <span class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </span>
                                                <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod
                                                    at est. Nunc faccumsan ermentum consectetur metus placerat mattis.
                                                    Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam
                                                    hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="full review_bt_section">
                                                    <div class="">
                                                        <a class="theme-btn btn-style-two" data-bs-toggle="collapse"
                                                            href="#collapseExample" role="button" aria-expanded="false"
                                                            aria-controls="collapseExample">Leave a Review</a>
                                                    </div>
                                                </div>
                                                <div class="full">
                                                    <div id="collapseExample" class="full collapse commant_box">
                                                        <form accept-charset="UTF-8"
                                                            action="http://www.shmai.com/preview/lawnexpress-html/index.html"
                                                            method="post">
                                                            <input id="ratings-hidden" name="rating" type="hidden">
                                                            <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                                                                placeholder="Enter your review here..." required></textarea>
                                                            <div class="full_bt center">
                                                                <button class="theme-btn btn-style-two"
                                                                    type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!--Start section-->
    @if (count($relatedProducts) > 0)
        <div class="tools_wrap tools_wrap_two seaction_margin">
            <div class="container">
                <div class="heading_wrap  animated fadess">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">Related <span>Items</span></h2>
                </div>
                <div class="row">
                    @foreach ($relatedProducts as $product)
                        <div class="col-sm-12 col-md-3 animated slide res_mrg">
                            <div class="tool">
                                <figure>
                                    <a href="{{ route('product-detail', ['id' => $product->id]) }}"><img
                                            src="{{ asset($product->image) }}" alt="img" /></a>
                                </figure>
                                <div class="detail">
                                    <h5><a
                                            href="{{ route('product-detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                    </h5>
                                    <span class="prc">৳. {{ $product->selling_price }}</span>
                                    <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="qty" class="form-control" value="1"
                                            min="1">
                                        <button type="submit"><i class="fa fa-shopping-basket"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- end section -->
@endsection
