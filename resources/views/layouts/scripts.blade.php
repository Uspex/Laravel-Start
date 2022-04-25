
<script src="{{ asset('assets/js/bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/libs/editors/summernote.js') }}"></script>
<script src="{{ asset('assets/js/editors.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}?{{ \Carbon\Carbon::now()->timestamp }}"></script>


@stack('scripts')
