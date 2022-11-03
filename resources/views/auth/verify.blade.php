@extends('layouts.app')

@section('robots', 'noindex,follow')

@section('content')


<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-5 lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom">
                <h6 class="alt-font font-weight-500 text-extra-dark-gray">{{ __('Для входа подтвердите ваш Email') }}</h6>
                <div class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all" >
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш адрес электронной почты отправлено новое письмо для подтверждения.') }}
                        </div>
                    @endif

                    <div class="mb-2">{{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}</div>
                    <div class="mb-2">{{ __('Если вы не получили письмо') }},</div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы запросить его повторно') }}</button>.
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection
