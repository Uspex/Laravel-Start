@extends('layouts.app')

@section('page_title', __('Источники трафика'))
@section('page_excerpt', __('Источники трафика'))

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ __('Источники трафика') }}</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="nk-block-head-content">
                        <a href="{{ route('source.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>{{ __('Добавить') }}</span></a>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered card-stretch">
                @if($paginator->count())
                    <div class="card-inner-group">
                        <div class="card-inner p-0">
                            <table class="table table-tranx">
                                <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-info"><span>{{ __('Название') }}</span></th>
                                    <th class="tb-tnx-info"><span>{{ __('Utm метка') }}</span></th>
                                    <th class="tb-tnx-action"><span>&nbsp;</span></th>
                                </tr><!-- tb-tnx-item -->
                                </thead>
                                <tbody>
                                @foreach($paginator as $item)
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="{{ route('source.edit', $item->id) }}"><span>{{ $item->name  }}</span></a>
                                        </td>
                                        <td class="tb-tnx-id">
                                            @if($item->key)
                                                {{ $item->key }}={{ $item->value }}
                                            @endif
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm">
                                                    <ul class="link-list-plain">
                                                        <li><a href="{{ route('source.edit', $item->id) }}">{{ __('Редактировать') }}</a></li>
                                                        <li>
                                                            <form method="POST" action="{{ route('source.destroy', $item->id) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-link btn-link-light">{{ __('Удалить') }}</button>
                                                            </form>
                                                        </li>
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
                                    <h5 class="title">{{ __('Список пуст') }}</h5>
                                </div>
                            </div><!-- .card-title-group -->
                        </div>
                    </div><!-- .card-inner-group -->
                @endif

            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
@endsection



