@extends('admin.layouts.app')

@section('page_title', __('Создание тега'))
@section('page_excerpt', __('Создание тега'))

@section('content')

    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ __('Создание тега') }} </h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="{{ route('admin.tag.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>{{ __('Назад') }}</span></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-aside-wrap">
                    <div class="card-content">
                        <form method="POST" action="{{ route('admin.tag.store') }}" enctype="multipart/form-data">
                            @csrf

                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab_general"><em class="icon ni ni-layer-fill"></em><span>{{ __('Общие') }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab_description"><em class="icon ni ni-list-round"></em><span>{{ __('Описание') }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab_seo"><em class="icon ni ni-b-chrome"></em><span>{{ __('SEO') }}</span></a>
                                </li>
                            </ul><!-- .nav-tabs -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_general">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="row g-4">
                                                <div class="col-lg-2">
                                                    <div class="image-upload " data-toggle="tooltip" data-placement="top" title="{{ __('Изменить') }}">
                                                        <div class="image-edit" >
                                                            <input id="image_upload" type='file' value="" name="img" accept=".png, .jpg, .jpeg" />
                                                            <label for="image_upload"><em class="icon ni ni-edit"></em></label>
                                                        </div>
                                                        <div class="image-preview" style="background-image: url({{ asset( 'admin/images/no_photo.jpg' ) }});"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">{{ __('Название') }}</label>
                                                        <input name="name" value="{{ old('name') }}"
                                                               id="name"
                                                               type="text"
                                                               class="form-control"
                                                               required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="slug">{{ __('slug') }}</label>
                                                        <input name="slug" value="{{ old('slug') }}"
                                                               id="slug"
                                                               type="text"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div>
                                <div class="tab-pane" id="tab_description">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="row g-4">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="excerpt">{{ __('Краткое описание') }}</label>
                                                        <textarea name="excerpt"
                                                                  id="excerpt"
                                                                  class="form-control summernote-basic"
                                                                  rows="2">{{ old('excerpt') }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="description">{{ __('Описание') }}</label>
                                                        <textarea name="description"
                                                                  id="description"
                                                                  class="form-control summernote-basic"
                                                                  rows="6">{{ old('description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div>

                                <div class="tab-pane" id="tab_seo">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="row g-4">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="seo_title">{{ __('title') }}</label>
                                                        <input name="seo_title" value="{{ old('seo_title', $item->seo_title) }}"
                                                               id="seo_title"
                                                               type="text"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="seo_description">{{ __('description') }}</label>
                                                        <textarea name="seo_description"
                                                                  id="seo_description"
                                                                  class="form-control"
                                                                  rows="6">{{ old('seo_description', $item->seo_description) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="seo_keywords">{{ __('keywords') }}</label>
                                                        <input name="seo_keywords" value="{{ old('seo_keywords', $item->seo_keywords) }}"
                                                               id="seo_keywords"
                                                               type="text"
                                                               class="form-control">
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
