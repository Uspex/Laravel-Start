<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base home template that especially build for developers and programmers.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Page Title  -->
    <title>@yield('title', config('app.name'))</title>

    <meta name="description" content="@yield('description', config('app.name'))">
    <meta name="keywords" content="@yield('keywords', config('app.name'))">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editors/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    @stack('style')

</head>


<body class="@yield('body_class', 'nk-body bg-lighter npc-general has-sidebar')">

    <div class="nk-app-root">
        <div class="nk-main ">
            @include('layouts.sidebar-left')

            <div class="nk-wrap ">
                @include('layouts.header')

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">

                            @include('common.messages')
                            <!-- begin:: Content -->
                            @yield('content')
                            <!-- end:: Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin:: Footer -->
    @include('layouts.scripts')
    <!-- end:: Footer -->

</body>
</html>
