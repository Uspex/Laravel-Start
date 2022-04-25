<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">

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
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    @stack('style')

</head>


<body class="nk-body npc-apps apps-only has-apps-sidebar npc-apps-chat">

<div class="nk-app-root">

    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="{{ route('welcome') }}" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png 2x') }}" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">{{ __('Войти') }}</h4>
                                    <div class="nk-block-des">
                                        <p>{{ __('Укажите ваш Логин и Пароль для авторизации') }}</p>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="email">{{ __('Укажите ваш E-mail') }}</label>
                                    </div>
                                    <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Укажите ваш email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror"  autofocus required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">{{ __('Укажите ваш пароль') }}</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input type="password" id="password" name="password" placeholder="{{ __('Ваш пароль') }}" class="form-control form-control-lg @error('password') is-invalid @enderror" autocomplete="current-password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Войти') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->

</div>

</body>
</html>
