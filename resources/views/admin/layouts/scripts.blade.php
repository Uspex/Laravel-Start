
<script src="{{ asset('admin/js/bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<script src="{{ asset('admin/js/libs/editors/summernote.js') }}"></script>
<script src="{{ asset('admin/js/editors.js') }}"></script>

<script src="{{ asset('admin/js/custom.js') }}?{{ \Carbon\Carbon::now()->timestamp }}"></script>


@stack('scripts')
