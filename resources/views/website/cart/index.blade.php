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
                                        <tr>
                                            <td><img class="img-rounded"
                                                    src="{{ asset('website/assets/images/custom/tool1.png') }}"
                                                    alt="img"></td>
                                            <td>
                                                <p>
                                                    Finance Book
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    $ 59.99
                                                </p>
                                            </td>
                                            <td>
                                                <div class="quantity">
                                                    <input step="1" min="1" max="5" name="quantity"
                                                        value="1" title="Qty" class="input-text qty text"
                                                        size="4" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <p>
                                                    $ 59.99
                                                </p>
                                            </td>
                                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-rounded"
                                                    src="{{ asset('website/assets/images/custom/tool2.png') }}"
                                                    alt="img"></td>
                                            <td>
                                                <p>
                                                    Finance Book
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    $ 59.99
                                                </p>
                                            </td>
                                            <td>
                                                <div class="quantity">
                                                    <input step="1" min="1" max="5" name="quantity"
                                                        value="1" title="Qty" class="input-text qty text"
                                                        size="4" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <p>
                                                    $ 59.99
                                                </p>
                                            </td>
                                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-rounded"
                                                    src="{{ asset('website/assets/images/custom/tool3.png') }}"
                                                    alt="img"></td>
                                            <td>
                                                <p>
                                                    Finance Book
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    $ 59.99
                                                </p>
                                            </td>
                                            <td>
                                                <div class="cart_amount_wrap">
                                                    <div class="quantity">
                                                        <input step="1" min="1" max="5" name="quantity"
                                                            value="1" title="Qty" class="input-text qty text"
                                                            size="4" type="number">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>
                                                    $ 59.99
                                                </p>
                                            </td>
                                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- table End -->
                            </div>
                            <div class="row cart_btns">
                                <div class="col-lg-6 col-sm-12 res_mrg coupan_code">
                                    <form action="#">
                                        <input type="text" placeholder="Coupon Code" class="common_btn cart_page_btn1"
                                            name="coupon">
                                    </form>
                                    <a class="theme-btn btn-style-two cart_page_btn2" href="#">Apply coupon</a>
                                </div>
                                <!-- column End -->
                                <div class="col-lg-6 col-sm-12 text-end cont_btn">
                                    <a class="theme-btn btn-style-two" href="#">Continue Shopping </a>
                                </div>
                                <!-- column End -->
                            </div>
                            <!-- cart_btns End -->
                        </div>
                    </div>
                    <!-- column End -->
                </div>
            </div>
        </div>
    </section>
    <section class="estimate-section">
        <div class="container">
            <div class="estimate-form">
                <div class="heading_wrap animated slide">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">Estimate <span>Cost</span></h2>
                </div>
                <form method="post" action="#" class="default-form">
                    <div class="clearfix">
                        <!--Form Group-->
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <div class="select_option_one margin_btm">
                                    <select name="userSelect" id="userSelect" class="">
                                        <option value="1">Country</option>
                                        <option value="2">Unitate State</option>
                                        <option value="3">Canada</option>
                                        <option value="4">Bangladesh</option>
                                    </select>
                                </div>
                                <div class="select_option_one margin_btm">
                                    <select name="userSelect1" id="userSelect1" class="">
                                        <option value="1">State</option>
                                        <option value="2">Alabama</option>
                                        <option value="3">Alaska</option>
                                        <option value="4">Lowa</option>
                                    </select>
                                </div>
                                <div class="select_option_one margin_btm">
                                    <select name="userSelect2" id="userSelect2" class="">
                                        <option value="1">City</option>
                                        <option value="2">Bristol</option>
                                        <option value="3">Washington</option>
                                        <option value="4">Salem</option>
                                    </select>
                                </div>
                                <input type="text" name="check_zip" placeholder="Zip Code" class="margin_btm">
                                <div class="form-group get_btn">
                                    <a class="theme-btn btn-style-two" href="checkout.html">Get Total</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="cart_totals_area gray-bg cart-2">
                                    <ul>
                                        <li>
                                            Subtotal <span>$29.99</span>
                                        </li>
                                        <li>
                                            Shipping Charge<span>free</span>
                                        </li>
                                        <li>
                                            <strong>Total</strong><span><strong> $ 59.99 </strong></span>
                                        </li>
                                    </ul>
                                    <a class="theme-btn btn-style-two" href="checkout.html">Proceed To Checkout</a>
                                </div>
                                <!-- column End -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
