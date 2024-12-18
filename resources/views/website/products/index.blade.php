@extends('website.master')

@section('title')
    Products
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
                        <h1>Shop</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <!--Start Tools -->
    <div class="tools_wrap tools_wrap_two seaction_margin">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-12 col-md-3 animated slide res_mrg">
                        <div class="tool">
                            <figure>
                                <a href="{{ route('product-detail', ['id'=>$product->id]) }}"><img src="{{ asset($product->image) }}" alt="img" /></a>
                            </figure>
                            <div class="detail">
                                <h5><a href="{{ route('product-detail', ['id'=>$product->id]) }}">{{ $product->name }}</a></h5>
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

                {{ $products->links() }}


            </div>
        </div>
    </div>
    <!--End Tools -->
@endsection
