@extends('layouts.app')

@section('title', $meta['title'])
@section('description', $meta['description'])
@section('keywords', $meta['keywords'])
@section('meta_image', $meta['image'])

@section('content')
    <!-- start section -->
    <section class="p-0">
        <div class="swiper-container white-move mobileoff-fullscreen-top-space md-h-600px sm-h-500px" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('https://placehold.it/1920x900');">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column">
                                <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">Лучшее решение 2021 года</p>
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">Супермаркет готовых сайтов</h2>
                                <div class="d-inline-block">
                                    <a href="#home_application" class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom">Заказать консультацию</a>
                                    <a href="#" class="btn btn-link btn-large text-white top-minus-5px font-weight-400">Технология сайтов profius</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('https://placehold.it/1920x900');">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column">
                                <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">Всё уже готово к запуску</p>
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">Правильные тексты и картинки</h2>
                                <div class="d-inline-block">
                                    <a href="#home_application" class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom">Заказать консультацию</a>
                                    <a href="#" class="btn btn-link btn-large text-white top-minus-5px font-weight-400">Технология сайтов profius</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('https://placehold.it/1920x900');">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column">
                                <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">Легко рекламируйте сайт в Интернете</p>
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">Экспресс-настройка рекламы Google / Facebook</h2>
                                <div class="d-inline-block">
                                    <a href="#home_application" class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom">Заказать консультацию</a>
                                    <a href="#" class="btn btn-link btn-large text-white top-minus-5px font-weight-400">Технология сайтов profius</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-light-pagination"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center align-items-center wow animate__fadeIn">
                <div class="col-12 col-xl-4 col-lg-4 col-sm-7 d-flex flex-column text-center text-lg-left md-margin-6-rem-bottom">
                    <div class="margin-20px-bottom sm-margin-10px-bottom">
                        <span class="alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500">Новые клиенты из интернета – легко!</span>
                    </div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 margin-20px-bottom md-margin-30px-bottom xs-w-90 mx-auto mx-sm-0">Получите сайт с готовыми текстами и картинками за 1 минуту</h5>
                    <div class="text-center text-sm-left">Вам нужен эффективный сайт, способный приводить много новых клиентов? Мы его создали – купите и используйте уже сегодня! Это продающий сайт, способный вызывать доверие и побуждать посетителей позвонить Вам или сделать заказ</div>
                    <div class="mx-auto mx-lg-0 mt-4">
                        <a href="#" class="btn btn-fancy btn-small btn-transparent-light-gray">Discover litho</a>
                    </div>
                </div>
                <div class="col-12 col-xl-6 offset-xl-2 col-lg-8 col-sm-5 wow animate__fadeIn" data-wow-delay="0.1s">
                    <img src="https://placehold.it/850x653" alt="" />
                    <a href="https://www.youtube.com/watch?v=y8T5mjoAy5s" class="popup-youtube absolute-middle-center video-icon-box video-icon-large">
                            <span>
                                <span class="video-icon bg-white box-shadow-extra-large">
                                    <i class="icon-simple-line-control-play text-neon-orange"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                    </span>
                                </span>
                            </span>
                    </a>
                </div>
            </div>

            <div class="row m-t-100">
                <div class="col">
                    <div class="swiper-container black-move swiper-pagination-bottom" data-slider-options='{ "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination", "clickable": true, "dynamicBullets": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 1 } } }'>
                        <div class="swiper-wrapper">
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Идеально на экранах смартфонов</span>
                                        <p>Более 70% клиентов приходят из мобильного трафика – и сайты прекрасно работают</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Простое управление и редактирование</span>
                                        <p>Очень важно, что Вы сможете вносить правки самостоятельно, без чужой помощи</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Профессиональные тексты и смыслы</span>
                                        <p>Вам не придётся обращаться к маркетологу и копирайтеру</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Автоматический хостинг</span>
                                        <p>Вам не придётся организовывать хостинг – система разместит сайт на хостинге Profius</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Система обработки заявок и лидов</span>
                                        <p>Удобное отображение полученных заказов в личном кабинете</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Оповещения в мессенджер</span>
                                        <p>Получайте заявки с сайта сразу в Viber / Telegram</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Проверенная эффективность</span>
                                        <p>Структура сатов неоднократно доказала свою способность приводить новых клиентов</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Привлекательные иллюстрации</span>
                                        <p>Картинки и фото оптимально демонстрируют услуги – а при желании Вы сможете легко вставить свои</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Не требуется чужая помощь</span>
                                        <p>Забудьте про дизайнера, верстальщика, копирайтера, маркетолога – сэкономьте деньги и время!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                            <!-- start team member slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="alt-font f-18 line-height-16px line-height-16px font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Продающая структура модулей</span>
                                        <p>Сайты созданы по доказанным маркетинговым технологиям высокой конверсии</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end team member slider item -->
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- end slider pagination -->
                    </div>
                    <div class="swiper-button-next-nav swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section bg-light-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Сайтотека profius</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95">300+ готовых сайтов. Вот самые популярные за месяц:</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 wow animate__fadeIn">
                    <!-- start slider -->
                    <div class="swiper-container black-move swiper-pagination-bottom" data-slider-options='{ "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination", "clickable": true, "dynamicBullets": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 1 } } }'>
                        <div class="swiper-wrapper">

                            @foreach($top_template as $template)

                                <!-- start interactive banner item -->
                                    <div class="swiper-slide">
                                        <div class="product-box margin-25px-bottom xs-margin-15px-bottom">
                                            <!-- start product image -->
                                            <div class="product-image border-radius-6px">
                                                <a href="{{ route('template.show', $template->slug) }}">
                                                    <img  src="{{ asset($template->img) }}" alt="{{ $template->name }} image">
                                                    <span class="product-badge red">{{ __('New') }}</span>
                                                </a>
                                                {{--            <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>--}}
                                                <div class="product-hover-bottom text-center padding-30px-tb">
                                                    <a href="{{ route('template.demo', $template->slug) }}" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ __('Demo сайта') }}"><i class="feather icon-feather-zoom-in"></i></a>
                                                </div>
                                            </div>
                                            <!-- end product image -->
                                            <!-- start product footer -->
                                            <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                                <a href="{{ route('template.show', $template->slug) }}" class="text-extra-dark-gray font-weight-500 d-inline-block">{{ $template->name }}</a>
                                                <div class="product-price text-medium">
                                                    <span title="{{ __('Купить') }}" class="pr-2"><i class="fas fa-cart-arrow-down"></i> {{ __('common.price', ['price' => $template->price, 'currency_symbol' => $settings['currency_symbol'] ]) }}</span>
                                                    <span title="{{ __('Аренда') }}"><i class="far fa-clock"></i> {{ __('common.price', ['price' => $template->rent, 'currency_symbol' => $settings['currency_symbol'] ]) }}
                                                </div>
                                                <a href="{{ route('template.show', $template->category_slug) }}" class="text-medium font-weight-500">{{ $template->category_name }}</a>
                                            </div>
                                            <!-- end product footer -->
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next-nav swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>
                    <!-- end slider -->
                </div>

                <div class="col-12 text-center wow animate__fadeIn">
                    <a  href="javascript:void(0)" class="btn btn-large btn-transparent-dark-gray d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr mr-lg-4"><i class="feather icon-feather-search"></i> {{ __('Найти сайт') }}</a>
                    <a href="#" class="btn btn-large btn-dark-gray d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr">{{ __('Перейти в каталог') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start page title -->
    <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('https://placehold.it/1920x1100');">
        <div class="opacity-light bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom">Обойдитесь без услуг маркетолога, копирайтера и программиста</h1>
                    <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Сэкономьте $200-300</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="position-relative background-no-repeat parallax overlap-height md-no-overlap-section" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('assets/images/our-process-bg-2.jpg') }}');">
        <div class="opacity-medium bg-white"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mx-lg-auto overlap-gap-section sm-margin-30px-bottom">
                    <div class="media align-items-center alt-font text-extra-medium font-weight-500 margin-30px-bottom">
                        <span class="w-30px h-1px bg-fast-blue margin-20px-right"></span>
                        <div class="media-body text-fast-blue">Основная идея сайтов Profius</div>
                    </div>
                    <h5 class="alt-font font-weight-500 text-extra-dark-gray m-0">Сайт полностью готов к работе. Просто укажите там свои контакты</h5>
                </div>
                <div class="col-12 col-lg-5 mx-lg-auto col-md-6 overlap-gap-section">
                    <p class="w-90">Конечно же, в любой момент Вы сможете отредактировать все тексты и картинки по своему усмотрению – удобный редактор контента, понятная админ-панель, подробные видеоинструкции ждут Вас с нетерпением!</p>
                    <a href="https://www.youtube.com/watch?v=y8T5mjoAy5s" class="popup-youtube video-icon-box video-icon-small position-relative margin-20px-top d-inline-block">
                        <span>
                            <span class="video-icon bg-fast-blue margin-15px-right">
                                <i class="icon-simple-line-control-play text-white"></i>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-fast-blue opacity-7"></span>
                                    <span class="video-icon-sonar-afr bg-fast-blue"></span>
                                </span>
                            </span>
                            <span class="video-icon-text alt-font text-medium text-extra-dark-gray text-uppercase text-decoration-line-bottom d-inline-block font-weight-500 align-middle">Видеообзор</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray overflow-visible wow animate__fadeIn">
        <div class="container">
            <div class="z-index-6 overlap-section margin-8-rem-bottom sm-margin-7-rem-bottom">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                    <!-- start feature box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                        <div class="feature-box text-left h-100 feature-box-dark-hover box-shadow-small border-radius-5px bg-white overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Cursor-Click2 icon-large text-fast-blue margin-35px-bottom md-margin-15px-bottom"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-extra-medium">Заявки в viber/telegram</span>
                                <p>Подключите свой мессенджер к сайту и мгновенно получайте оповещения о новых заказах</p>
                                <a href="#" class="btn btn-extra-large btn-link text-extra-dark-gray">Подробнее</a>
                            </div>
                            <div class="feature-box-overlay bg-fast-blue"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="feature-box text-left h-100 feature-box-dark-hover box-shadow-small border-radius-5px bg-white overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Archery-2 icon-large text-fast-blue margin-35px-bottom md-margin-15px-bottom"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-extra-medium">Собственный домен</span>
                                <p>Купите новое доменное имя или используйте старое – и легко подключите его к сайту</p>
                                <a href="#" class="btn btn-extra-large btn-link text-extra-dark-gray">Подробнее</a>
                            </div>
                            <div class="feature-box-overlay bg-fast-blue"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-sm-8 wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="feature-box text-left h-100 feature-box-dark-hover box-shadow-small border-radius-5px bg-white overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Medal-2 icon-large text-fast-blue margin-35px-bottom md-margin-15px-bottom"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-extra-medium">Хостинг на 1 год</span>
                                <p>Пользуйтесь бесплатно хостингом Profius первый год, а в будущем – продлите за $10</p>
                                <a href="#" class="btn btn-extra-large btn-link text-extra-dark-gray">Подробнее</a>
                            </div>
                            <div class="feature-box-overlay bg-fast-blue"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 offset-lg-1 d-flex flex-column flex-md-row align-items-center sm-margin-20px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <span class="w-30 h-1px bg-fast-blue margin-25px-right sm-w-90px sm-no-margin-right sm-margin-20px-bottom d-none d-md-inline-block"></span>
                    <h2 class="vertical-counter d-inline-flex font-weight-600 letter-spacing-minus-1px text-extra-dark-gray md-letter-spacing-normal mb-0" data-to="36500000"></h2>
                </div>
                <div class="col-12 col-lg-6 col-sm-8 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                    <h6 class="alt-font font-weight-500 text-extra-dark-gray text-center text-md-left d-inline-block w-90 mb-0 md-w-100">заявок принесли сайты Profus за последний год нашим заказчикам. Средняя конверсия – 15-35%</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative overflow-visible wow animate__fadeIn" data-wow-delay="0.4s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 margin-70px-top lg-margin-30px-top md-margin-50px-bottom">
                    <div class="w-70 border-radius-6px overflow-hidden position-relative">
                        <img src="https://placehold.it/800x945" alt="" />
                        <div class="opacity-extra-medium bg-gradient-sky-blue-pink"></div>
                    </div>
                    <div class="position-absolute right-15px bottom-0px w-70" data-parallax-layout-ratio="1.1">
                        <img class="border-radius-6px" src="https://placehold.it/800x945" alt="" />
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="alt-font text-extra-medium font-weight-500 margin-30px-bottom"><span class="w-30px h-1px bg-fast-blue d-inline-block align-middle margin-20px-right"></span><span class="text-fast-blue d-inline-block">Вашей темы пока нет в Каталоге Profius?</span></div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom w-95">Купите Сайт-Хамелеон за $25 и заполните самостоятельно!</h5>
                    <p class="w-95">Это универсальный шаблон сайта. Купите его и используйте для любой бизнес-темы – получится быстро и эффективно. В шаблон включена инструкция по заполнению каждого модуля – опирайтесь на неё, чтобы обеспечить хорошую конверсию своего сайта.</p>
                    <div class="btn-dual margin-15px-top d-inline-block"><a href="{{ route('template.show', 'xameleon') }}" class="btn btn-medium btn-dark-gray btn-slide-right-bg">Пример ХАМЕЛЕОНА<span class="bg-white"></span></a><a href="{{ route('template.show', 'xameleon') }}" class="btn btn-medium btn-transparent-dark-gray btn-slide-right-bg">КУПИТЬ ЗА $25<span class="bg-extra-dark-gray"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray pb-0 wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-sm-8 text-center margin-6-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font text-extra-medium margin-20px-bottom d-block text-fast-blue font-weight-500">– сайты, проверенные в реальных условиях –</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500 d-inline-block">Структура сайтов Profius многократно доказала свою эффективность</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="reading" class="p-0 bg-extra-dark-gray wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 padding-8-half-rem-all lg-padding-5-half-rem-all xs-padding-15px-lr" style="background: url('{{ asset('assets/images/our-process-bg-4.png') }}') no-repeat top -45px left;">
                    <h5 class="alt-font font-weight-500 text-white margin-4-rem-bottom ">Частые вопросы</h5>
                    <div class="panel-group accordion-event accordion-style-02" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                        <!-- start accordion item -->
                        <div class="panel bg-transparent">
                            <div class="panel-heading border-color-white-transparent active-accordion">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
                                    <div class="panel-title">
                                        <span class="alt-font text-white d-inline-block">Какие достоинства у сайтов Profius?</span>
                                        <i class="text-white feather icon-feather-minus"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show" data-parent="#accordion1">
                                <div class="panel-body">Это сайты, где всё нацелено на то, чтобы продать Вас (получить звонок или заявку клиента) – ничего лишнего и громоздкого. Быстро загружаются, отлично смотрятся на любых экранах. Очень удобно редактируются, просто разобраться даже новичкам и "чайникам". А самое главное, не нужно создавать тексты и искать картинки – всё уже готово к мгновенному запуску.</div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="panel bg-transparent">
                            <div class="panel-heading border-color-white-transparent">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
                                    <div class="panel-title">
                                        <span class="alt-font text-white d-inline-block">Чем сайты Profius лучше сайтов на движках типа WordPress / Joomla?</span>
                                        <i class="indicator text-white feather icon-feather-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion1">
                                <div class="panel-body">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever when an unknown printer took a galley. Lorem ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="panel bg-transparent">
                            <div class="panel-heading border-color-white-transparent">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
                                    <div class="panel-title">
                                        <span class="alt-font text-white d-inline-block">Есть много  сайтов на онлайн-конструкторах типа WIX / Weblium / Platforma LP / Landing Generator – почему ваши лучше?</span>
                                        <i class="indicator text-white feather icon-feather-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion1">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor incididunt ut labore et dolore ut enim ad minim veniam, nostrud exercitation. Lorem ipsum dolor sit amet, consectetur eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                    </div>
                </div>
                <div class="col-12 col-lg-6 cover-background md-h-550px sm-h-400px xs-h-300px" style="background-image: url('https://placehold.it/1890x1345');">
                    <a href="https://www.youtube.com/watch?v=y8T5mjoAy5s" class="popup-youtube absolute-middle-center video-icon-box video-icon-large">
                            <span>
                                <span class="video-icon bg-white box-shadow-extra-large">
                                    <i class="icon-simple-line-control-play text-gradient-light-purple-light-orange"></i>
                                </span>
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 md-margin-50px-bottom wow animate__fadeInLeft" data-wow-delay="0.4s">
                    <div class="outside-box-left text-right">
                        <img src="https://lithohtml.themezaa.com/images/our-process-03.png" alt="our process03" />
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-50px-bottom xs-margin-30px-bottom">Поможем с настройкой интернет-рекламы</h5>
                    <!-- start feature box item -->
                    <div class="alt-font font-weight-500 d-inline-block text-extra-medium margin-15px-bottom"><span class="w-30px h-1px d-inline-block align-middle bg-fast-blue margin-15px-right"></span><span class="text-fast-blue d-inline-block">Контекстная реклама Google ..... $30</span></div>
                    <p class="w-75 lg-w-95">Закажите экспресс-настройку рекламы Google, если Вашу услуга достаточно популярна и клиенты активно ищут её в поисковиках. Вы будете платить только за клики целевых клиентов, это очень эффективный способ рекламы</p>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="alt-font font-weight-500 d-inline-block text-extra-medium margin-15px-bottom margin-20px-top"><span class="w-30px h-1px d-inline-block align-middle bg-fast-blue margin-15px-right"></span><span class="text-fast-blue d-inline-block">Реклама Facebook / Instagram ..... $30</span></div>
                    <p class="w-75 lg-w-95">Если Ваша целевая аудитория часто бывает в соцсетях, но ещё не ищет услугу в поисковике – "достучитесь" до неё через Facebook / Instagram и получите поток заинтересованных потенциальных клиентов</p>
                    <!-- end feature box item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="padding-five-lr bg-light-gray wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-6-rem-bottom md-margin-5-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font text-extra-medium margin-20px-bottom d-block text-fast-blue font-weight-500">– у Вас всё легко получится –</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500">Простая и дружелюбная система Profius, рассчитанная на интернет-новичков</h5>
                </div>
            </div>
            <div class="row">
                <div class="col position-relative">
                    <div class="swiper-container black-move swiper-pagination-bottom" data-slider-options='{ "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination", "clickable": true, "dynamicBullets": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 2 } } }'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/home/news_525x350_1.jpg') }}" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom">Outstanding services</span>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    <div class="h-1px bg-medium-light-gray margin-25px-bottom w-100"></div>
                                    <a class="text-small text-extra-dark-gray font-weight-500 text-uppercase alt-font d-block" href="what-we-offers.html">more info<i class="ti-arrow-right float-right"></i></a>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/home/news_525x350_2.jpg') }}" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom">Outstanding services</span>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    <div class="h-1px bg-medium-light-gray margin-25px-bottom w-100"></div>
                                    <a class="text-small text-extra-dark-gray font-weight-500 text-uppercase alt-font d-block" href="what-we-offers.html">more info<i class="ti-arrow-right float-right"></i></a>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/home/news_525x350_3.jpg') }}" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom">Outstanding services</span>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    <div class="h-1px bg-medium-light-gray margin-25px-bottom w-100"></div>
                                    <a class="text-small text-extra-dark-gray font-weight-500 text-uppercase alt-font d-block" href="what-we-offers.html">more info<i class="ti-arrow-right float-right"></i></a>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <img src="https://placehold.it/800x548" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom">Outstanding services</span>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    <div class="h-1px bg-medium-light-gray margin-25px-bottom w-100"></div>
                                    <a class="text-small text-extra-dark-gray font-weight-500 text-uppercase alt-font d-block" href="what-we-offers.html">more info<i class="ti-arrow-right float-right"></i></a>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- end slider pagination -->
                    </div>
                    <div class="swiper-button-next-nav swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="padding-eight-tb cover-background parallax xs-padding-50px-tb wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url('https://placehold.it/1920x1120');">
        <div class="opacity-medium bg-gradient-fast-blue-purple"></div>
        <div class="container">
            <div id="home_application" class="row justify-content-center">
                <div class="col-12 col-xl-7 col-lg-8 col-md-10 text-center">
                    <h3 class="alt-font text-white font-weight-600 margin-35px-bottom">Закажите консультацию и получите подарок</h3>
                    <p class="text-white opacity-7 alt-font text-large w-80 mx-auto line-height-32px margin-45px-bottom sm-w-100">Мы созвонимся с Вами в удобное для диалога время, ответим на все вопросы, поделимся опытом и статистикой. А в благодарность за интерес – предложим выбрать полезный подарок</p>
                    <a href="#" data-target="#application_modal" data-toggle="modal" class="btn btn-large btn-white btn-rounded btn-box-shadow">Заказать консультацию</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
