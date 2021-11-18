@extends('layouts.app')

@section('title')
    @lang('title.news5')
@stop

@section('content')
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <h3 class="section-title ls-0 my-4 mt-5">AVITA appoints Ingram Micro To Boost Distribution Network In Indian Market</h3>
                <div class="row p-3 align-items-center">
                    <div class="event-date color-required h5 mb-0 pr-3">
                        <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>2020.06.20
                    </div>
                    <div class="event-status px-4 py-1">
                        In Progress
                    </div>
                </div>
                <div class="row p-3 align-items-center">


                    <div class="event-share ml-auto">
                        <span class="px-2">@lang('site.share'):</span>
                        <a href="#" class="ml-0 ml-md-auto fb_share_btn"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="ml-0 ml-md-2 twitter_share_btn"><i class="fa fa-twitter pl-1" aria-hidden="true"></i></a>
                    </div>



                </div>
                <div class="event-banner">
                    <img src="/images/events/avita-ingram.jpg" class="img-responsive">
                </div>
                <div class="event-desc py-3 mb-5">
                    <div class="event-desc-block pb-5">
                    <p><span lang="EN-US">AVITA made a crucial announcement recently to scale up their distribution network across entire Indian market. The brand has signed a distribution agreement with Ingram Micro India Pvt. Ltd, one of the top distribution house for tech brands in India. Ingram Micro has very strong channel base currently which will now distribute AVITA’s wide range of products. This partnership will help AVITA to further strengthen its reach across the Indian subcontinent and cement its position as leading players in the market. AVITA carries a wide range of industry-leading products that are designed with a vision to aid the evolving requirement of customers, especially youth.</span></p>
                    <p><span lang="EN-US">Ingram Micro has decades of experience in the Indian market hence it understands the market scenario and the potential in different markets across India. The robust distribution network of Ingram Micro will add value to the overall penetration of brand AVITA. While expressing pleasure over this new announcement, Seema Bhatnagar, Regional Business Director (South Asia) and Country General Manager (India) at Nexstgo Company Limited said, “We are glad to introduce our new distribution partner Ingram Micro. With this association, we are just another step towards our goal to become the most premium technology brand and bring the unique AVITA experience to a bigger populace.” </span></p>
                    <p><span lang="EN-US">Since last one year, AVITA has been very aggressively expanding its presence in India by building effective offline channel network. AVITA has launched wide range of laptops for each consumer segment. Along with innovation, AVITA is known for offering devices in all colours which is one of the key USP of this brand. With eye-catching design and strong performance, AVITA is planning to capitalize on the growing demand and enormous opportunities currently in PC market. The brand has already invested a lot in building strong exclusive showroom for retail customers across key market in India. With this new distribution plan, AVITA is looking to fuel it’s brand positioning further in Indian market as they see India as a very important market.</span></p>

                    </div>
                </div>



            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection


@section('js')

    <script>
        $('.fb_share_btn').click( function(e) {

            e.preventDefault();

            FB.ui( {
                method: 'share',
                href: $(location).attr('href')
            }, function(response){

            });
        });

        $('.twitter_share_btn').click(function(e){

            e.preventDefault();

            var current_url = $('meta[property="og:url"]').prop('content');


            var share_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent( current_url );
            window.open( share_url, '_blank' );
        });



    </script>

@stop
