@extends('layouts.app')

@section('title')
    {{ $news_detail->title }} | @lang('title.whats_new')
@stop

@section('meta')

    <meta property="og:url"                content="{{ route('news.detail', [$country, $news_detail->id] ) }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="AVITA - {{ $news_detail->title }}" />
    <meta property="og:description"        content="{{ $news_detail->introduction }}" />
    <meta property="og:image"              content="{{ $news_detail->image_url() }}" />

@stop

@section('content')
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <h3 class="section-title ls-0 my-4 mt-5">@lang('site.news_title')</h3>
                <div class="row p-3 align-items-center">
                    <div class="event-date color-required h5 mb-0 pr-3">
                        <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>{{ $news_detail->eventDateString() }}
                    </div>
                    <div class="event-status px-4 py-1 {{ $news_detail->status }}">
                        @lang('site.news_status_'.$news_detail->status)
                    </div>
                </div>
                <div class="row p-3 align-items-center">
                    <div class="event-detail-title h3">
                        {{ $news_detail->title }}
                    </div>

                    @if( $country != 'cn')

                    <div class="event-share ml-auto">
                        <span class="px-2">@lang('site.share'):</span>
                        <a href="#" class="ml-0 ml-md-auto fb_share_btn"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="ml-0 ml-md-2 twitter_share_btn"><i class="fa fa-twitter pl-1" aria-hidden="true"></i></a>
                    </div>

                    @endif
                </div>

                @if( $image_url = $news_detail->image_url() )
                    <div class="event-banner">
                        <img src="{{ $image_url }}" class="img-responsive" />
                    </div>
                @endif
                <div class="event-desc py-3 mb-5">
                    <div class="event-desc-block pb-5">
                        <p class="event-desc-content">
                            {!! $news_detail->content !!}
                        </p>
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