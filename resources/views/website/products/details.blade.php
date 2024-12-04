@extends('website.master')

@section('title')
    Products
@endsection

@push('styles')
    <style>
        .stars {
            display: flex;
            gap: 5px;
            cursor: pointer;
        }

        .stars i {
            font-size: 24px;
            color: #ccc;
            transition: color 0.3s;
        }

        .stars i.selected {
            color: #f39c12; /* Gold color for selected stars */
        }

        .rating-section {
            margin-bottom: 15px;
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
                                        ({{ count($reviews) }})</a> </li>
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
                                        <h3>Reviews ({{ count($reviews) }})</h3>
                                        @forelse ($reviews as $review)
                                            <div class="commant-text row">
                                                <div class="col-lg-2 col-md-2 col-sm-4">
                                                    <div class="profile">
                                                        <img class="img-responsive"
                                                            src="{{ $review->user->image ? asset('storage/'. $review->user->image) : asset('admin/assets/images/default-avatar.png') }}"
                                                            alt="{{ $review->user->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8">
                                                    <h5>{{ $review->user->name }}</h5>
                                                    <p><span class="c_date">{{ $review->created_at->format('F d, Y') }}</span></p>
                                                    <span class="rating">
                                                        @for ($i = 0; $i < $review->rating; $i++)
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        @endfor
                                                    </span>
                                                    <p class="msg">
                                                        {{ $review->review }}
                                                    </p>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="commant-text row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h5>No review found</h5>
                                                </div>
                                            </div>
                                            
                                        @endforelse

                                        

                                        <div class="row">
                                            <div class="col-sm-12">
                                                @if (Session::get('customer_id'))
                                                    <div class="full review_bt_section">
                                                        <div class="">
                                                            <a class="theme-btn btn-style-two" data-bs-toggle="collapse"
                                                                href="#collapseExample" role="button"
                                                                aria-expanded="false"
                                                                aria-controls="collapseExample">Leave a Review</a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="full review_bt_section">
                                                        <div class="">
                                                            <a class="theme-btn btn-style-two" href="{{ route('customer.login') }}">Login</a>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="full">
                                                    <div id="collapseExample" class="full collapse commant_box">
                                                        <form action="{{ route('product.reviews.store', $product->id) }}" method="post">
                                                            @csrf
                                                            <!-- Hidden Rating Input -->
                                                            <input id="ratings-hidden" name="rating" type="hidden" required>
                                                        
                                                            <!-- Star Rating -->
                                                            <div class="rating-section">
                                                                <label>Rate this product:</label>
                                                                <div class="stars">
                                                                    <i class="fa fa-star" data-rating="1"></i>
                                                                    <i class="fa fa-star" data-rating="2"></i>
                                                                    <i class="fa fa-star" data-rating="3"></i>
                                                                    <i class="fa fa-star" data-rating="4"></i>
                                                                    <i class="fa fa-star" data-rating="5"></i>
                                                                </div>
                                                            </div>
                                                        
                                                            <!-- Review Comment -->
                                                            <textarea class="form-control animated" cols="50" id="new-review" name="review" 
                                                                placeholder="Enter your review here..." required></textarea>
                                                        
                                                            <!-- Submit Button -->
                                                            <div class="full_bt center">
                                                                <button class="theme-btn btn-style-two" type="submit">Submit Review</button>
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


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.stars i');
            const ratingInput = document.getElementById('ratings-hidden');

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    ratingInput.value = index + 1;
                    stars.forEach((s, i) => {
                        if (i <= index) {
                            s.classList.add('selected');
                        } else {
                            s.classList.remove('selected');
                        }
                    });
                });
            });
        });


    </script>
@endpush
