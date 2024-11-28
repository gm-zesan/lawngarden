@extends('website.master')

@section('title')
    Customer Dashboard Page
@endsection

@push('styles')
    <style>
        .form-title {
            padding: 1.2rem 2rem;
        }

        .form-title h4 {
            color: #7da500;
            font-weight: 900;
            text-align: center;
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
                        <h1>Login</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="contact_detail seaction_margin">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="contact_form  animated fades">
                        <h3 class="heading_c">Login <span>Form</span></h3>
                        <p> Welcome back to Lawn Garden. Please login to your account.</p>
                        <p class="text-danger text-center">{{ Session('message') }}</p>
                        <form action="{{ route('customer.login') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                <input type="email" placeholder="Email address" class="form-control" name="email" id="email" />
                                <span class="text-danger">
                                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                                </span>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="password" placeholder="Password" class="form-control" name="password" id="password" />
                                <span class="text-danger">
                                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                                </span>
                            </div>
                            <div class="col-12">
                                <input type="submit" id="submit" class="button w-100" value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="contact_form  animated fades">
                        <h3 class="heading_c">Registration <span>Form</span></h3>
                        <p>Welcome to Lawn Garden. Please register an account. </p>
                        <form action="{{ route('customer.register') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                <input type="text" placeholder="Full Name" class="form-control" name="name"
                                    id="name" />
                                <span class="text-danger">
                                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                                </span>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="email" placeholder="Email address" class="form-control" name="email"
                                    id="email" />
                                <span class="text-danger">
                                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                                </span>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="text" placeholder="Mobile no." class="form-control" name="mobile"
                                    id="mobile" />
                                <span class="text-danger">
                                    {{ $errors->has('mobile') ? $errors->first('mobile') : '' }}
                                </span>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="password" placeholder="Password" class="form-control" name="password"
                                    id="password" />
                                <span class="text-danger">
                                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                                </span>
                            </div>

                            <div class="col-12">
                                <input type="submit" id="submit" class="button w-100" value="Register" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
