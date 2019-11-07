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
                            <h3 class="contact_us_title">台灣銷售查詢熱線 (譽盛世和實業股份有限公司)</h3>
                            <div class="support_tel">(02) 8712 6629</div>

                            <b>@lang('site.contactus_operating')</b><br>
                            星期一至星期五: 09:00-18:00
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                        <div class="contact_us_card mb-4 mb-md-5">
                            <h3 class="contact_us_title">台灣維修服務及技術支援熱線</h3>

                            <div class="support_tel">0800-000-075</div>

                            <div class="mb-2"><b>電郵：</b><br>
                            twsupport@avita.com</div>

                            <div><b>@lang('site.contactus_operating')</b><br>
                                週一至週五 09:00-18:00, 週六 09:00-13:00
                            </div>
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
