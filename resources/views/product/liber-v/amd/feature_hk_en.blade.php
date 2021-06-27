@extends('layouts.app')

@section('title')
    @lang('title.LIBER_v_home_amd')
@stop

@section('content')
    <main class="top-nav-padding">

    @include('partials.liber-v-amd-navbar')

    <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/AVITA_liber_v_banner_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/AVITA_liber_v_banner_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber-v/brand.png">--}}
                        </div>
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
         <section class="product-liber-computer ls-0" id="test"  style="background-color:#fff;">
                <div class="container">
                   <!---          <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                      <span class="h1"> COMING SOON</span>
                        </div>
                      
                        
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <span class="buy-now2"><a href="https://www.amazon.in/AVITA-NS14A8INF561-MB-14-inch-i5-10210U-Graphics/dp/B0873JP8WQ/" target="_blank">Buy now ></a></span>
                            <a href="/where-to-buy" style="color:#09F">Where to buy ></a> 
                            </span>
                        </div>
                       --->
                        <div class="space60"></div>
                    </div>
                </div>
        </section>

        

        <section class="product-liber-computer product-liber-v-computer">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="container">
                
                    <div class="banner-info">
                    	<div class="h1 banner-header mb-4 mb-sm-5">Avant Garde Design</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Inspired by the neat geometric lines of La Muralla Roja (The Red Wall) fortress in Spain, the perfect embodiment of Post-Modern architecture, LIBER V’s design completely justifies its slogan ‘Limitless evolution’. Its high-quality webcam stands out quite literally, perfectly completing the picture of a sleek and angular body with pleasing aesthetics. LIBER V comes in 14 vibrant color options* encasing an ultra-slim Aluminum build and equipped with an easy-to-open clip thereby achieving the trifecta of design, durability and function.</span> 
                        </div> 
                    </div>
                    
                    <div class="banner-image">
                    	<img class="bc-computer-image bc-computer-1" src="/images/liber-v/LiberV_14colors_hk_en2.png">
                    </div>
                    
                </div>
            </div>
        </section>
        
       <section class="product-liber-banner product-liber-v-banner">
            <div class="responsive-block"> 
                {{-- <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_en.jpg')"></div> --}}
                {{-- <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_en_mo.jpg')"></div>  --}}
                <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/Avita_Liber_V_Red_Dot_Award_Web.jpg')"></div>
                <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/Avita_Liber_V_Red_Dot_Award_Mob.jpg')"></div> 
            </div>
        </section>
    
        <section class="product-liber-wifi product-liber-v-view">
            <div class="h1 banner-header mb-sm-5 container  text-center pt-3">Statement by the Red Dot Jury</div>
            <div class=" container text-center banner-para ls-0"><span class="d-lg-block">LIBER V impressively combines expressive individuality with state-of-the-art technology, paying attention to carefully crafted details such as the webcam that is beautifully integrated into the frame.</span></div>
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image"> 
	                <img class="bc-computer-image fade-img-1" src="/images/liber-v/Features_hk_en.png"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p03.png"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="h1 banner-header mb-4 mb-sm-5">Experience Visual Transcendence</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Expand your vision with LIBER V’s 3.7 mm unbound ultra-narrow bezel which gives its screen a larger viewing area compared to the previous LIBER notebooks.  A high screen to body ratio at 72.8% combined with an FHD 16:9 IPS anti-glare display allows you to the stretch the limits of your viewing experience for an ultra-wide viewing angle of 178 degrees. Whether you are working or playing; indoors or outdoors, never miss any details with the vibrant image feedback at a quite stable response time with LIBER V.<br/><br/></span> 
                        </div> 
                    </div>

                </div>
            </div>
        </section>
          
        <section class="product-liber-performance product-liber-v-color">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image"> 
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_all.png"> 
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p04.png"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p05.png"> 
                </div>
                <div class="container">
                    <div class="banner-info"> 
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Kaleidoscopic Expression</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">The 14 distinctive and flamboyant color options* of </span>
                            <span class="d-md-block">LIBER V boost its uniqueness as a personality statement accessory. </span>
                            <span class="d-md-block">Now, put your own mark further on LIBER V by opting for</span>
                            <span class="d-md-block">Laser Engraving Service for the chassis. We will keep</span> 
                            <span class="d-md-block">adding more colors and patterns to LIBER V catalog,</span>
                            <span class="d-md-block">keeping you spoilt for choices.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block"></span>
                            <p class="hidden-md-up">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         
         
        
        
        
        <section class="product-liber-performance product-liber-v-screen" >
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_screen.jpg"> 
                </div>
                <div class="container">
                    <div class="banner-info" style="background-image:none;">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_screen.jpg">  
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Prompt Portability</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">The smart design and sophisticated engineering behind </span>
                            <span class="d-md-block">LIBER V ensures that the 14-inch visage of</span>
                            <span class="d-md-block">LIBER V weighs merely 1.25 kgs, 14% lighter than</span>
                            <span class="d-md-block">previous LIBER models, LIBER V achieves the ideal</span>
                            <span class="d-md-block">in terms of easy mobility factor. Combine that</span>
                            <span class="d-md-block">with the fingerprint lock powered by Windows Hello,</span>
                            <span class="d-md-block">and LIBER V becomes the perfect technology weapon,</span>
                            <span class="d-md-block">easy to carry and ready to be unleashed with a snap and a touch.</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                        	
		                   
                            
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">15.9</div>mm
                                </div>
                                <div class="badge-caption">Thin</div>
                            </div>
                            <img class="bc-computer-image bc-computer-2"  style="padding-top:20%;" src="/images/liber-v/FaceUnlock.png">

                            <div class="data-card data-card-2 col-1 my-2 my-sm-4 px-0 px-sm-3">
                            <div class="badge-caption pb-1">
                                    <div class="h1">Fingerprint Reader</div>
                                </div>

                            </div> 
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.25</div>kg
                                </div>
                                <div class="badge-caption">14-inch weight</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
         <section class="product-liber-performance product-liber-v-performance" >
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_performance.jpg"> 
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p02_hk_en.png"> 
                </div>
                <div class="container">
                    <div class="banner-info" style="background-image:none;">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_performance.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Sensational Performance and Productivity</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V takes an evolutionary step forward in terms of </span>
                            <span class="d-md-block">performance parameter by adapting the new 10<sup>th</sup> Gen Intel® </span>
                            <span class="d-md-block">Core™ i5-10210U processors </span>
                           <!-- <span class="d-md-block">3500U- AMD Ryzen™ 7 3700U with 8 GB RAM,</span> --->
                            <span class="d-md-block">an ultra-fast SSD Drive up to 512GB and </span>
                            <span class="d-md-block">preloaded Windows 10 home enabling you to tackle even</span>
                            <span class="d-md-block">the most complex tasks with practiced ease.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block"></span>
                            <p class="hidden-md-up">&nbsp;</p>
                            <span class="d-md-block"></span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block"></span>
                            <p class="hidden-md-up">&nbsp;</p>
                            <span class="d-md-block"></span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block"></span>
                            <p class="hidden-md-up">&nbsp;</p>
                            <span class="d-md-block"></span>
                            <span class="d-md-block">&nbsp;</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                                
                                <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Operating System</div>
                                    <div class="badge-value">Windows 10 Home</div>
                                </div>
                                <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">Core i5</div>
                                    <div class="badge-caption">10th Gen INTEL® CORE™ PROCESSOR</div>
                                </div>
                               
                                <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">8<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">RAM</div>
                                </div>
                                 <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">512<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">SSD</div>
                                </div>
                                
                                 <div class="data-card my-3 text-left data-card-mo1 hidden-md-up"> 
                                    <div class="badge-value">1.5<span class="badge-caption">mm</span></div>
                                    <div class="badge-caption">key travel</div>
                                </div>
                                <div class="data-card my-3 text-left data-card-mo2 hidden-md-up" style="margin-right: -20px;"> 
                                    <div class="badge-value">19<span class="badge-caption">mm</span></div>
                                    <div class="badge-caption">key pitch</div>
                                </div>
                                 
                            </div>
                              <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between hidden-sm-down" style="margin-top:0px;">
                              
                              
                             <div class="data-card my-3 text-left hidden-sm-down" style="padding-right: 100px;"> 
                                <div class="banner-header" style="font-size:1.5rem; opacity:0;">全尺寸背光鍵盤<br/>特大觸控板<br/>支援四指觸控</div>
                            </div> 
                              
                            <div class="data-card my-3 text-left"> 
                                <div class="badge-value">1.5<span class="badge-caption">mm</span></div>
                                <div class="badge-caption">key travel</div>
                            </div>
                            <div class="data-card my-3 text-left" style="margin-right: -20px;"> 
                                <div class="badge-value">19<span class="badge-caption">mm</span></div>
                                <div class="badge-caption">key pitch</div>
                            </div>
                             
                               
                            
                        </div> 
                    </div>
                </div>
            </div>
        </section>
         
         <section class="product-liber-performance product-liber-v-io">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-1" src="/images/liber-v/AVITA_liber_v_io.png">  
                </div> 
            </div>
         </section>
 
        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                     <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                    <li>color options are subject to product availability.</li>

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

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>

@endsection