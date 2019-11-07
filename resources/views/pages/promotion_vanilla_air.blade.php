@extends('layouts.app')

@section('css')
<style type="text/css">
	.promotionVanillaair {
		position: relative;
	}
	.promotionVanillaair .fixanchor {
		position: absolute;
	    top: 47%;
	    left: 50%;
	    -webkit-transform: translate(-50%, -50%);
	    transform: translate(-50%, -50%);
	    width: 21%;
	    height: 6%;
	    /*background-color: #000;*/
	}

	@media (max-width: 991px) {
		.promotionVanillaair .fixanchor {
		    top: 41.7%;
		    width: 30%;
		    height: 6.6%;
		}
	}

</style>

@endsection


@section('content')

    <main>

        <section class="top-nav-padding promotionVanillaair ls-0">

            <img src="{{ asset('images/promotion_vanillaair.jpg') }}" class="img-fluid hidden-md-down">

            <img src="{{ asset('images/promotion_vanillaair_mobile.jpg') }}" class="img-fluid hidden-lg-up">

            {{-- <a class="fixanchor" href="/hk/product/liber/where_to_buy">&nbsp;</a> --}}

        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>





    </main>

@endsection
