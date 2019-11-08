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

                            <div class="mb-2">+230 4633 869</div>

                            <div class="mb-2"><b>Email :</b><br>
                                info@techstation.mu</div>

                            <div><b>@lang('site.contactus_operating') :</b><br>
                                Monday to Friday : 8:30 to 17:00</div>


                            <div class="mb-2"><b>Address :</b><br>
                                TechStation Ltd<br/> 7, Avenue Des Orchidées, 72238 Quatre-Bornes</div>
                         <!---
                          <h2 class="contact_us_title">For Service :</h2>
                            <div class="mb-2">Toll Free : 1800-22-3902</div>
                          -------->
                        </div>
                        <div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.88146815096!2d57.48051591494494!3d-20.263750054007247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5b40882cf0ab%3A0x48041307c14d6ae1!2s7+Ave+Des+Orchidees%2C+Quatre+Bornes%2C+Mauritius!5e0!3m2!1sen!2sin!4v1561119288837!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                        </div>
                    </div>
                </div>


            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>





    </main>

@endsection
