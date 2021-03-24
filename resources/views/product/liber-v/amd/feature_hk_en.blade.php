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
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_amd_banner_en.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_amd_banner_en_mo.jpg')"></div>
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
        
        <section class="product-liber-video ls-0" style="background-color:#ebf3f5;">
                <div class="container">
                        <div class="space60"></div>
                         
                          <iframe src="https://www.facebook.com/v2.3/plugins/video.php?allowfullscreen=true&amp;autoplay=true&amp;container_width=800&amp;href=https%3A%2F%2Fwww.facebook.com%2FAVITAHongKong%2Fvideos%2F815011582567548%2F" width="1100" height="620" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
                            
                </div>
        </section>
        
         <section class="product-liber-computer ls-0" id="test" style="background-color:#ebf3f5;">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="h2 banner-header">AVAILABLE NOW</div>
                        </div>
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                           <!---
                            <a href="https://www.nexstmall.com/en/products/avita-liber-v-14-amd-version" target="_blank" style="color:#09F">Buy now ></a>&nbsp;&nbsp; --->
                            <a href="{{ route('product.map', 'liber-v') }}" style="color:#09F">Where to buy ></a>
                            </span>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
        </section>
        

        <section class="product-liber-computer product-liber-v-computer">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="container">
                
                    <div class="banner-info">
                    	<div class="h1 banner-header mb-4 mb-sm-5">The Avant-Garde Post-Modern Style</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Taking "Limitless Evolution" as its concept, LIBER V's design is inspired by the creativity of the avant-garde post-modern fortress La Muralla Roja in Spain. LIBER V installs its high-quality webcam out of the screen with neat geometric lines, perfectly interprets the epistemology of geometry. Paired with the vibrant color options of LIBER V, the geometric chassis realizes a slimmer body and an easy-to-open clip, thereby offering a new interpretation of design in laptop fashion.</span> 
                        </div> 
                    </div>
                    
                    <div class="banner-image">
                    	<img class="bc-computer-image bc-computer-1" src="/images/liber-v/LiberV_14colors_hk_en.png">
                    </div>
                    
                </div>
            </div>
        </section>
        
          
       <section>
        <div class="banner-block" style="padding: 50px 0px;" >
        <div class="banner-bg hidden-sm-down" style="background:url(/images/liber-v/liber_v_amd_ryzen_bg1_en.jpg) center no-repeat;background-size: contain;    background-color: #000;"></div>
            <div class="container">
                <div class="row">
                	<div class="col-12 col-lg-6" align="left" style="background-color:#000;color: #fff;"> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60"></div>
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase; color:#fff;">Immersive visual experience</div></div>
                        <div class="ac-computer-wrap hidden-sm-up">
                          <img class="ac-computer-image ac-computer-2" src="/images/liber-v/liber_v_amd_ryzen_bg1_en_m.jpg" style="margin-top:15px;">
                        </div>
                <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0">
                              <span class="d-lg-block">The new LIBER V AMD version is equipped up to Ryzen™ 5 3500U / Ryzen™ 7 3700U mobile processors and augmented by a RX Radeon Vega 10 graphics card, allowing users to have an immersive visual experience and fully dive into PC gaming, video editing, 4K movies, and multi-tasking, anytime and anywhere.</span>
                       <span class="d-lg-block">&nbsp;</span> 
                       <span class="d-lg-block">AMD Ryzen™ 5 3500U / Ryzen™ 7 have up to 4 sensitive "Zen 2" cores, with 2X floating point capabilities and up to 15% higher instructions per cycle, cache capacity, operation access capacity, bandwidth and other features compared to the previous "Zen". User can complete their work efficiently and enjoy a good time for gaming and entertainment. </span> 
                       </div>   
                       
                        </div>                  
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60"></div>
                    </div>
                </div>
            </div>
        </div>    
        </section>
       
        
        
         
         
         <section class="product-liber-banner product-liber-v-banner">
            <div class="responsive-block"> 
                <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_en.jpg')"></div>
                <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_en_mo.jpg')"></div> 
            </div>
        </section>
 
         
        
        
        
        <section class="product-liber-wifi product-liber-v-view">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image"> 
	                <img class="bc-computer-image fade-img-1" src="/images/liber-v/Features_hk_en.png"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p03_amd.png"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="h1 banner-header mb-4 mb-sm-5">Extraordinary Viewing Experience</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Slimmer but greater. The LIBER V series has a 3.7mm unbound ultra-narrow bezel which has been reduced by about 63% compared with previous LIBER series notebooks, one step closer to perfection with its 78.2% screen-to-body ratio. With a full HD 16:9 IPS display with anti-glare, presenting detailed images clearly with a stable response time under various ambient indoor and outdoor lighting conditions, allowing you to enjoy the LIBER V's big world with the ultra-wide viewing angle of 178 degrees. Whether you are studying, working, or simply having fun, LIBER V brings you an extraordinary viewing experience that you have never seen.</span> 
                        </div> 
                    </div>

                </div>
            </div>
        </section>
          
        <section class="product-liber-performance product-liber-v-color">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">  
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p04_amd.png" style="max-width:450px;"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p05_amd.png" style="max-width: 350px;margin-right: 100px;"> 
                </div>
                <div class="container">
                    <div class="banner-info"> 
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Stand Out From The Crowd</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Appealing to different style personalities, LIBER V debuts</span>
                            <span class="d-md-block">with over 14 distinguishably attractive colors. You can</span>
                            <span class="d-md-block">also customize your LIBER V with a laser engraving service,</span>
                            <span class="d-md-block">engraving names or words onto the chassis to reflect your</span> 
                            <span class="d-md-block">unique personal statement, like a fashion accessory tailored</span>
                            <span class="d-md-block">just for you. You can fully release your personal charm</span>
                            <span class="d-md-block">and stand out from the crowd.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block"></span>
                            <p class="hidden-md-up">&nbsp;</p>
                            <span class="d-md-block">More color combinations will be coming soon to suit</span>
                            <span class="d-md-block">your every day needs. Whether you are a professional</span>
                            <span class="d-md-block">or a fashionista, LIBER V makes you shine even more.</span>
                            
                        </div>
                          
                    </div>
                     
                </div>
            </div>
        </section>
         
         
        
        
        
        <section class="product-liber-performance product-liber-v-screen" >
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_screen_amd.jpg"> 
                </div>
                <div class="container">
                    <div class="banner-info" style="background-image:none;">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_screen_amd.jpg">  
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Well-Balancing Lightness and Fun</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V is sophisticatedly engineered by compacting</span>
                            <span class="d-md-block">a 14  screen inside the 13.3 that weights</span>
                            <span class="d-md-block">from just 1.30kg, 14% less than previous models and</span>
                            <span class="d-md-block">well-balancing lightness and durability, bringing you</span>
                            <span class="d-md-block">an easy and convenient experience. LIBER V incorporates</span>
                            <span class="d-md-block">a Windows Hello fingerprint reader, which strengthens</span>
                            <span class="d-md-block">privacy protection. LIBER V can always accompany you</span>
                            <span class="d-md-block">while traveling or working effortlessly.</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                        	
		                    <img class="bc-computer-image bc-computer-2" src="/images/liber-v/FaceUnlock.png">
                            
                            
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.30</div>kg
                                </div>
                                <div class="badge-caption">14  weight</div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_performance_amd.jpg"> 
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p02_amd_en.png"> 
                </div>
                <div class="container">
                    <div class="banner-info" style="background-image:none;">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_performance_amd.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Meet Your Different Needs</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Not only LIBER V is unique in appearance but also in </span>
                            <span class="d-md-block">performance. Adapting the AMD Ryzen™ 7 3700U and Ryzen™ 5 3500U</span>
                            <span class="d-md-block">processors, 8GB RAM and large storage up to 512GB SSD,</span>
                            <span class="d-md-block">LIBER V can swiftly process and access files,</span>
                            <span class="d-md-block">allowing you to work with ease, even with complex workflows.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">LIBER V’s full-size backlit keyboard with 1.5mm key</span>
                            <span class="d-md-block">travel and 19mm key pitch delivers the ultimate word</span>
                            <span class="d-md-block">processing experience that you could ever ask for.</span>
                            <span class="d-md-block">Along with AVITA’s extra-large touchpad, support</span>
                            <span class="d-md-block">for 4 fingers gestures perfectly, you can have more</span>
                            <span class="d-md-block">space to control. Making it possible to simultaneously</span> 
                            <span class="d-md-block">charge, transfer data, display, and connect to various</span>
                            <span class="d-md-block">devices to meet your different needs.</span> 
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                                
                                <div class="data-card my-3 text-left col-12">
                                    <div class="badge-caption">Operating System</div>
                                    <div class="badge-value">Windows 10 Home</div>
                                </div>
                                <div class="data-card my-3 text-left col-12">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">Ryzen 7 3700U</div>
                                    <div class="badge-caption">AMD</div>
                                </div>
                               
                                <div class="data-card my-3 text-left col-6">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">8<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">RAM</div>
                                </div>
                                 <div class="data-card my-3 text-left col-6">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">512<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">SSD</div>
                                </div>
                                
                                 <div class="data-card my-3 text-left col-6"> 
                                    <div class="badge-value">1.5<span class="badge-caption">mm</span></div>
                                    <div class="badge-caption">key travel</div>
                                </div>
                                <div class="data-card my-3 text-left col-6"> 
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
                    <img class="bc-computer-1" src="/images/liber-v/AVITA_liber_v_io_amd.png">  
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
                     <li>Availability of colors may vary by retailers.</li>
                    <li>Product appearance design, color, matching, may vary according to different models and configurations.</li>
                    <li>In the event of any disputes, Nexstgo Company Limited reserves the right of the final decision.</li>
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
