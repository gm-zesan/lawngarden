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
                                <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--End Tools -->
@endsection
