@if($errors->any())
    <div role="alert" class="alert alert-danger alert-dismissible container mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
        <strong><i class="fa fa-warning"></i> {{ __('message.alert') }}!</strong>
        <ul class="list-icon list-icon-arrow ml-3">
            @foreach($errors->all() as $errorTxt)
                <li>{{ $errorTxt }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div role="alert" class="alert alert-success alert-dismissible container mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
        <strong><i class="fa fa-check-circle"></i>{{ __('message.alert') }}!</strong> {{ session()->get('success') }}
    </div>
@endif

@if(session('message_error'))
    <div role="alert" class="alert alert-danger alert-dismissible container mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
        <strong><i class="fa fa-check-circle"></i>{{ __('message.alert') }}!</strong> {{ session()->get('message_error') }}
    </div>
@endif

