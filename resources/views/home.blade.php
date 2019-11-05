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

    <section class="promo-banner mt-1">
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
                            <a class="banner-bg" href="{{ route('news')  }}" style="background-image: url('/images/demo/@lang('site.home_photo2_image')')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="http://avitain.ashplanmedia.com/aboutus" style="background-image: url('/images/demo/@lang('site.home_photo3_image')')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="{{ route('support') }}" style="background-image: url('/images/demo/@lang('site.home_photo4_image')')"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="email-subscription py-5 ls-0">
        <form class="email-subscription-form col-12 col-lg-8 col-xl-6 mx-auto">
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
            <p style="text-align: center;"><a href="http://www.avitain.ashplanmedia.com/Avita-Brochure.pdf" target="_blank" download="http://www.avitain.ashplanmedia.com/Avita-Brochure.pdf"><button class="btn btn-primary btn-lg " type="button">Download Brochure </button></a></p>

    </section>

@endsection
