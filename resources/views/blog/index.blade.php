@extends('layouts.app')

@section('title', $meta['title'])
@section('description', $meta['description'])
@section('keywords', $meta['keywords'])


@section('content')

    <!-- start page title -->
    <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('assets/images/portfolio-bg2.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center">
                <div class="col-12 col-xl-10 text-center d-flex justify-content-center flex-column">
                    <h2 class="alt-font h5 text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">{{ __('Блог') }}</h2>
                    <h1 class="text-extra-dark-gray h3 alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">{{ $meta['page_title'] }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-light-gray padding-ten-lr pt-0 xl-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 blog-content sm-no-padding-lr">
                    @if($paginator->count() > 0)
                        <ul class="blog-masonry blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>
                            @foreach($paginator as $item)
                                <!-- start blog item -->
                                    <li class="grid-item wow animate__fadeIn">
                                        <div class="blog-post border-radius-5px bg-white">
                                            <div class="d-flex align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                                <span class="text-small mr-auto text-slate-blue">{{ $item->blog_published_att }}</span>
                                            </div>
                                            <div class="blog-post-image">
                                                <a href="{{ route('blog.show', $item->slug ) }}" title=""><img src="{{ asset($item->img) }}" alt="{{ $item->name }}"></a>
                                                <div class="alt-font blog-category"><a href="{{ route('blog.index', $item->category->slug ) }}" class="text-uppercase text-fast-blue">{{ $item->category->name }}</a></div>
                                            </div>
                                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                                <a href="{{ route('blog.show', $item->slug ) }}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-15px-bottom">{{ $item->name }}</a>
                                                <p>{!! $item->excerpt !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end blog item -->
                            @endforeach
                        </ul>

                        {{ $paginator->render("pagination::bootstrap-4") }}
                    @else
                        <h4 class="text-center">{{ __('Нет статей') }}</h4>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
