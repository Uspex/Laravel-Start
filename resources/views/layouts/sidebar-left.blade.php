<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('dashboard') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png 2x') }}" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">{{ __('Главная') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->



                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">{{ __('Пользователи') }}</h6>
                    </li><!-- .nk-menu-heading -->

                    @ability('root', 'list_user')
                    <li class="nk-menu-item">
                        <a href="{{ route('user.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">{{ __('Пользователи') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endability


                    @ability('root', 'list_role')
                    <li class="nk-menu-item">
                        <a href="{{ route('role.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-security"></em></span>
                            <span class="nk-menu-text">{{ __('Роли') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endability

                    @ability('root', 'list_permission')
                    <li class="nk-menu-item">
                        <a href="{{ route('permission.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-policy"></em></span>
                            <span class="nk-menu-text">{{ __('Правила') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endability

                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
