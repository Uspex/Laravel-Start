@extends('admin.layouts.app')

@section('page_title', __('Редактирование роли'))
@section('page_excerpt', __('Редактирование роли'))

@section('content')

    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ __('Редактирование роли') }} </h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="{{ route('admin.role.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>{{ __('Назад') }}</span></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-aside-wrap">
                    <div class="card-content">
                        <form method="POST" action="{{ route('admin.role.update', $item->id) }}">
                            @method('PATCH')
                            @csrf

                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab_general"><em class="icon ni ni-layer-fill"></em><span>{{ __('Общие') }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab_permissions"><em class="icon ni ni-view-list-fill"></em><span>{{ __('Правила') }}</span></a>
                                </li>
                            </ul><!-- .nav-tabs -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_general">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">{{ __('slug') }}</label>
                                                        <input name="name" value="{{ old('name',$item->name) }}"
                                                               id="name"
                                                               type="text"
                                                               class="form-control"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="display_name">{{ __('Название') }}</label>
                                                        <input name="display_name" value="{{ old('display_name',$item->display_name) }}"
                                                               id="display_name"
                                                               type="text"
                                                               class="form-control"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="description">{{ __('Описание') }}</label>
                                                        <textarea name="description"
                                                                  id="description"
                                                                  class="form-control"
                                                                  rows="3">{{ old('description',$item->description) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div>
                                <div class="tab-pane" id="tab_permissions">
                                    <div class="card-inner">
                                        @include('admin.role.inc.permission')
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


