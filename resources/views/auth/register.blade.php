@extends('layouts.app')

@section('body_class', 'nk-body npc-default pg-auth')

@section('content')

    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="{{ route('homepage') }}" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo-dark">
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">{{ __('Зарегистрироваться') }}</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label class="form-label" for="name">{{ __('Имя') }}</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{ __('Укажите ваше имя') }}" class="form-control form-control-lg @error('name') is-invalid @enderror" autocomplete="name" autofocus required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">{{ __('Ваш email') }}</label>
                                    <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Укажите ваш email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" autocomplete="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">{{ __('Пароль') }}</label>
                                    <div class="form-control-wrap">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" autocomplete="new-password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password-confirm">{{ __('Пароль еще раз') }}</label>
                                    <div class="form-control-wrap">
                                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control form-control-lg" autocomplete="new-password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Зарегистрироваться') }}</button>
                                </div>
                            </form>
                            <div class="form-note-s2 text-center pt-4"> {{ __('Если у вас уже есть аккаунт?') }} <a href="{{ route('login') }}"><strong>{{ __('Войти') }}</strong></a></div>
                        </div>
                    </div>
                </div>
                <div class="nk-footer nk-auth-footer-full">
                    <div class="container wide-lg">
                        <div class="row g-3">
                            <div class="col-lg-6 order-lg-last">
                                <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="nk-block-content text-center text-lg-left">
                                    <p class="text-soft">&copy; 2020 CryptoLite. All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
@endsection
