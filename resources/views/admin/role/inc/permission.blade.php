<div class="nk-block-head">
    <h5 class="title">{{ __('Правила') }}</h5>
    <p>{{ __('Правила доступные для данной роли отмечены чекбоксами') }}</p>
</div><!-- .nk-block-head -->

@foreach($permission_list as $permission_group_name => $permission_group_item)
    <div class="nk-block">
        <div class="nk-block-head">
            <h5 class="title">{{ $permission_group_name }}</h5>
        </div><!-- .nk-block-head -->

        <div class="profile-ud-list">
            <div class="profile-ud-item">
                @foreach($permission_group_item as $permission)
                    <div class="custom-control custom-control-sm custom-checkbox pr-2">
                        <input id="permission_{{ $permission->id }}" class="custom-control-input" type="checkbox" name="role_permission[]" value="{{ $permission->id }}" @if($item->hasPermission($permission->name)) checked @endif>
                        <label for="permission_{{ $permission->id }}" class="custom-control-label">{{ $permission->display_name }}</label>
                    </div>
                @endforeach
            </div>

        </div><!-- .profile-ud-list -->

    </div>
@endforeach


