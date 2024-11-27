<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lawn Garden</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    @include('website.includes.style')
    @stack('styles')
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader"></div>
        @include('website.includes.header')
    </div>
    @yield('body')
    @include('website.includes.footer')
    @include('website.includes.script')
    @stack('scripts')
</body>


</html>
