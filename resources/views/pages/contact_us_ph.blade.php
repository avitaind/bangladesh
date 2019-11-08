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
                            <h3 class="contact_us_title">General Sales Enquiry - Octagon Computer Superstore</h3>

                            <div class="support_tel">
                                <a href="mailto:ocs@octagon.com.ph">ocs@octagon.com.ph</a>
                            </div>

                            {{--<p>--}}
                                {{--<b>@lang('site.form_email')</b><br>--}}
                                {{--<a href="mailto:ocs@octagon.com.ph">ocs@octagon.com.ph</a>--}}
                            {{--</p>--}}

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                        <div class="contact_us_card mb-4 mb-md-5">
                            <h3 class="contact_us_title">Repair Service and Technical support</h3>

                            {{--<div class="support_tel">+1500175</div>--}}

                            {{--<p>--}}
                                {{--<b>@lang('site.contactus_operating')</b><br>--}}
                                {{--08:00 – 17:00 (MON - FRI)--}}
                            {{--</p>--}}

                            <div class="support_tel">
                                <a href="mailto:globalsupport@avita.com">globalsupport@avita.com</a>
                            </div>

                            {{--<p>--}}
                                {{--<b>@lang('site.form_email')</b><br>--}}
                                {{--<a href="mailto:globalsupport@avita.com">globalsupport@avita.com</a>--}}
                            {{--</p>--}}


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
