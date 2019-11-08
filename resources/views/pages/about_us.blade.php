@extends('layouts.app')

@section('title')
    @lang('title.about_us')
@stop

@section('content')

<main>

    <section class="aboutus-panel top-nav-padding">
        <div class="aboutus-info pb-3">
            <div class="container">
                <div class="row mt-0 mt-lg-5">
                    <div class="col-12 col-lg-6 ls-0 pt-lg-5">
                        <div class="aboutus-info-mob-img">
                            <img class="hidden-lg-up " src="images/background/aboutus-min.png"/>
                        </div>
                        <h1 class="section-title my-4 text-left font-weight-light">@lang('site.aboutus_about')</h1>

                        @foreach (data_get(__('site'), 'aboutus_content', []) as $content)
                            <p>{!! $content !!}</p>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="hidden-md-down aboutus-image">
                <img src="images/background/aboutus-min.png"/>
            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>

@endsection
