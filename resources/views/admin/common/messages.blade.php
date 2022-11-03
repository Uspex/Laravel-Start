
@if($errors->any())
    @foreach($errors->all() as $errorTxt)
        <div class="alert alert-fill alert-danger alert-dismissible alert-icon">
            <em class="icon ni ni-cross-circle"></em> <strong>{{ __('Warning') }}</strong>! {{ $errorTxt }} <button class="close" data-dismiss="alert"></button>
        </div>
    @endforeach
@endif
@if(session('success'))
    <div class="alert alert-fill alert-success alert-icon">
        <em class="icon ni ni-check-circle"></em> <strong>{{ __('Success') }}</strong>. {{ session()->get('success') }} <button class="close" data-dismiss="alert"></button>
    </div>
@endif

