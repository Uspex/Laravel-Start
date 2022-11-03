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
                            <h1 class="alt-font h5 font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{ $item->name }}</h1>
                            <img src="{{ asset($item->img) }}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                        </div>

                        <div class="col-12 page-content mx-auto margin-50px-bottom md-margin-30px-bottom wow animate__fadeIn">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
