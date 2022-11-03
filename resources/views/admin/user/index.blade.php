@extends('admin.layouts.app')

@section('page_title', __('Пользователи'))
@section('page_excerpt', __('Пользователи'))


@section('content')

    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ __('Пользователи') }}</h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="nk-block-head-content">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>{{ __('Добавить пользователя') }}</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-block">
            <div class="card card-bordered">
                @if($paginator->count())
                    <div class="card-inner-group">
                        <div class="card-inner p-0">
                            <div class="nk-tb-list">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span>{{ __('Имя') }}</span></div>
                                    <div class="nk-tb-col"><span>Email</span></div>
                                    <div class="nk-tb-col text-center"><span>{{ __('Роль') }}</span></div>
                                    <div class="nk-tb-col text-center"><span>{{ __('Статус') }}</span></div>
                                    <div class="nk-tb-col text-right"><em class="icon ni ni-setting"></em></div>
                                </div>

                                @foreach($paginator as $item)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col tb-col-sm">
                                            <a href="{{ route('admin.user.edit', $item->id) }}"><span>{{ $item->name  }}</span></a>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span>{{ $item->email }}</span>
                                        </div>
                                        <div class="nk-tb-col text-center">
                                            @foreach($item->roles as $role)
                                                <span class="badge badge-outline-primary">{{ $role->display_name }}</span>
                                            @endforeach
                                        </div>
                                        <div class="nk-tb-col text-center">
                                            @if($item->deleted_at)
                                                <span class="badge badge-danger">Отключен</span>
                                            @else
                                                <span class="badge badge-success">Активен</span>
                                            @endif
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="mr-n1">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{ route('admin.user.edit', $item->id) }}"><em class="icon ni ni-edit"></em><span>{{ __('Редактировать') }}</span></a></li>
                                                                <li>
                                                                    <form method="POST" action="{{ route('admin.user.destroy', $item->id) }}">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-link btn-link-light"><em class="icon ni ni-trash"></em><span>{{ __('Удалить') }}</span></button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @if($paginator->hasPages())
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        {{ $paginator->links() }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                @else
                    <div class="card-inner-group">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h5 class="title">{{ __('Список пуст') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>

@endsection



