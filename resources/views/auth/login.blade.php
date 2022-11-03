@extends('layouts.app')

@section('robots', 'noindex,follow')

@section('content')

    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom">
                    <h6 class="alt-font font-weight-500 text-extra-dark-gray">{{ __('Войти') }}</h6>
                    <form class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all" method="POST" action="{{ route('login') }}">
                        @csrf
                        @if(request()->get('redirect'))
                            <input type="hidden" name="redirect" value="{{ request()->get('redirect') }}">
                        @endif
                        @if(request()->get('rent_template'))
                            <input type="hidden" name="rent_template" value="{{ request()->get('rent_template') }}">
                        @endif

                        <div class="small margin-20px-bottom">{{ __('Еще нет учетной записи?') }} <a class="btn btn-link  btn-small text-extra-dark-gray" href="{{ route('register', request()->all()) }}">{{ __('Зарегистрироваться') }}</a></div>

                        <label class="margin-15px-bottom">{{ __('Укажите ваш email') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required" type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Укажите ваш email') }}">

                        <label class="margin-15px-bottom">{{ __('Пароль') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required" type="password" name="password" placeholder="{{ __('Пароль') }}">
                        <label class="margin-25px-bottom">
                            <input class="d-inline-block align-middle w-auto mb-0 margin-5px-right" type="checkbox" name="remember">
                            <span class="d-inline-block align-middle">{{ __('Запомнить меня') }}</span>
                        </label>
                        <button class="btn btn-medium btn-fancy btn-dark-gray w-100" type="submit">{{ __('Войти') }}</button>

                        @if (Route::has('password.request'))
                            <div class="text-right margin-20px-top mb-0"><a href="{{ route('password.request') }}" class="btn btn-link  btn-medium text-extra-dark-gray">{{ __('Восстановить пароль?') }}</a></div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
