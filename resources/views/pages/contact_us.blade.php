@extends('layouts.app')

@section('title')
    @lang('title.contact_us')
@stop

@section('content')

    <main>

        <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">

                <div class="container">
                    <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light">@lang('site.contactus_contactus') <hr/></h1>

                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="contact_us_title">Sales Enquiry :</h2>

                            <div class="mb-2">+8809638686868</div>

                            <div class="mb-2"><b>Email :</b><br>
                                </div>

                            <div><b>@lang('site.contactus_operating') :</b><br>
                                Saturday to Thursday : From 8 am to 8 pm</div>


                            <div class="mb-2"><b>Address :</b><br>
                                B-Trac Technologies Ltd. <br/>House 68, Road 11, Block H, Banani, Dhaka-1213, Bangladesh.</div>
                         <!---
                          <h2 class="contact_us_title">For Service :</h2>
                            <div class="mb-2">Toll Free : 1800-22-3902</div>
                          -------->
                        </div>
                        <div class="col-sm-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8034804168697!2d90.40677941498213!3d23.790011384569848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6494f45b1b1%3A0xde65ab465933a881!2sBangla%20Trac%20Communications%20Limited!5e0!3m2!1sen!2sin!4v1573475065236!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                    </div>
                </div>


            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>





    </main>

@endsection
