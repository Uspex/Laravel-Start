@extends('layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">{{ __('user.page_name') }}</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-content">
                                    <a href="{{ route('user.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>{{ __('Добавить пользователя') }}</span></a>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        @if($paginator->count())
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">{{ __('Все Пользователи') }}</h5>
                                        </div>
                                    </div><!-- .card-title-group -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <table class="table table-tranx">
                                        <thead>
                                        <tr class="tb-tnx-head">
                                            <th class="tb-tnx-id"><span class="">{{ __('Имя') }}</span></th>
                                            <th class="tb-tnx-id"><span class="">{{ __('Email') }}</span></th>
                                            <th class="tb-tnx-info"><span>{{ __('Роль') }}</span></th>
                                            <th class="tb-tnx-info"><span>{{ __('Статус') }}</span></th>
                                            <th class="tb-tnx-action"><span>&nbsp;</span></th>
                                        </tr><!-- tb-tnx-item -->
                                        </thead>
                                        <tbody>
                                        @foreach($paginator as $item)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <span>{{ $item->name  }}</span>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <span class="title">{{ $item->email }}</span>
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    @foreach($item->roles as $role)
                                                        <span class="badge badge-outline-primary">{{ $role->display_name }}</span>
                                                    @endforeach
                                                </td>
                                                <td class="tb-tnx-info">
                                                    @if($item->deleted_at)
                                                        <span class="badge badge-danger">Отключен</span>
                                                    @else
                                                        <span class="badge badge-success">Активен</span>
                                                    @endif
                                                </td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm">
                                                            <ul class="link-list-plain">
                                                                <li><a href="{{ route('user.edit', $item->id) }}">{{ __('Редактировать') }}</a></li>
                                                                @if($item->deleted_at)
                                                                    <li>
                                                                        <form method="POST" action="{{ route('user.activate', $item->id) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-link btn-link-light">{{ __('Активировать') }}</button>
                                                                        </form>
                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <form method="POST" action="{{ route('user.destroy', $item->id) }}">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-link btn-link-light">{{ __('Отключить') }}</button>
                                                                        </form>
                                                                    </li>

                                                                @endif

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><!-- tb-tnx-item -->
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- .card-inner -->

                                @if($paginator->total() > $paginator->count())
                                    <div class="card-inner">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            {{ $paginator->links() }}
                                        </ul><!-- .pagination -->
                                    </div><!-- .card-inner -->
                                @endif

                            </div><!-- .card-inner-group -->

                        @else
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">{{ __('Пользователей нет') }}</h5>
                                        </div>
                                    </div><!-- .card-title-group -->
                                </div>
                            </div><!-- .card-inner-group -->
                        @endif

                    </div><!-- .card -->
                </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection



