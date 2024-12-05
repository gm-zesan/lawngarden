@extends('website.master')

@push('styles')
    <style>
        .list-group .active{
            background-color: #7da500;
            border-color: #7da500;
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
                        <h1>@yield('page-title')</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>@yield('page-title')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('customer.profile') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.profile' ? 'active' : '' }}">Profile</a>
                        <a href="{{ route('customer.order') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.order' ? 'active' : '' }}">My Order</a>
                        <a href="{{ route('customer.blog-post') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.blog-post' ? 'active' : '' }}">Post A Blog</a>
                        <a href="{{ route('customer.blog') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.blog' ? 'active' : '' }}">My Blog</a>
                        <a href="{{ route('customer.review') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.review' ? 'active' : '' }}">Give A Review</a>
                        <a href="{{ route('customer.logout') }}" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
