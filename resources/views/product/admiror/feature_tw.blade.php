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
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/admiror/banner_admiror_c.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/admiror/banner_mob_admiror_c.jpg')"></div>
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
                        	<div class="admiror_h1">現已隆重登場</div>
                        </div>
                            <span class="d-lg-block txt_white text-center">
                            <!--<a href="https://www.nexstmall.com/zh_hk/avita.html/avita-laptops/avita-admiror-laptop?___store=zh_hk?___store=zh_hk&utm_source=brandsiteadmirorproductpage&utm_medium=web&utm_campaign=admirorLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#7accc8">立即購買 > </a>&nbsp;&nbsp; -->
                            <a href="{{ route('product.map', 'admiror') }}" class="txt_white">銷售地點 ></a>&nbsp;&nbsp;
                            
                            <!--<a href="#offer" class="txt_white">禮遇 > </a> -->
                            
                            </span>
                        </div>
                </div>
        </section>
        
        
        <section class="admiror-video" style="background-color:#000;">
        	<div class="banner-block">
                <div class="container"> 
                <div class="space60"></div> 
			     <!--<iframe id="ytplayer" type="text/html" width="1110" height="630" src="/videos/AVITA_ADMIROR_HK.mp4?controls=1&rel=0&showinfo=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe> -->
                 	<video width="1110" height="625" controls autoplay loop muted> 
                    	<source src="https://avita.com/videos/AVITA_ADMIROR_Banner.mp4" type="video/mp4">
                    </video> 
	            </div>
            </div>
        </section>
        

        <section class="product-admiror-computer ls-0" id="test" style="background-color:#000">
            <div class="banner-block">
                <div class="container">
                    <div align="center" >

                        <div class="h1">釋放自我 展現個性 #YouCanBe</div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0 col-sm-offset-2 col-sm-8">是時候拒絕隨波逐流，AVITA 全新的 ADMIROR 系列</div>
                        <div class="space30"></div>
                        <div class="Fadein">
                            <img src="/images/admiror/pic_AMIROR01.png">
                        </div>
                        <div class="banner-para ls-0 col-sm-offset-2 col-sm-8">
                           打破常規，以時尚典雅的獨特設計及奪目配色，與你超越平凡、大放異彩！
                        </div> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="banner-data text-center col-lg-12">
                                
                            <img class="hidden-sm-down" src='/images/admiror/pic_feature01.png' />
                            <img class="hidden-md-up" src='/images/admiror/pic_feature01_mob.png' /> 
                                
                        </div> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="h1">AVITA ADMIROR 為你帶來</div>
                        
                        
                   		<section class="banner-anchor">
                            <div class="container">
                                
                                <div class="row">
                                
                                <div align="center" class="col-md-4">
                                    <a href="#artistic_design">
                                        <img class="first" src='/images/admiror/btn_artistic_1c.png' />
                                        <img class="hover" src='/images/admiror/btn_artistic_2c.png' />
                                    </a>
                                </div>
                                
                                
                                <div align="center" class="col-md-4">
                                     <a href="#usage_experience">
                                        <img class="first" src='/images/admiror/btn_pride_1c.png' />
                                        <img class="hover" src='/images/admiror/btn_pride_2c.png' />
                                     </a>
                                </div>
                                
                                
                                <div align="center" class="col-md-4">
                                    <a href="#outstanding">
                                        <img class="first" src='/images/admiror/btn_outstanding_1c.png' />
                                        <img class="hover" src='/images/admiror/btn_outstanding_2c.png' />
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
                        <div class="admiror_h1">盡顯自我的</div>
                        <div class="admiror_h3 mb-4 mb-sm-5" >時尚典雅設計</div>                        
                            <div class="space60"></div>
                        </div>
                    </div> 
                    
                    <div class="banner-image hidden-sm-down">
                        <img class="bc-computer-image admiror01" src="/images/admiror/ADMIROR03.png">
                    </div>
  
                	<div class="row">
                    	<div class="col-sm-7"></div>
                        <div class="banner-info col-sm-5">
                            <div class="admiror_h2">雅緻設計  揉合哥德式建築美學</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white text-left">AVITA ADMIROR 以典雅的哥德式建築設計概念，融入 時尚風格，每個細節都別具匠心。螢幕與鍵盤之間的拱頂裝飾參照哥德式建築的飛扶壁設計，讓與眾不同的 ADMIROR 成為觸目焦點。其修長筆挺的機身與 圓角鉸位渾然天成，完美演繹哥德式建築的尖拱美學。機身的裝飾細節仿如哥德教堂內的花窗玻璃，將典雅時尚風格推向極致。</span>
                            </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                            <div class="space60"></div>
                            <div class="admiror_h2">大放異彩  盡顯風格</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white text-left">"以ADMIROR 的5種破格配色 -- 極具玩味的 「火焰銅」 及 「炫咖啡」，率性的「悅粉紅」及 「榮耀藍」 ， 祟尚自然 的「旅者綠」，配上個性穿搭，讓你贏盡 目光！
（3款已登場配色：火焰銅、悅粉紅、炫咖啡）"</span>
                            </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
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
                        <div class="admiror_h2">纖細機身  輕巧便攜</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">以輕量金屬製作的ADMIROR，纖細精巧，最薄處只有9毫米，重量僅1.32kg起，方便隨身攜帶，是你探索世界的絕佳良伴。</span>

                        </div>
                    </div>
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">窄邊框設計  工作娛樂專心致志</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">要突破界限，首先要擴闊視野。ADMIROR的窄邊框僅7毫米闊，減低視覺障礙和干擾，屏幕亦變得更廣更闊，讓你全情投入工作或娛樂。</span>

                        </div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                                        
                    <!-----3 Button-1--------------> 
                       
                        
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
                        <div class="admiror_h3 txt_black">引以為傲的</div>
                        <div class="admiror_h1 txt_black">使用體驗</div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    
<!-----9 box -------------->
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-8" style="background:url(/images/admiror/bg_A1c.jpg) center no-repeat;">
    
                        </div>
                        
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2; padding:80px 30px; height:380px">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">逼真畫面  細緻清晰</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">ADMIROR系列提供14吋及15.6吋兩款FHD IPS螢幕， 其清晰銳利的影像畫面，不論瀏覽網頁或觀看影片，都能享受細緻流暢的體驗。</span>
    
                            </div>
                        </div>
                    </div>
<!---2nd Row----------->  
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_B1.jpg) center no-repeat;">
    
                        </div>
                        
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2;  padding:100px 30px; height:380px">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">流暢操控  得心應手</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">ADMIROR 配備特大觸控板，支援多點觸控，靈活度及精準度大大提升，應付大小任務都能得心應手。
                                </span>
    
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_B3.jpg) center no-repeat;">
    
                        </div>
                        
                    </div>
<!---3rd Row----------->                    
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2;  padding:100px 30px; height:380px;">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">背光鍵盤  不受環境束縛</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">鍵盤使用背光設計，即是在昏暗的環境中每個鍵帽仍然能清晰易見，工作娛樂從此不受時間及環境限制。
                                </span>
    
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_C2.jpg) center no-repeat;">
    
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2; padding:100px 30px;">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">極致音質  震撼人心</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">ADMIROR將你的音樂品味完美無瑕地呈現，配以四個被動式加兩個全頻的高品質喇叭，帶來精彩絕倫的視聽享受。
                                </span>
    
                            </div>
                        </div>
                      </div>
<!-----End 9 box -------------->                    	



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
							<div class="admiror_h2">逼真畫面  細緻清晰</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">ADMIROR系列提供14吋及15.6吋兩款屏幕選擇，均可選配4K超高清IPS觸控屏（3840 x 2160）*， 其清晰銳利的影像畫面，可上觸控屏幕，不論瀏覽網頁或觀看影片，都能享受細緻流暢的體驗。</span>
								<p>
                                <small>*現率先提供 14吋全高清 IPS（1920 x 1080）型號，15.6吋及其他4K觸控屏型號快將推出。</small>
                                </p>
                    	<div class="space30"></div>
							</div>                                    
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_02.jpg' style="width:100%"/>   
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">流暢操控  得心應手</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">ADMIROR 配備特大觸控板，支援多點觸控，靈活度及精準度大大提升，應付大小任務都能得心應手。</span>
							</div>    
                    	<div class="space30"></div>
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_03.jpg' style="width:100%"/> 
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">極致音質  震撼人心</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">ADMIROR將你的音樂品味完美無瑕地呈現，配以四個被動式加兩個全頻的高品質喇叭，帶來精彩絕倫的視聽享受。</span>
							</div>
                    	<div class="space30"></div>
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_04.jpg' style="width:100%"/>  
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">背光鍵盤  不受環境束縛</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">鍵盤使用背光設計，即是在昏暗的環境中每個鍵帽仍然能清晰易見，工作娛樂從此不受時間及環境限制。</span>
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
                            <div class="admiror_h1 txt_white" >安全可靠的</div>
                            <div class="admiror_h3 txt_white" >卓越性能</div>
                            </div>
                        </div>

                        <div class="space60"></div>
                        <div class="row">
                        <div align="left" class="col-12 col-md-4"></div>
                        <div align="left" class="col-12 col-md-8">
                            <div class="admiror_h2">出色效能  無與倫比</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">ADMIROR 外型出眾，其功能配置亦同樣出色。搭載 第8代 Intel® Core<sup>TM</sup> i5-8265U 或 i7-8565U處理器及8GB記憶體，效能大大提升。最高可搭載512GB SSD，可儲存大量檔案。即使創意再多，ADMIROR都可以一一收錄。</span>
    
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
                        <div class="admiror_h2">指紋登入  輕鬆安全</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block txt_white">ADMIROR支援 Windows Hello及指紋識別功能，一指登入，過程輕鬆簡便。指紋識別亦保障你的工作檔案及個人資料不易外洩，更安全更放心。</span> 
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
                            <div class="admiror_h2">持久電量  釋放潛能</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">長達10小時的電池續航力，工作娛樂從此不受電量限制，讓你無間斷釋放潛能。</span>    
                            </div> 
                    		<div class="space30"></div>
                            <div class="admiror-battery-wrap txt_white">
                                    最高<br />
                                    <img src='/images/admiror/10hr_e.png' />
                                    <br />
                                    電池續航力
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-2"> 
                    		<div class="space60 hidden-md-up"></div>
                        </div>
                        <div align="left" class="col-12 col-md-5">
                            <div class="admiror_h2">全方位連接  無拘無束</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">出外工作要靈活輕便，ADMIROR 內置兩個USB-C連接埠，配上隨機附送的USB-C至USB、HDMI及3.5 mm全方位外置轉換器，連接不同裝置亦毫無難度。另附加USB-C至3.5mm連接線，讓你沉醉於音樂世界。<br />
    <br />
    同款時尚色系無線滑鼠及手提藍芽喇叭即將登場</span>
    
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
                    <div class="space60"></div>
                </div>
        	</div>
            </div>
        </section>
        
<!-----Section 6 -------------->

        <section class="color-choice" id="offer">
        	<div class="banner-block">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_admiror06.jpg) top center no-repeat;"></div>
                <div class="banner-bg hidden-sm-up" style="background-color:#000;"></div>
                <div class="container">  

                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="admiror_h2">3款已登場配色</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">火焰銅、炫咖啡、悅粉紅(即將推出: 榮耀藍, 旅者綠)</span>    
                            </div> 
                        </div>
                    </div>        
                    <div class="row">
                        <div align="left" class="col-12 col-md-4">
                              
                            <div class="banner-para">
                                <span class="d-lg-block txt_white text-center" style="margin-top:15px;">
                                  
                            		<a href="{{ route('product.map', 'admiror') }}" class="txt_white">銷售地點 ></a>
                                  
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
                     <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 屬於美國及其他國家的Intel 公司所有。</li>
                    <li>產品規格可能會依國家地區而有所變動，我們誠摯的建議您與當地的經銷商或零售商確認目前販售產品的規格。</li>
                    <li>重量會因組態及製造差異而有所不同。</li>
                    <li>產品顏色可能會因拍照光線誤差或螢幕設定而與實際產品有所差異。</li>
                    <li>我們會盡力提供正確與完整的資料於網頁上，並保留更動、修正頁面資訊的權利，恕不另行通知。</li>
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
