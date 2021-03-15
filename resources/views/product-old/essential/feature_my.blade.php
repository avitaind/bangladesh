@extends('layouts.app')

@section('title')
    @lang('title.Essential_home')
@stop

@section('content')
    <main class="top-nav-padding">
    
    	@include('partials.product-navbar')
 

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/essential/AVITA_essential_banner_en.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/essential/AVITA_essential_banner_en_mo.jpg')"></div>
                    <div class="banner-info">
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        <section class="product-liber-computer ls-0" id="test" style="background-color:#fff;">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="h2 banner-header">全新上市</div>
                        </div>
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <a href=" https://www.nexstmall.com/products/avita-pura-14?utm_source=brandsite&utm_medium=kv&utm_campaign=pura" target="_blank" style="color:#09F">立即購買 ></a>&nbsp;&nbsp; 
                            <a href="{{ route('product.map', 'pura') }}" style="color:#09F">銷售地點 ></a>
                            </span>
                        </div>
                        <div class="space30"></div>
                    </div>
                </div>
        </section>
        -->
        
        
        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
                <div class="container">
                    <div class="banner-info" style="max-width:100%;">
                        <div class="space60"></div>
                        <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">All-Day Comfort．Essential Performance</div>
                        <div class="banner-para">
                            <span class="d-lg-block">Versatile entry notebook for everyday use</span>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
        </section>
        
        
        
        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/essential/essential_bg1_en.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left"></div>
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">Meticulously crafted for your every need</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura02.png">
                        </div>                
                        <div class="banner-para ls-0">Essential's Full HD IPS anti-glare display ensures comfortable, distraction-free viewing from every angle while delivering vivid and authentic visuals in pin-sharp detail. Housing a full-size keyboard, the compact laptop is designed for maximum comfort regardless of the environment. Thanks to the comprehensive connection ports that go with most peripherals, Essential offers unrivaled versatility that caters to your every business need.</span></div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </div>    
        </section>


    

        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/essential/essential_bg2_en.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">Effortless performance that breezes through everyday tasks</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/essential/essential_product.png" style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                        </div>                
                        <div class="banner-para ls-0">Essential features an enormous capacity offered by the SATA SSD of up to 128GB for faster data processing and near-instant booting up, making it a work-friendly entry level laptop. With maximum power consumption as low as 2.6GHz, the laptop promises excellent power efficiency and guarantees a battery life longer than ever. Besides, the fan-less design eliminates distracting noises, allowing the device to run most silently so you can stay focused on the tasks on hand. Coupled with professional design, the unique cloth design of Matt White, Matt Black, and Concrete Grey is perfect for your home life!</span></div>                       
                        
                    </div>
                	<div class="col-12 col-lg-6" align="left"></div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div> 
            </div>
        </div>    
        </section>
 
        
    
        <section class="product-liber-wifi ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-2" src="/images/essential/essential_product.png">
                </div>
                <div class="container">
                    <div class="banner-info ls-0" style="text-align:left; min-height:950px;">
                        <div class="h2 mob-text-center banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Light load and perfect for on-the-go</div>
                        
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura01.png">
                        </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Measuring merely 20mm for the 14" model, the lightweight, effortlessly portable Essential is designed to accompany you wherever you go. The thin bezel design in both models offers a maximized screen area that makes graphics more immersive. Outstanding visuals and being easy to carry around means conducting presentations or streaming movies on the go can never be easier.</span>
                            <span class="d-lg-block"><a href="{{ route('product.spec', 'essential') }}" style="color:#09F">@lang('site.productnav_spec') ></a></span>
                        </div>
                        
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between" style="margin-top:30px;">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Operating System</div>
								<div class="badge-value">Windows 10 in S Mode</div>
                                <div class="badge-caption"><a href="https://support.microsoft.com/en-my/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">Know more ></a></div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                <div class="badge-caption">Up to</div>
								<div class="badge-value">N4000</div>
                                <div class="badge-caption">INTEL&reg; Celeron&trade; PROCESSOR</div>
                            </div> 
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                <div class="badge-caption">Up to</div>
								<div class="badge-value">128<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">SSD</div>
							</div>
							<div class="data-card my-3 col-12 col-lg-6 text-left">
								<div class="badge-caption">Up to</div>
								<div class="badge-value">8<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">RAM</div>
                            </div>
                        
                        </div>
                    </div>
                    
                <div class="space60 hidden-sm-down"></div> 

                </div>
            </div>
        </section>
         
        
        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/essential/essential_bg3_en.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div> 
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left"></div>
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">AVITA Essential 14</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura02.png">
                        </div>                
                        <div class="banner-para ls-0">The 14" model comes with a full-sized screen for maximized viewing comfort even after a long day of use. Its stunning performance and capabilities make it an ideal device for everyday office work or an e-learning notebook for students.</span></div>
                        
                        <section class="product-liber-wifi">
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                            <div class="data-card mx-3 text-left">
                                <span class="badge-value">1.377</span>
								<span class="badge-caption">kg</span>
								<div class="badge-caption">14-inch weight</div>
                            </div>
                        </div>
						</section>  
                        
                        
                    </div>
                    
                    
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div> 
            </div>
        </div>    
        </section>


     

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                	<li>Windows 10 Home in S mode works exclusively with apps from the Microsoft Store within Windows and accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is available. Learn more at <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>. </li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                </ul>
            </div>
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
