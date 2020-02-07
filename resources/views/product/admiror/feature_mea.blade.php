@extends('layouts.app')

@section('title')
    @lang('title.Admiror_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')
         
        
          <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item admiror-banner">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/admiror/banner_admiror_e.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/admiror/banner_mob_admiror_e.jpg')"></div>
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
        
        
        <section style="background-color:#000">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="admiror_h1">AVAILABLE NOW</div>
                        </div>
                            <span class="d-lg-block txt_white text-center">
                            <a href="https://www.nexstmall.com/en_hk/avita.html/cto/avita-admiror-laptop?___store=en_hk?___store=zh_hk&utm_source=brandsiteadmirorproductpage&utm_medium=web&utm_campaign=admirorLaunchPhase1&utm_content=overviewpage
" target="_blank" style="color:#7accc8">Buy now > </a>&nbsp;&nbsp; 
                            <a href="{{ route('product.map', 'admiror') }}" class="txt_white">Where to buy ></a>&nbsp;&nbsp; 
                            <a href="#offer" class="txt_white">Offer ></a>
                            </span>
                        </div>
                </div>
        </section>
        
        
        
         <section class="admiror-video" style="background-color:#000;">
        	<div class="banner-block">
                <div class="container"> 
                 <div class="space60"></div> 
			    <!--<iframe id="ytplayer" type="text/html" width="1110" height="630" src="/videos/AVITA_ADMIROR_HK.mp4?controls=1&rel=0&showinfo=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe> -->
                 	<video width="1110" height="625" controls  autoplay loop muted> 
                    	<source src="https://avita.com/videos/AVITA_ADMIROR_Banner.mp4" type="video/mp4">
                    </video> 
	            </div>
            </div>
        </section>
        

        <section class="product-admiror-computer ls-0" id="test" style="background-color:#000">
            <div class="banner-block">
                <div class="container">
                    <div align="center" >

                        <div class="h1">#YouCanBe Expressing Yourself</div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0 col-sm-offset-2 col-sm-8">Be who you are and show your individuality. The choice is yours. #YouCanbe </div>
                        <div class="space30"></div>
                        <div class="Fadein">
                            <img src="/images/admiror/pic_AMIROR01.png">
                        </div>
                        <div class="banner-para ls-0 col-sm-offset-2 col-sm-8">
                            The all-new AVITA ADMIROR takes you on a journey of self-discovery. Shattering the norms and constraints of conventional laptops, the ADMIROR’s intricate designs and eye-catching colours are yours to embrace, because you deserve to be extraordinary!

                        </div> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="banner-data text-center col-lg-12">
                                
                            <img class="hidden-sm-down" src='/images/admiror/pic_feature01.png' />
                            <img class="hidden-md-up" src='/images/admiror/pic_feature01_mob.png' /> 
                                
                        </div> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="h1">AVITA ADMIROR brings you</div>
                        
                        
                   		<section class="banner-anchor">
                            <div class="container">
                                
                                <div class="row">
                                
                                <div align="center" class="col-md-4">
                                    <a href="#artistic_design">
                                        <img class="first" src='/images/admiror/btn_artistic_1.png' />
                                        <img class="hover" src='/images/admiror/btn_artistic_2.png' />
                                    </a>
                                </div>
                                
                                
                                <div align="center" class="col-md-4">
                                     <a href="#usage_experience">
                                        <img class="first" src='/images/admiror/btn_pride_1.png' />
                                        <img class="hover" src='/images/admiror/btn_pride_2.png' />
                                     </a>
                                </div>
                                
                                
                                <div align="center" class="col-md-4">
                                    <a href="#outstanding">
                                        <img class="first" src='/images/admiror/btn_outstanding_1.png' />
                                        <img class="hover" src='/images/admiror/btn_outstanding_2.png' />
                                    </a>
                                </div>
                                
                                </div>
                            </div>
                    	</section>
                             
		               <div class="space60"></div>
                         
                    </div>
                </div>
            </div>
        </section>
        
<!-----Section 1 --------------> 
        <section class="artistic_design ls-0" id="artistic_design"/>
            <div class="banner-block ">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_gothic.jpg) center no-repeat;"></div>
                
                <div class="container admiror-content">
                	<div class="hidden-md-up col-md-12">
                        <img src="/images/admiror/ADMIROR03.png">
                        <div class="space60"></div>
                    </div>
                	<div class="row">
                	
                        <div align="center" class="col-lg-12" >
                        <div class="admiror_h1">An artistic design</div>
                        <div class="admiror_h3 mb-4 mb-sm-5" >to flaunt your identity</div>                        
                            <div class="space60"></div>
                        </div>
                    </div> 
                    
                    <div class="banner-image hidden-sm-down">
                        <img class="bc-computer-image admiror01" src="/images/admiror/ADMIROR03.png">
                    </div>
  
                	<div class="row">
                    	<div class="col-sm-7"></div>
                        <div class="banner-info col-sm-5">
                            <div class="admiror_h2">Exquisite design that combines Gothic architectural aesthetics</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white text-left">Inspired by the magnificence of the Gothic architecture, the brand new AVITA ADMIROR series combines contemporary architectural aesthetics into its state-of-the-art technology. The ADMIROR features an ultra-slim body in a modern design, paying attention to the smallest detail. The hinge concealed between the screen and the keyboard references the renowned flying buttress of the Gothic design. The essence of the grand and tall Gothic architecture is reflected in the laptop's slender body that contrasts with the rounded hedge, mimicking the iconic pointed arches. With a unique appearance inspired by epoch-making architectural art, ADMIROR is an iconic design for fashionistas and those who crave for an individual style.</span>
                            </div>
                            <div class="space60"></div>
                            <div class="admiror_h2">Stand out with colors</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white text-left">ADMIROR makes sure your individuality gets all the attention. The new series offers 5 unique color options to express your personal style. Be it the rebellious Blazing Brown or Flaming Copper, the eye-catching Delight Pink or Pride Blue, or the soothing Traveler Green, the ADMIROR simply compliments any outfit you choose to wear.
    (Choice of 3 colours available now: Flaming Copper, Delight Pink and Blazing Brown)</span>
                            </div>
                        </div><!--banner-info col-sm-6-->
                   </div><!--row-->
                </div>
            </div>
        </section>
                
        <section style="background-color:#FFF;">
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                        <div class="Fadein-up">
                            <img src="/images/admiror/ADMIROR02.png">
                        </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                    <div class="row">
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">Ultra-compact body for unsurpassed portability</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">The ultra-portable ADMIROR is housed in a light metallic chassis. At merely 9mm at its thinnest part, the device weighs from just 1.32kg, making it extremely handy to carry around as your favourite gadget to roam the world over.</span>

                        </div>
                    </div>
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">Push your limits with a wider view</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Push the limits by garnering a wider view. The 7mm narrow bezel on the ADMIROR gives your maximised screen areas and eliminates distraction for an immersive viewing experience, whether you are at work or just want to sit back and chill.</span>

                        </div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                                        
                   
                        
                    <!-----End 3 Button-1-------------->
                    
                    </div>
                    <div class="space60"></div>
                </div>
        </section>


<!-----Section 2 -------------->
        <section style="background-color:#FFF;" id="usage_experience">
                <div class="container">
                    <div class="space60"></div>
                    <div class="row">
                        <div align="center" class="col-12 col-md-12">
                        <div class="admiror_h3 txt_black">Usage Experience that you can feel </div>
                        <div class="admiror_h1 txt_black">PRIDE & DELIGHTED</div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    <div class="row hidden-sm-down">

<!-----9 box -------------->
                        <div align="left" class="col-12 col-md-8" style="background:url(/images/admiror/bg_A1.jpg) center no-repeat;">
    
                        </div>
                        
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2; padding:50px 30px; height:380px">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0rem;">Realistic image with stunning clarity</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.5rem;">The ADMIROR series offers a 14-inch and a 15.6-inch screen size, both with with 4K ULTRA HD IPS display (3840 x 2160) touchscreen functionalities. The lifelike image quality, combined with the versatile touchscreen capabilities, offers an enjoyable viewing experience browsing websites or watching video clips.</span>
    
                            </div>
                        </div>
                    </div>
<!---2nd Row----------->  
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_B1.jpg) center no-repeat;">
    
                        </div>
                        
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2;  padding:80px 30px; height:380px">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0rem;">Easy and smooth navigation</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.5rem;">Explore endless possibilities with ADMIROR's intelligent touchscreen that allows you to navigate websites and videos with greater ease.
                                </span>
    
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_B3.jpg) center no-repeat;">
    
                        </div>
                        
                    </div>
<!---3rd Row----------->                    
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2;  padding:60px 30px; height:380px;">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0rem;">Backlit keyboard for unbounded exploration</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.5rem;">The backlit design of the keyboard enables you to locate each keycap in dimly-lit environments. Work and entertainment are no longer constrained by time and place. This feature makes uninterrupted workflow possible and helps you explore the world anytime anywhere.
                                </span>
    
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_C2.jpg) center no-repeat;">
    
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2; padding:80px 30px;">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0rem;">Exceptional audio-visual experience</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.5rem;">Music is a big part of an identity. ADMIROR's 4 passive boosters and 2 full range speakers are set to bring out the best audio-visual experience for your enjoyment.
                                </span>
    
                            </div>
                        </div>
<!-----End 9 box -------------->                    	
                                              
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
        </section> 
        
<!-----PRIDE & DELIGHTED Mobile -------------->
        <section class="hidden-md-up" style="background-color:#FFF;" >
        	<div class="banner-block">
                <div class="container">
                    <div class="row">
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_01.jpg' style="width:100%"/> 
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">Realistic image with stunning clarity</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">The ADMIROR series offers a 14-inch and a 15.6-inch screen size, both with with 4K ULTRA HD IPS display (3840 x 2160) touchscreen functionalities. The lifelike image quality, combined with the versatile touchscreen capabilities, offers an enjoyable viewing experience browsing websites or watching video clips.</span>
								<p>
                                <small>* The 14-inch FHD IPS display (1920 x 1080) is currently available. The 15.6-inch and other 4K with touchscreen models are launching soon.</small>
                                </p>
                    	<div class="space30"></div>
							</div>                                    
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_02.jpg' style="width:100%"/>   
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">Easy and smooth navigation</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">Productivity is further boosted with the extra-large touch panel that supports multi-touch control, significantly enhancing the overall flexibility and accuracy.</span>
							</div>    
                    	<div class="space30"></div>
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_03.jpg' style="width:100%"/> 
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">Exceptional audio-visual experience</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">Music is a big part of an identity. ADMIROR's 4 passive boosters and 2 full range speakers are set to bring out the best audio-visual experience for your enjoyment.</span>
							</div>
                    	<div class="space30"></div>
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_04.jpg' style="width:100%"/>  
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">Backlit keyboard for unbounded exploration</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">The backlit design of the keyboard enables you to locate each keycap in dimly-lit environments. Work and entertainment are no longer constrained by time and place. This feature makes uninterrupted workflow possible and helps you explore the world anytime anywhere.</span>
							</div>         
                    	<div class="space30"></div>
						</div>
                        
                        
                    </div>
                </div>
        	</div>
        </section>



<!-----Section 3 -------------->

        <section id="outstanding">
        	<div class="banner-block">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_admiror02.jpg) top center no-repeat;"></div>
                <div class="container">
                	<div class="padding-bottom-l">                    
        <!-----3 Button-1-------------->
                
                      
        <!-----End 3 Button-1-------------->        
        			
                    <div class="space60"></div>
                    <div class="space60"></div>
                    
                    <div class="outstanding">
                        
                        
                        <div class="row">
                        	 <div class="hidden-md-up col-md-12">
                                <img src="/images/admiror/amiror_top.png">
                                <div class="space60"></div>
                            </div>

                             <div align="left" class="col-12 col-md-4"></div>
                            <div align="left" class="col-12 col-md-8">
                            <div class="admiror_h1 txt_white" >OUTSTANDING </div>
                            <div class="admiror_h3 txt_white" >Performance that you can count on </div>
                            </div>
                        </div>

                        <div class="space60"></div>
                        <div class="row">
                        <div align="left" class="col-12 col-md-4"></div>
                        <div align="left" class="col-12 col-md-8">
                            <div class="admiror_h2">Incredible performance that brings superb productivity </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">ADMIROR is so much more than its look. Thanks to the new 8th generation Intel® Core<sup>TM</sup> i5-8265U/i7-8565U processor and 8GB RAM, the processing speed is greatly enhanced. Supporting SSD of up to 512GB, the ADMIROR is your ideal storage solution.</span>
    
                            </div>
                        </div>
                        </div><!--row--->
	                    <div class="space60"></div>
                    
                    </div><!--outstanding--?
                    
                    
                   </div><!-- banner-padding -->
                </div>
        	</div>
        </section>
        
        <div class="float_img hidden-md-down">
            <img src="/images/admiror/amiror_top.png">
        </div>

<!-----Section 4 -------------->

        <section class="worry-free" >
        	<div class="banner-block">
                <div class="banner-bg hidden-md-down" style=" background:url(/images/admiror/bg_admiror03.jpg) center no-repeat"></div>
                <div class="hidden-md-up col-md-12">
                    <img src="/images/admiror/bg_admiror03_mob.jpg">
                </div>
                <div class="container">
                    <div class="space60"></div>
                    <div class="row">
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">Worry-free login and data security </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block txt_white">Gone are the days when password is used for login. ADMIROR incorporates fingerprint reader and works seamlessly with Windows Hello for both convenient log-in and strengthened privacy protection. You can rest assured that every piece of work and personal data is well protected.</span> 
                        </div>
                        <div class="img-inline">
                        	<ul>
                                <li>
                                <img src='/images/admiror/pic_window_hello.png' width="100px" /> 
                                </li>
                                <li>
                                <img src='/images/admiror/pic_fingerprint.png' width="100px" />                                
                                </li>
                           </ul>   
                        </div>
                    </div>
                    </div>
                    <div class="space60"></div>
                </div>
        	</div>
        </section>


<!-----Section 5 -------------->

        <section class="product-liber-power" style="background-color:#777;" >
        	<div class="banner-block">
                <div class="container"> 
                <div class="bottom-banner-bg">

                    <div class="row">
                    	<div class="float_img2">
                            <img src="/images/admiror/ADMIROR05.png">
                        </div>
                        <div align="left" class="col-12 col-md-5">
                            <div class="admiror_h2">Productivity maximized by Extended battery</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">Battery life lasts up to 10 hours. Without the need to look around for a power source, let your creativity flow and stay uninterrupted during your work or a favourite show.</span>    
                            </div> 
                    		<div class="space30"></div>
                            <div class="admiror-battery-wrap txt_white">
                                    Up to <br />
                                    <img src='/images/admiror/10hr_e.png' />
                                    <br />
                                    Battery life
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-2"> 
                    		<div class="space60 hidden-md-up"></div>
                        </div>
                        <div align="left" class="col-12 col-md-5">
                            <div class="admiror_h2">Connectivity that fits your needs</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">With two built-in USB-C ports, the ADMIROR is the perfect for work on the go. The ADMIROR comes with a USB-C to USB, HDMI and 3.5mm audio jack adapter, ensuring the highest connectivity. Meanwhile, the USB-C to 3.5mm headphone jack cable allows you to indulge in your favorite jam.<br />
    <br />
    Colour-coordinated wireless mouse and portable bluetooth speaker will be launched soon.</span>
    
                            </div>
                             <div class="img-inline">
                                <ul>
                                    <li>
                                    <img src='/images/admiror/pic_usb_adapter.png' width="220px" />
                                    <p class=" txt_white">USB-C to<br/>USB/HDMI/3.5mm audio jack adapter</p>
                                    </li>
                                    <li>
                                    <img src='/images/admiror/pic_usb_c.png' width="100px" />                                
                                    </li>
                               </ul>  
                            </div>
                        </div>
                    
                    </div>
                </div>
        	</div>
            </div>
        </section>
        
        
        
<!-----Section 6 -------------->

        <section class="color-choice" id="offer">
        	<div class="banner-block">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_admiror06.jpg) top center no-repeat;"></div>
                <div class="banner-bg hidden-sm-up" style="background-color:#000"></div>
                <div class="container">  
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="admiror_h2">Choice of 3 colours available now</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">Blazing Brown, Flaming Copper and Delight Pink (Coming soon: Pride Blue, Traveler Green)</span>    
                            </div> 
                        </div>
                    </div>        
                    <div class="row">
                        <div align="left" class="col-12 col-md-5">
                            <div class="img-inline">
                                <img src="/images/admiror/pic_offer.png" width="100%">
                            </div>
                             <div class="banner-para">
                                <span class="d-lg-block txt_white text-center" style="margin-top:15px;">
                                      
                                    <a href="https://www.nexstmall.com/en_hk/avita.html/cto/avita-admiror-laptop?___store=en_hk?___store=zh_hk&utm_source=brandsiteadmirorproductpage&utm_medium=web&utm_campaign=admirorLaunchPhase1&utm_content=overviewpage
        " target="_blank" style="color:#7accc8">Buy now > </a>&nbsp;&nbsp; 
                                    <a href="{{ route('product.map', 'admiror') }}" class="txt_white">Where to buy ></a>
                                </span>
                            </div>
                        </div>
                    
                    </div>
                    <div class="space60"></div> 
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
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}"/> 
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/pura.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>

	<script>
    	new WOW().init();
    </script>
@endsection
