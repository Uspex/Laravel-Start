@extends('layouts.app')

@section('page_title', __('Добавление'))
@section('page_excerpt', __('Добавление'))

@section('content')

    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ __('Добавление') }} </h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="{{ route('source.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>{{ __('Назад') }}</span></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-aside-wrap">
                    <div class="card-content">
                        <form id="base_form" method="POST" enctype="multipart/form-data" action="{{ route('source.store') }}">
                            @csrf

                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab_general"><em class="icon ni ni-user-circle"></em><span>{{ __('Общие') }}</span></a>
                                </li>
                            </ul><!-- .nav-tabs -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_general">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="row g-4">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">{{ __('Название') }}</label>
                                                        <input name="name" value="{{ old('name') }}"
                                                               id="name"
                                                               type="text"
                                                               class="form-control"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="key">{{ __('key') }}</label>
                                                        <div class="form-control-wrap">
                                                            <select name="key" class="form-select">
                                                                @foreach($key_list as $key)
                                                                    <option value="{{ $key }}">{{ $key }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="value">{{ __('value') }}</label>
                                                        <input name="value" value="{{ old('value') }}"
                                                               id="value"
                                                               type="text"
                                                               class="form-control"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="nk-block text-right">
                                    <button type="submit" class="btn btn-lg btn-primary">{{ __('Сохранить') }}</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- .card-content -->
                </div><!-- .card-aside-wrap -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
@endsection



