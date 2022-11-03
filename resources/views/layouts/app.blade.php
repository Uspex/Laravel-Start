<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main Meta information-->
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Profius">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:domain" content="{{ request()->getHttpHost() }}">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@...">

    @if(\Route::currentRouteName() != 'register')
        <meta property="og:image" content="@yield('meta_image', asset('assets/images/meta.jpg'))">
        <meta name="twitter:image" content="@yield('meta_image', asset('assets/images/meta.jpg'))">

        <link rel="image_src" href="@yield('meta_image', asset('assets/images/meta.jpg'))" />
    @endif




    @if(\Route::currentRouteName() == 'homepage')
        <link rel="canonical" href="{{ route('homepage') }}">
    @else
        <link rel="canonical" href="{{ url()->current() }}">
    @endif

    <meta name="robots" content="@yield('robots', 'index, follow')"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-checkbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link href="{{ asset('assets/css/custom.css') }}?{{ \Carbon\Carbon::now()->timestamp }}" rel="stylesheet">

    @stack('style')

</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    @include('layouts.header')
    <!-- end header -->


    @include('common.messages')

    <!-- begin:: Content -->
    @yield('content')
    <!-- end:: Content -->

    @if(!isset($hide_footer))
        <!-- begin:: Footer -->
        @include('layouts.footer')
        <!-- end:: Footer -->
    @endif

    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->

    <!-- start Footer -->
    @include('layouts.scripts')
    <!-- end Footer -->

</body>
</html>
