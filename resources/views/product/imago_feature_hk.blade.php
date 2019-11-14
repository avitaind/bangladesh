@extends('layouts.app')

@section('title')
	@lang('title.IMAGO_home')
@stop

@section('content')

    <main class="top-nav-padding">

        <div class="nav-product-panel">
		    <div class="container">
		        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
		            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
		        </div>

				<div class="product-nav-collapse">
					<ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end py-2 mb-0">
						<li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', $product->short_code) }}">@lang('site.productnav_overview')</a></li>
						<li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', $product->short_code) }}">@lang('site.productnav_spec')</a></li>
					</ul>
				</div>
		    </div>
		</div>

        <section class="product-imago-banner">
        	<div class="u-relative">
        		<div class="mask-wrap hidden-sm-down">
        			<div class="masked-inner">
        				{{-- <img class="bg-image ml-auto mask-img " src="/images/imago/sc1_01.jpg"> --}}
        			</div>
        		</div>

				<img class="bg-image hidden-md-up w-100" src="/images/imago/sc1_01.jpg">

        		<div class="container u-pos-tl u-pos-tr mx-auto h-100">
        			<div class="d-flex h-100 align-items-center">
        				<div class="u-relative product-title hidden-sm-down">
		        			<h1 class="text-uppercase font-weight-bold float-text">IMAGO</h1>
		                    <h5 class="text-uppercase float-text">IM100/IM200</h5>
		                    <div class="an-scroll-wrap hidden-sm-down">
		                        <div class="an-scroll">
		                            <span></span>
		                        </div>
		                    </div>
	                    </div>
                    </div>
        		</div>
        	</div>
        	<div class="u-relative responsive-block">
        		<div class="responsive-item">
        			<div class="d-flex flex-wrap hidden-md-up justify-content-center pt-5">
						<div class="">
							<img class="mr-2 mt-2" src="/images/logo.png">
						</div>
						<div>
		        			<h1 class="text-uppercase font-weight-bold float-text">IMAGO</h1>
		                    <h5 class="text-uppercase float-text">IM100/IM200</h5>
		                </div>
                	</div>

                	<div class="text-center my-3">
                		<img class="ac-image ac-image-01" src="/images/imago/sc1_02.png">
                	</div>
                	<div class="text-center my-3 pb-5">
                		<img class="ac-image ac-image-02" src="/images/imago/sc1_03.png">
                	</div>

                </div>
        	</div>
        </section>

        <section class="product-imago-life">
        	<div class="u-relative">

        		<img class="bg-image hidden-md-up w-100" src="/images/imago/sc2_01.png">

        		<div class="mask-wrap hidden-sm-down">
        			<div class="masked-inner">
        				{{-- <img class="bg-image ml-auto mask-img" src="/images/imago/sc2_01.png"> --}}
        			</div>
        		</div>

        		<div class="container u-absolute u-pos-tl u-pos-tr mx-auto h-100">
        			<div class="d-flex h-100 align-items-md-center">
        				<div class="u-relative mt-5 mb-md-0">
		        			<h2 class="text-uppercase product-title">
		        				<span class="d-md-block text-uppercase title-b-border float-text">Your smart</span>
		        				<span class="d-md-block text-uppercase font-weight-bold float-text">life</span>
		        			</h2>
	                    </div>
                    </div>
        		</div>
        	</div>
        </section>

        <section class="product-imago-interface">
        	<div class="container">
        		<div class="d-flex align-items-center pt-5">
        			<img class="sc-image sc-image-01 mr-5 hidden-sm-down" src="/images/imago/sc3_01.png">
        			<div class="u-relative pl-md-5">
        				<div class="d-flex mb-5 align-items-end float-text">
        					<img class="mr-4" src="/images/logo.png"/>
        					<h3 class="font-weight-bold text-uppercase mb-0">IMAGo</h3>
        				</div>
        				<p class="mb-5 float-text">Featuring a full HD display with a sophisticated 10-point capacitive touch screen, AVITA IMAGO is finely crafted and offers you endless possibilities to explore the online world with a simple touch on the mirror.</p>

        				<h6 class="font-weight-bold mb-2 float-text">Simple &amp; Slick User Interface</h6>
        				<p class="float-text">Featuring a full HD display with a sophisticated 10-point capacitive touch screen, AVITA IMAGO is finely crafted and offers you endless possibilities to explore the online world with a simple touch on the mirror.</p>
        			</div>
        		</div>

        		<div class="interface-row row no-gutters my-5 pb-5">
        			<div class="col-4 col-md-2 my-4 my-md-0 text-center float-text">
        				<img class="mb-2" src="/images/imago/sc3_02.png">
        				<div class="interface-value">Weather Forecast</div>
        			</div>
        			<div class="col-4 col-md-2 my-4 my-md-0 text-center float-text">
        				<img class="mb-2" src="/images/imago/sc3_03.png">
        				<div class="interface-value">News Headline</div>
        			</div>
        			<div class="col-4 col-md-2 my-4 my-md-0 text-center float-text">
        				<img class="mb-2" src="/images/imago/sc3_04.png">
        				<div class="interface-value">IOT Smart Health Monitoring</div>
        			</div>
        			<div class="col-4 col-md-2 my-4 my-md-0 text-center float-text">
        				<img class="mb-2" src="/images/imago/sc3_05.png">
        				<div class="interface-value">Movie &amp; Music</div>
        			</div>
        			<div class="col-4 col-md-2 my-4 my-md-0 text-center float-text">
        				<img class="mb-2" src="/images/imago/sc3_06.png">
        				<div class="interface-value">Interactive Applications</div>
        			</div>
        			<div class="col-4 col-md-2 my-4 my-md-0 text-center align-self-center float-text">
        				<div class="interface-value font-weight-bold">And More...</div>
        			</div>
        		</div>
        	</div>
       	</section>

        <section class="product-imago-area py-md-5">
        	<div class="container">
        		<div class="d-flex d-md-block text-left my-5 align-items-start">
        			<div class="product-title text-uppercase mb-md-3 ml-4 ml-md-0 float-text">SMARt hair salon</div>
        			<div class="product-image flex-first"><img class="sc-image sc-image-01" src="/images/imago/sc4_01.jpg"></div>
        		</div>
        		<div class="d-flex d-md-block text-right my-5 align-items-end">
        			<div class="product-title text-uppercase mb-md-3 mr-4 mr-md-0 float-text">Smart bontique</div>
        			<div class="product-image"><img class="sc-image sc-image-01" src="/images/imago/sc4_02.jpg"></div>
        		</div>
        	</div>
        </section>

        <section class="product-imago-home">
        	<div class="u-relative">

        		<img class="bg-image hidden-md-up w-100" src="/images/imago/sc5_01.png">

        		<div class="mask-wrap hidden-sm-down">
        			<div class="masked-inner">
        				{{-- <img class="bg-image ml-auto mask-img" src="/images/imago/sc5_01.png"> --}}
        			</div>
        		</div>


        		<div class="container u-absolute u-pos-tl u-pos-tr mx-auto h-100">
        			<div class="d-flex h-100 align-items-md-center">
        				<div class="u-relative ml-auto mt-5 mb-md-0">
		        			<h2 class="text-uppercase product-title text-right">
		        				<span class="d-md-block text-uppercase title-b-border float-text">Your smart</span>
		        				<span class="d-md-block text-uppercase font-weight-bold float-text">Home</span>
		        			</h2>
	                    </div>
                    </div>
        		</div>
        	</div>
        </section>

        <section class="product-imago-tech py-5">
        	<div class="container">
        		<div class="row">
    				<div class="col-12 col-md-7 my-5">
    					<h6 class="font-weight-bold float-text">Integrated Health Management</h6>
    					<p class="float-text">With AVITA IMAGO, you will not be annoyed with managing different kinds of health data scattered across multiple devices. It can be integrated with skin checker, weight scale, sleep monitor and other health devices as an extended ecosystem. By recording and analyzing all the health data on a daily basis, AVITA IMAGO serves as a personal assistant, making health management much easier than ever before.</p>
    				</div>
    			</div>
				<div class="row">
    				<div class="col-12 col-md-6 flex-last flex-md-first mt-5 mt-mb-0">
    					<div class="mb-4 ">
    						<h6 class="font-weight-bold float-text"><span class="list-count d-inline-flex mr-1 align-items-center justify-content-center">1</span>Core Technology</h6>
    						<div class="list-item float-text">MPS (mirror play system) and Full HD display ensure perfect image quality when interacting and controlling the mirror with your fingers </div>
							<div class="list-item float-text">Android-based platform</div>
    					</div>
    					<div class="mb-4 ">
    						<h6 class="font-weight-bold float-text"><span class="list-count d-inline-flex mr-1 align-items-center justify-content-center">2</span>Sensor &amp; Communication</h6>
    						<div class="list-item float-text">Built-in sensor connected to external devices for data collection </div>
							<div class="list-item float-text">Built-in Bluetooth 4.0 module </div>
							<div class="list-item float-text">Built-in Wi-Fi</div>
    					</div>
    					<div class="mb-4 ">
    						<h6 class="font-weight-bold float-text"><span class="list-count d-inline-flex mr-1 align-items-center justify-content-center">3</span>leek design</h6>
							<div class="list-item float-text">Unique waterproof design, up to IP65 </div>
							<div class="list-item float-text">Flexible installation for any bathroom, flush mount or wall mount</div>
    					</div>
    				</div>
    				<div class="col-12 col-md-5 ml-auto">
    					<img style="max-width: 100%;" src="/images/imago/sc6_01.png">
    				</div>
				</div>
			</div>

        </section>


        <section class="product-imago-area2 py-md-5">
        	<div class="container">
        		<div class="d-flex d-md-block text-left my-5 align-items-start">
        			<div class="product-title text-uppercase mb-md-3 ml-4 ml-md-0 float-text">SMARt home</div>
        			<div class="product-image flex-first"><img class="sc-image sc-image-01" src="/images/imago/sc7_01.jpg"></div>
        		</div>
        		<div class="d-flex d-md-block text-right my-5 align-items-end">
        			<div class="product-title text-uppercase mb-md-3 mr-4 mr-md-0 float-text">Smart hotel</div>
        			<div class="product-image"><img class="sc-image sc-image-01" src="/images/imago/sc7_02.jpg"></div>
        		</div>
        	</div>
        </section>

        <section>
            <div class="container">
                <div class="py-5">
                    <h5 class="font-weight-bold my-2">{{ __('site.imago_retail_store') }}</h5>

                    <div class="list-item my-1">
                        <i class="fa fa-map icon mr-2" style="width: 16px;"></i>
			<span>Royal Road, Plaines Magnien, Mauritius Postal Code: 51509 </span>

                    </div>
                    <div class="list-item my-1">
                        <i class="fa fa-phone icon mr-2" style="width: 16px;"></i>
			<span>5440-1500/5448-1500 </span>

                    </div>

                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-imago.css') }}"/>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/imago.js') }}"></script>
@endsection
