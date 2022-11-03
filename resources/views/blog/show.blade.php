@extends('layouts.app')

@section('title', $meta['title'])
@section('description', $meta['description'])
@section('keywords', $meta['keywords'])
@section('meta_image', $meta['image'])

@section('content')

    <section class="blog-right-side-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                    <div class="row">
                        <div class="col-12 blog-details-text last-paragraph-no-margin margin-3-rem-bottom">
                            <div class="d-flex justify-content-between">
                                <ul class="list-unstyled margin-2-rem-bottom">
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i>{{ $item->blog_published_att }}</li>
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="{{ route('blog.index', $item->category->slug) }}">{{ $item->category->name }}</a></li>
                                </ul>
                                <div class="text-right">
                                    @include('modules.share_btn', ['share_url' => route('blog.show', $item->slug), 'share_description' => $meta['description'], 'share_title' => $meta['title']])
                                </div>
                            </div>

                            <h1 class="alt-font h5 font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{ $item->name }}</h1>
                            <img src="{{ asset($item->img) }}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                        </div>

                        <div class="col-12 page-content mx-auto margin-50px-bottom md-margin-30px-bottom wow animate__fadeIn">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex flex-wrap align-items-center padding-15px-tb mx-auto margin-20px-bottom wow animate__fadeIn">
                    <div class="col-12 col-md-9 text-center text-md-left sm-margin-10px-bottom px-0">
                        <div class="tag-cloud">
                            <a href="{{ route('blog.index', $item->category->slug) }}">{{ $item->category->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
