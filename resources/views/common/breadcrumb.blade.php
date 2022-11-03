<!-- start page title -->
<section class="wow animate__fadeIn bg-light-gray padding-25px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-8 col-lg-6">
                <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom text-center text-lg-left">{{ $meta['page_title'] }}</h1>
            </div>
            <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                @if(count($meta['breadcrumbs']) > 0)
                    <ul class="xs-text-center">
                        @foreach($meta['breadcrumbs'] as $breadcrumb)
                            @if($loop->last)
                                <li class="active">{{ $breadcrumb['name'] }}</li>
                            @else
                                <li>
                                    <a href="{{ $breadcrumb['href'] }}">{{ $breadcrumb['name'] }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
