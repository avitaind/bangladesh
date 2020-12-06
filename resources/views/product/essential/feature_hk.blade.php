@extends('layouts.app')

@section('title')
    @lang('title.Essential_home')
@stop

@section('content')
    <main class="top-nav-padding">
       
        <section class="essential_body" style="background-color:#fff;">
        	<div class="banner-block">
                <div class="container"> 
                 <div class="space30"></div> 
			     
                 <img src="/images/essential/essential_body.jpg"  style="width:100%; max-width:100%;"/>
                 
	            </div>
            </div>
            <div class="space60"></div>
             <div class="space30"></div>
        </section>

         

        
 

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/pura.js') }}"></script>


@endsection
