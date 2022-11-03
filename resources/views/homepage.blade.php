@extends('layouts.app')

@section('title', $meta['title'])
@section('description', $meta['description'])
@section('keywords', $meta['keywords'])
@section('meta_image', $meta['image'])
@section('header_navbar', 'bg-white navbar-boxed')

@section('content')
    <!-- start section -->
    <section class="p-0 parallax overlap-height" data-parallax-background-ratio="0.5" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container position-relative">
            <div class="row full-screen md-landscape-h-600px">
                <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-10 d-flex flex-column justify-content-center">
                    <h2 class="alt-font text-white line-height-65px font-weight-500 letter-spacing-minus-1px margin-65px-bottom sm-line-height-50px sm-margin-25px-bottom">We provide <span class="text-gradient-light-purple-light-orange font-weight-600 d-inline-block">reliable business</span> consulting help</h2>
                    <div class="alt-font text-medium font-weight-500 text-uppercase letter-spacing-2px d-flex">
                        <span class="flex-shrink-0 w-40px h-1px bg-white opacity-6 align-self-center margin-25px-right"></span><span class="flex-grow-1 text-white opacity-6">Solution for your business</span>
                    </div>
                </div>
                <div class="col-12 col-xl-4 offset-xl-3 col-lg-4 col-md-5 d-flex flex-column justify-content-center text-center">
                    <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-double-large position-relative">
                            <span>
                                <span class="video-icon border-all border-width-3px border-color-white">
                                    <i class="icon-simple-line-control-play text-white"></i>
                                </span>
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center wow animate__fadeIn">
                <div class="col-12 col-xl-3 col-lg-4 col-sm-7 d-flex flex-column text-center text-lg-start md-margin-6-rem-bottom">
                    <div class="margin-20px-bottom sm-margin-10px-bottom">
                        <span class="alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500">About company</span>
                    </div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 margin-20px-bottom md-margin-30px-bottom xs-w-90 mx-auto mx-sm-0">We combine design, thinking and technical</h5>
                    <div class="mt-auto mx-auto mx-lg-0">
                        <a href="index.html" class="btn btn-fancy btn-small btn-black">Discover litho</a>
                    </div>
                </div>
                <div class="col-12 col-xl-7 offset-xl-2 col-lg-8 last-paragraph-no-margin wow animate__fadeIn" data-wow-duration="0.3">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">
                        <!-- start feature box item -->
                        <div class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Money-Bag icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Effective strategy</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Gear-2 icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull customize</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Talk-Man icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Customer satisfaction</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Cursor-Click2 icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">No coding required</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                    <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Recent portfolio</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Hand crafted pixel perfect designs for your projects</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid padding-6-rem-lr md-padding-2-rem-lr xs-padding-15px-lr">
            <div class="row">
                <div class="col-12 filter-content">
                    <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeIn">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-01.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-01.html"><span class="alt-font text-extra-dark-gray font-weight-500">Magazine Cover</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Photography</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item logos wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-02.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-02.html"><span class="alt-font text-extra-dark-gray font-weight-500">Biolator Series</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Identity</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item branding logos wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-03.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-03.html"><span class="alt-font text-extra-dark-gray font-weight-500">Potato Oslands</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Branding</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item photography branding wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-04.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-04.html"><span class="alt-font text-extra-dark-gray font-weight-500">Daimler Financial</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Branding</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item branding wow animate__fadeIn">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-05.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-05.html"><span class="alt-font text-extra-dark-gray font-weight-500">Skoda Corporate</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Photography</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item photography logos wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-01.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-01.html"><span class="alt-font text-extra-dark-gray font-weight-500">Jeremy Dupont</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Brochure</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item graphics wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-02.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-02.html"><span class="alt-font text-extra-dark-gray font-weight-500">Bill Gardner</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Branding</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__logos fadeIn" data-wow-delay="0.6s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="portfolio-image bg-gradient-fast-blue-purple">
                                    <img src="https://via.placeholder.com/800x650" alt="" />
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                        <div class="portfolio-icon">
                                            <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                            <a href="single-project-page-03.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-03.html"><span class="alt-font text-extra-dark-gray font-weight-500">The Aparthotel</span></a>
                                    <span class="text-medium d-block margin-one-bottom">Development</span>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section cover-background" style="background-image:url('https://via.placeholder.com/1920x1100');">
        <div class="opacity-extra-medium-2 bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative text-center overlap-gap-section">
                    <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large position-relative d-inline-block margin-3-half-rem-bottom wow animate__bounceIn">
                            <span>
                                <span class="video-icon bg-neon-blue">
                                    <i class="icon-simple-line-control-play text-white"></i>
                                    <span class="video-icon-sonar"><span class="video-icon-sonar-afr bg-neon-blue"></span></span>
                                </span>
                            </span>
                    </a>
                    <h4 class="alt-font text-white font-weight-600 margin-45px-bottom md-margin-35px-bottom xs-margin-25px-bottom wow animate__fadeIn">Beautifully simple handcrafted templates for your website</h4>
                    <span class="text-white alt-font text-uppercase letter-spacing-1px wow animate__fadeIn">unlimited power and customization</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                    <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">What people are saying</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">What our valuable customer are saying about us?</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- start testimonial item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                        <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                            <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud exercitation ullamco.</p>
                        </div>
                        <div class="author padding-20px-lr">
                            <img class="rounded-circle w-60px h-60px margin-15px-right" src="https://via.placeholder.com/125x125" alt="">
                            <div class="d-inline-block align-middle">
                                <span class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Herman Miller</span>
                                <span class="d-block text-small">ThemeZaa Design</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonial item -->
                <!-- start testimonial item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                        <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                            <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud exercitation ullamco.</p>
                        </div>
                        <div class="author padding-20px-lr">
                            <img class="rounded-circle w-60px h-60px margin-15px-right" src="https://via.placeholder.com/125x125" alt="">
                            <div class="d-inline-block align-middle">
                                <span class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Jeremy Girard</span>
                                <span class="d-block text-small">Microsoft Corporation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonial item -->
                <!-- start testimonial item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                        <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                            <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud exercitation ullamco.</p>
                        </div>
                        <div class="author padding-20px-lr">
                            <img class="rounded-circle w-60px h-60px margin-15px-right" src="https://via.placeholder.com/125x125" alt="">
                            <div class="d-inline-block align-middle">
                                <span class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Alexander Harvard</span>
                                <span class="d-block text-small">ThemeZaa Design</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonial item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-1-rem-bottom wow animate__fadeIn">
                    <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Get the latest insights</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Stay updated with the latest trends and business news</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 blog-content px-sm-0">
                    <ul class="blog-classic blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item wow animate__fadeIn">
                            <div class="blog-post">
                                <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                    <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/526x368" alt=""/></a>
                                </div>
                                <div class="post-details">
                                    <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">The best way to predict the future is to create it</a>
                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="blog-post">
                                <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                    <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/526x368" alt=""/></a>
                                </div>
                                <div class="post-details">
                                    <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Winners make a habit of facturing positive</a>
                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="blog-post">
                                <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                    <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/526x368" alt=""/></a>
                                </div>
                                <div class="post-details">
                                    <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Computers are to design as microwaves are to cooking</a>
                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="blog-post">
                                <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                    <a href="blog-post-layout-05.html"><img src="https://via.placeholder.com/526x368" alt=""/></a>
                                </div>
                                <div class="post-details">
                                    <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom"> A company is only as good as the people it keeps</a>
                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
