    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}?{{ \Carbon\Carbon::now()->timestamp }}"></script>


    @stack('scripts')
