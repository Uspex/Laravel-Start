@extends('layouts.app')

@section('robots', 'noindex,follow')

@section('content')

    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom">
                    <h6 class="alt-font font-weight-500 text-extra-dark-gray">{{ __('Давайте познакомимся') }}</h6>
                    <div>{{ __('Сейчас система создаст для Вас личный кабинет. Пожалуйста, введите свои данные и придумайте пароль') }}</div>

                    <form class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all" method="POST" action="{{ route('register') }}">
                        @csrf
                        @if(request()->get('redirect'))
                            <input type="hidden" name="redirect" value="{{ request()->get('redirect') }}">
                        @endif
                        @if(request()->get('rent_template'))
                            <input type="hidden" name="rent_template" value="{{ request()->get('rent_template') }}">
                        @endif

                        <label class="margin-15px-bottom">{{ __('Ваше Имя') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required @error('name') error @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('Укажите ваш Имя') }}">


                        <label class="margin-15px-bottom">{{ __('Ваше Email') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required @error('email') error @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Укажите ваш E-mail') }}">


                        <label class="margin-15px-bottom">{{ __('Пароль') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required" type="password" name="password" placeholder="{{ __('Пароль') }}">

                        <label class="margin-15px-bottom">{{ __('Пароль еще раз') }} <span class="required-error text-radical-red">*</span></label>
                        <input class="small-input bg-white margin-20px-bottom required" type="password" name="password_confirmation" placeholder="{{ __('Пароль еще раз') }}">

                        <button class="btn btn-medium btn-fancy btn-dark-gray w-100" type="submit">{{ __('Отправить и продолжить') }}</button>


                        <div class="text-right margin-20px-top mb-0">{{ __('У вас уже есть учетная запись?') }} <a class="btn btn-link  btn-medium text-extra-dark-gray" href="{{ route('login', request()->all()) }}">{{ __('Войти') }}</a></div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection

