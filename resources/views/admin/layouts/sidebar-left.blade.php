<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.dashboard') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('admin/images/logo.png') }}" srcset="{{ asset('admin/images/logo2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('admin/images/logo-dark.png') }}" srcset="{{ asset('admin/images/logo-dark2x.png 2x') }}" alt="logo-dark">
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
                        <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">{{ __('Главная') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">{{ __('Контент') }}</h6>
                    </li><!-- .nk-menu-heading -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.post.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-contact"></em></span>
                            <span class="nk-menu-text">{{ __('Блог') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.category.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-network"></em></span>
                            <span class="nk-menu-text">{{ __('Категории') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.tag.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tags"></em></span>
                            <span class="nk-menu-text">{{ __('Теги') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.page.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-property-alt"></em></span>
                            <span class="nk-menu-text">{{ __('Страницы') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">{{ __('Пользователи') }}</h6>
                    </li><!-- .nk-menu-heading -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.user.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-alt"></em></span>
                            <span class="nk-menu-text">{{ __('Пользователи') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.role.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-security"></em></span>
                            <span class="nk-menu-text">{{ __('Роли') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.permission.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-policy"></em></span>
                            <span class="nk-menu-text">{{ __('Правила') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->


                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
