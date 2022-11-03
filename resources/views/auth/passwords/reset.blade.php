@extends('layouts.app')

@section('content')

    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom">
                    <h6 class="alt-font font-weight-500 text-extra-dark-gray">{{ __('Указать новый пароль') }}</h6>

                    <form class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <label class="margin-15px-bottom">{{ __('E-Mail') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required @error('email') error @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="email" required autocomplete="email" autofocus>

                        <label class="margin-15px-bottom">{{ __('Пароль') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required @error('password') error @enderror" type="password" name="password" placeholder="{{ __('Новый пароль') }}" required autocomplete="new-password">

                        <label class="margin-15px-bottom">{{ __('Пароль еще раз') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required @error('password') error @enderror" type="password" name="password_confirmation" placeholder="{{ __('Новый пароль еще раз') }}" required autocomplete="new-password">

                        <button class="btn btn-medium btn-fancy btn-dark-gray w-100" type="submit">{{ __('Применить') }}</button>

                        <div class="text-right margin-20px-top mb-0">{{ __('У вас уже есть учетная запись?') }} <a class="btn btn-link  btn-medium text-extra-dark-gray" href="{{ route('login') }}">{{ __('Войти') }}</a></div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
