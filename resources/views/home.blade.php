@extends('layouts.app')

@section('title')
    @lang('title.Homepage')
@stop

@section('content')

    @php
        $country = strtolower( request()->segment(1) );
    @endphp

    @if( View::exists('banner_'. $country))
        @include('banner_'.$country)
    @else
        @include('banner_hk')
    @endif

    <div class="admiror-video">
        <video autoplay="" controls="" muted="" loop=""> 
        <source src="/images/Nexstgo_video/The_Success_Story_of_AVITA.mp4" type="video/mp4">
        </video>
    </div>


    <section class="promo-banner mt-1">
    <div id="preloaders" class="preloader"></div>

        <div class="row no-gutters">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="{{ route('product.spec', 'liber')  }}" style="background-image: url('/images/demo/@lang('site.home_photo1_image')')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="{{ route('news') }}" style="background-image: url('/images/demo/promo-02-en.jpg')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="/aboutus" style="background-image: url('/images/demo/@lang('site.home_photo3_image')')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="https://avita.com/login" style="background-image: url('/images/demo/@lang('site.home_photo4_image')')"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="email-subscription py-5 ls-0">
   <form class="email-subscription-form col-12 col-lg-8 col-xl-6 mx-auto" role="form" method="POST" action="{{ url('/subscribe') }}"  enctype="multipart/form-data" >
    {!! csrf_field() !!}

    @include('includes.flash')    
    
    <h2 class="text-center mt-4 mb-3 font-weight-light">@lang('site.home_join')</h2>
            <div class="text-center mt-3 mb-4 lead">@lang('site.home_receiving')</div>
            <div class="row my-4 no-gutters justify-content-center">
            <div class="col-12 col-sm-7 col-md-6 col-lg-7 ml-auto">
                    <div class="input-group">
                        <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <input type="email" name="subscription_email" class="form-control" required>
                    </div>
                </div>
           <div class="col-12 col-sm-4 col-md-4">
                    <button class="btn btn-primary d-block mt-3 mt-sm-0 mt-md-0 mx-auto ml-md-3" type="submit">@lang('site.home_subscribe')</button>
                </div>

            </div>
        </form>
        {{--  <p style="text-align: center;"><a href="/" target="_blank" download="/"><button class="btn btn-primary btn-lg " type="button">Download Brochure </button></a></p>  --}}
         

            </div>
   </form>

    </section>



@endsection
