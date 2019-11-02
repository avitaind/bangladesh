@extends('layouts.app')


@section('title')
    @lang('title.contact_us')
@stop

@section('content')

<main>

    <section class="aboutus-panel top-nav-padding ls-0">
        <div class="aboutus-contact py-5 px-2">
            <div class="container">
                <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light">@lang('site.contactus_contactus') </h1>

                <div class="row">
                    <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">
                        <div class="contact_us_card mb-4 mb-md-5">
                            <h3 class="contact_us_title">中国销售查询热线</h3>
                            <div class="support_tel">4006703001</div>

                            <b>@lang('site.contactus_operating')</b><br>
                            周一至周五 (09:00-12:30, 13:30-18:00)
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                        <div class="contact_us_card mb-4 mb-md-5">
                            <h3 class="contact_us_title">中国维修服务及技术支援热线</h3>

                            <div class="support_tel">4006703001</div>

                            <b>@lang('site.contactus_operating')</b><br>
                            周一至周五 (09:00-12:30, 13:30-18:00)
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>





</main>

@endsection
