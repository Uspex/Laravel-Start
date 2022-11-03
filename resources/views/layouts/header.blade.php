<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom border-color-black-transparent header-light fixed-top top-space header-reverse-scroll @yield('header_navbar')">
        <div class="container nav-header-container">
            <div class="col-6 col-lg-2 mr-auto pl-lg-0">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo.png') }}" class="default-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo.png') }}" class="alt-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo.png') }}" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order px-lg-0">
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font text-uppercase">
                        <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">{{ __('Главная') }}</a></li>
                        <li class="nav-item"><a href="{{ route('blog.index') }}" class="nav-link">{{ __('Блог') }}</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">{{ __('Контакты') }}</a></li>

                        @if(auth()->user())

                            @if(auth()->user()->hasRole('client'))
                                <li class="nav-item"><a href="{{ route('client.dashboard') }}" class="nav-link">{{ __('Личный кабинет') }}</a></li>
                            @else
                                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link">{{ __('Админ панель') }}</a></li>
                            @endif

                            <li class="nav-item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">{{ __('header.profile.logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('header.profile.login') }}</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
