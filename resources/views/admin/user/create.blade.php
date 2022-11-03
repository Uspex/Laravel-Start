@extends('admin.layouts.app')

@section('page_title', __('Создание пользователя'))
@section('page_excerpt', __('Создание пользователя'))

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">{{ __('Создание пользователя') }} </h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.user.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>{{ __('Назад') }}</span></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <form method="POST" action="{{ route('admin.user.store') }}">
                                        @csrf

                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tab_general"><em class="icon ni ni-layer-fill"></em><span>{{ __('Общие') }}</span></a>
                                            </li>
                                        </ul><!-- .nav-tabs -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_general">
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row g-4">
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name">{{ __('Имя') }}</label>
                                                                    <input name="name" value="{{ old('name') }}"
                                                                           id="name"
                                                                           type="text"
                                                                           class="form-control"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email">Email</label>
                                                                    <input name="email" value="{{ old('email') }}"
                                                                           id="email"
                                                                           type="text"
                                                                           class="form-control"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="password">{{ __('Пароль') }}</label>
                                                                    <input name="password" value=""
                                                                           id="password"
                                                                           type="password"
                                                                           class="form-control"
                                                                           required
                                                                           autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="type">{{ __('Роль') }}</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="role" class="form-select form-control form-control-lg" required>
                                                                            <option value=""></option>
                                                                            @foreach($roles as $role)
                                                                                <option value="{{ $role->name }}">{{ $role->display_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
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
            </div>
        </div>
    </div>
@endsection



