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
     <h2 class="contact_us_title">General Sales Enquiry :</h2>
     
                                <div class="mb-2">+91-9840024085,<br/> +91-11-61273133</div>
    
                                <div class="mb-2"><b>Email :</b><br>
                                    INsales@nexstgo.com</div>

                                <div><b>@lang('site.contactus_operating')</b><br>
                                    Monday to Friday : 9 am - 6 pm</div>
                                
                                
                                <div class="mb-2"><b>Address :</b><br>
                                    427, Regus, Shivaji Stadium Metro Station, <br/> RCube, Lower Ground Floor, New Delhi 110001</div>
                                    <h2 class="contact_us_title">For Service :</h2>
                        <div class="mb-2">Toll Free : 1800-22-3902</div>
     
    </div>
    <div class="col-sm-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.028794755144!2d77.20932811508251!3d28.62889908241919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd494319dd85%3A0xe6cab61d187fd1ab!2sRegus+-+New+Delhi%2C+Shivaji!5e0!3m2!1sen!2sin!4v1545033849724" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> 
      
      
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
