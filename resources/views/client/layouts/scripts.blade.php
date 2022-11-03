
<script src="{{ asset('admin/js/bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>

<script src="{{ asset('admin/js/client.js') }}?{{ \Carbon\Carbon::now()->timestamp }}"></script>


@stack('scripts')
