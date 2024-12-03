@extends('website.master')

@section('title')
    Shopping Cart
@endsection

@section('body')
    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>Cart</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <section>
        <div class="container">
            <div class="heading_wrap animated slide">
                <div class="icon_bar"></div>
                <h2 class="heading_a">Cart <span>Details</span></h2>
            </div>
            <div class="cart_table_wraper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cart_wrpaer">
                            <div class="table_scroll table-responsive">
                                <table class="table">
                                    <thead class="dark-bg">
                                        <tr>
                                            <th><span>Product</span></th>
                                            <th><span>Description</span></th>
                                            <th><span>Price</span></th>
                                            <th><span>Quantity</span></th>
                                            <th><span>Total</span></th>
                                            <th><span></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($sum = 0)
                                        @foreach ($cart_products as $cart_product)
                                            <tr>
                                                <td><img class="img-rounded"
                                                        src="{{ asset($cart_product->image) }}"
                                                        alt="{{ $cart_product->name }}"></td>
                                                <td>
                                                    <p>
                                                        {{ $cart_product->name }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>
                                                        ৳. {{ $cart_product->price }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="quantity">
                                                        <form action="{{ route('update-cart-product', ['id' => $cart_product->__raw_id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="input-group">
                                                                <input class="input-text qty text" type="number" value="{{ $cart_product->qty }}"
                                                                    name="qty">
                                                                <input type="submit" value="Update" class="btn btn-success" style="background-color: #7da500;">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>
                                                        ৳. {{ $cart_product->price * $cart_product->qty }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <a  onclick="return confirm('Are you sure to delete this..')" href="{{ route('remove-cart-product', ['id' => $cart_product->__raw_id]) }}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php($sum += $cart_product->price * $cart_product->qty)
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- table End -->
                            </div>
                            <div class="row cart_btns">
                                <div class="col-md-6 col-sm-12 cont_btn">
                                    <a class="theme-btn btn-style-two" href="{{ route('all-products') }}">Continue Shopping </a>
                                </div>
                                <!-- column End -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="cart_totals_area gray-bg cart-2">
                                        <ul>
                                            <li>
                                                Subtotal <span>৳. {{ $sum }}</span>
                                            </li>
                                            <li>
                                                Shipping Charge<span>৳. {{ $shipping = 100 }}</span>
                                            </li>
                                            <li>
                                                <strong>Total</strong><span><strong> ৳. {{ $totalPayable = $sum + $shipping }} </strong></span>
                                            </li>
                                        </ul>
                                        <a class="theme-btn btn-style-two" href="{{ route('checkout') }}">Proceed To Checkout</a>
                                    </div>
                                    <!-- column End -->
                                </div>
                            </div>
                            <!-- cart_btns End -->
                        </div>
                    </div>
                    <!-- column End -->
                </div>
            </div>
        </div>
    </section>
@endsection
