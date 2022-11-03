@extends('layouts.app')

@section('content')

    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom">
                    <h6 class="alt-font font-weight-500 text-extra-dark-gray">{{ __('Восстановить пароль') }}</h6>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <label class="margin-15px-bottom">{{ __('Укажите ваш email') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required" type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Укажите ваш email') }}" required autocomplete="email" autofocus>

                        <button class="btn btn-medium btn-fancy btn-dark-gray w-100" type="submit">{{ __('Восстановить пароль') }}</button>

                        <div class="text-right margin-20px-top mb-0">{{ __('У вас уже есть учетная запись?') }} <a class="btn btn-link  btn-medium text-extra-dark-gray" href="{{ route('login') }}">{{ __('Войти') }}</a></div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
