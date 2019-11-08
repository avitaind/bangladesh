<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

@php
    $xml_lang = ($lang == 'en') ? 'en' : 'zh-hk';

@endphp

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ $xml_lang }}" lang="{{ $xml_lang }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content=""/>
    <meta property="fb:app_id" content="{{ env('FACEBOOK_CLIENT_ID') }}" />


    @yield('meta')

    <title>AVITA</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}"/>

    <script src="//use.typekit.net/wpk4iql.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    @stack('css')
    @yield('css')

</head>
<body class="lang_{{$lang}}">

@include('partials.header')

<!-- Content -->
@yield('content')
<!-- ./Content -->

{{--@include('partials.footer')--}}


<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset("js/demo.js") }}"></script>

<!-- Facebook API -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '{{ env('FACEBOOK_CLIENT_ID') }}',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
        });

        // FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>


@stack('js')
@yield('js')





</body>
</html>
