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

                @if( App::isLocale('en') )

                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">
                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">General Sales Enquiry – Hong Kong & Macau</h3>
                                <div class="support_tel">+852 3725-0611</div>

                                <b>@lang('site.contactus_operating')</b><br>
                                Monday to Friday: 09:00-18:00
                                <br>
                                <b>@lang('site.contactus_email')</b><br>
                                        mu_support@avita.com
                                    </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">Repair Service and Technical support – Hong Kong</h3>

                                <div class="support_tel">+852 3725-0625</div>

                                <p>
                                    <b>@lang('site.contactus_operating')</b><br>
                                    Monday to Friday: 09:00-18:00; Saturday: 09:00-13:00
                                </p>


                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">Repair Service and Technical support – Macau</h3>
                                <div class="support_tel">+853 6281-1231</div>

                                <b>@lang('site.contactus_operating')</b><br>
                                Monday to Friday: 09:00-18:00; Saturday: 09:00-13:00
                            </div>

                        </div>
                    </div>

                @else

                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">
                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">香港及澳門銷售查詢熱線</h3>
                                <div class="support_tel">+852 3725-0611</div>

                                <b>@lang('site.contactus_operating')</b><br>
                                星期一至星期五: 09:00-18:00
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">香港維修服務及技術支援熱線</h3>

                                <div class="support_tel">+852 3725-0625</div>

                                <b>@lang('site.contactus_operating')</b><br>
                                星期一至星期六: 10:00-19:00
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">澳門維修服務及技術支援熱線</h3>
                                <div class="support_tel">+853 6281-1231</div>

                                <b>@lang('site.contactus_operating')</b><br>
                                星期一至星期五: 09:00-12:30; 13:30 to 18:00
                            </div>

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>





</main>

@endsection
