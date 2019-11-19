<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/AVITA-KV_001_green_web_banners_1920x720_v02-en.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/AVITA-KV_001_green_web_banners_1920x720_v02-en.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/banner3_mob.jpg')"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/pura-01.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/pura-01.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/pura (mobile)-01.jpg')"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/admiror-01.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/admiror-01.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/admiror (mobile)-01.jpg')"></div>
                    </div>
                </div>
            </div>
        <!---
        <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/magus-web.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/magus-web.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/magus-mob.jpg')"></div>
                    </div>
                </div>
            </div>
            --->
         <!--   <div class="carousel-item ">
                <div class="responsive-block">
                    <div class="banner-block responsive-item  d-flex align-items-center">
                        <video class="leadin-video video-bgv1" muted autoplay playsinline>
                            <source src="/videos/bgv1.mp4" type="video/mp4">
                        </video>
                        <div class="banner-info mb-5 pb-5 w-100 align-self-end">
                            <div class="btn-group mt-5 pt-5 pt-md-0 ls-0">
                                <a class="btn btn-more mx-auto mt-5 mt-md-0 font-weight-normal" href="{{ route('product.overview', 'liber') }}">@lang('site.home_learnmore')<i class="fa fa-chevron-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item d-flex align-items-center">
                        <video class="leadin-video video-bgv2" muted playsinline>
                            <source src="/videos/bgv2.mp4" type="video/mp4">
                        </video>
                        <div class="banner-info mb-5 pb-5 w-100 align-self-end">
                            <div class="btn-group mt-5 pt-5 pt-md-0 ls-0">
                                <a class="btn btn-more mx-auto mt-5 mt-md-0 font-weight-normal" href="{{ route('product.overview', 'liber') }}">@lang('site.home_learnmore')<i class="fa fa-chevron-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --->

        </div>
        <ol class="carousel-indicators">
            <li data-target="#home_banner" data-slide-to="0" class="active"></li>
          <li data-target="#home_banner" data-slide-to="1"></li>
            <li data-target="#home_banner" data-slide-to="2"></li>
        </ol>
    </div>
</section>

@section('css')
    <style type="text/css">
        #home_banner video{
            position: absolute;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
@endsection
@section('js')
    <script type="text/javascript">
        var imageTimer = null;
        /*   $('video').on('ended', function(){
               $('#home_banner').carousel('next');
           });
       */
        $('#home_banner').on('init slide.bs.carousel', function (e) {
            clearTimeout( imageTimer );
            imageTimer = setTimeout( function( ){
                $('#home_banner').carousel('next');
            }, 6000 );

        }).trigger('init');
    </script>
@endsection
