@extends('layouts.app')

@section('title')
    @lang('title.LIBER_v_home_amd')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_amd_banner_tc.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_amd_banner_tc_mo.jpg')"></div>
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
                        	<div class="h2 banner-header">全新上市</div>
                        </div>
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <a href="https://www.nexstmall.com/products/avita-liber-v-14-amd-version" target="_blank" style="color:#09F">立即購買 ></a>&nbsp;&nbsp; 
                            <a href="{{ route('product.map', 'liber-v') }}" style="color:#09F">銷售地點 ></a>
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
                    	<div class="h1 banner-header mb-4 mb-sm-5">風格．獨樹一格</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">以「Limitless Evolution」為系列理念，注入以鮮明多變為創作原則的後現代建築設計風格，LIBER V 參照西班牙La Muralla Roja前衛堡壘，獨樹一格地以俐落的幾何線條，把網絡鏡頭劃出螢幕界限。完美演繹後現代主義的幾何立方結構風格，令機身更纖巧，亦更容易開啟。配合亮麗的機身色系，為手提電腦的設計時尚帶來重新詮釋！</span> 
                        </div> 
                    </div>
                    
                    <div class="banner-image">
                    	<img class="bc-computer-image bc-computer-1" src="/images/liber-v/LiberV_14colors.png">
                    </div>
                    
                </div>
            </div>
        </section>
        
        
        
        
        <section>
        <div class="banner-block" style="padding: 50px 0px;" >
        <div class="banner-bg hidden-sm-down" style="background:url(/images/liber-v/liber_v_amd_ryzen_bg1_tc.jpg) center no-repeat;background-size: contain;    background-color: #000;"></div>
            <div class="container">
                <div class="row">
                	<div class="col-12 col-lg-6" align="left" style="background-color:#000;color: #fff;">  
                        <div class="space60"></div>
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase; color:#fff;">遊戲娛樂．暢快無比</div></div>
                        <div class="ac-computer-wrap hidden-sm-up">
                          <img class="ac-computer-image ac-computer-2" src="/images/liber-v/liber_v_amd_ryzen_bg1_tc_m.jpg" style="margin-top:15px;">
                        </div>
                <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0">
                        <span class="d-lg-block">全新 LIBER V AMD 版本最高配備 Ryzen 7 3700U 處理器及 Radeon RX Vega 10 顯示卡，讓您隨時隨地可以編輯視訊、播放 4K 電影和快速完成工作任務。其功能強大的系統讓您可於進行遊戲同時擷取影像，享受流暢的視覺和快速的回應速度，為遊戲玩家及創作者提供暢快的體驗。</span>
                        <span class="d-lg-block">&nbsp;</span>
                        <span class="d-lg-block">Ryzen 7 3700U 及 Ryzen 5 3500U 擁有多達 4 個升級「Zen 2」核心，其強大的輸送量及執行力讓您享受遊戲之餘同時擷取影像，提供流暢體驗且快速的回應，令您盡情投入每一個細節！升級「Zen 2」核心比上一代「Zen」架構更增加多達 15%效能及多達兩倍的輸送量，快取容量，作業存取容量及頻寬等，讓您做得更多更快，工作玩樂遊刃有餘！</span>
                        </div>                   
                        <div class="space60"></div>
                    </div>
                </div>
            </div>
        </div>    
        </section>
       

        
         
         
         <section class="product-liber-banner product-liber-v-banner">
            <div class="responsive-block"> 
                <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_tc.jpg')"></div>
                <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_tc_mo.jpg')"></div> 
            </div>
        </section>
 
         
        
        
        
        <section class="product-liber-wifi product-liber-v-view">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image"> 
	                <img class="bc-computer-image fade-img-1" src="/images/liber-v/Features.png"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p03_amd.png"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="h1 banner-header mb-4 mb-sm-5">畫面．精準還原</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">機身細細，但畫面強大。LIBER V 擁有極致纖幼的 3.7mm 無邊際邊框，比以往 LIBER 系列大大縮減了約 63%，達致完美的 78.2% 螢幕機身比例。</span>
                            <span class="d-lg-block">配合 16:9 全高清 IPS 防眩液晶螢幕，能在室內和室外的不同光線下，穩定流暢地呈現螢幕上的細節，精準還原細緻的畫面，令您在這 178 度超廣闊視角內，全情投入 LIBER V 的大世界。</span>
                            <span class="d-lg-block">而上置式的網絡鏡頭，更可展現更佳的拍攝角度，為您帶來更高視野。無論是學習、工作、或玩樂，就由 LIBER V 帶給您前所未見的細緻觀賞體驗。</span>
                        </div> 
                    </div>

                </div>
            </div>
        </section>
        
        
        <!--   
        <section class="product-liber-performance product-liber-v-mon">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">  
	                
                </div> 
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_mon.jpg">
                        </div> 
                        <div class="banner-para ls-0">
                            <span class="d-md-block">極致纖幼的 3.7mm 無邊際邊框</span>
                            <span class="d-md-block">比以往 LIBER 系列大大縮減了約 63%</span>
                            <span class="d-md-block">78.2% 螢幕機身比例</span>
                            <span class="d-md-block">16:9 全高清 IPS 防眩液晶螢幕</span>
                            <span class="d-md-block">178 度超廣闊視角</span>
                        </div>
                         
                    </div>
                </div>
            </div>
        </section>
        -->
        
         
        
        <section class="product-liber-performance product-liber-v-color">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">  
                	<img class="bc-computer-image fade-img" src="/images/liber-v/p04_amd.png" style="max-width:450px;"> 
                    
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p05_amd.png" style="max-width: 350px;margin-right: 100px;">
                </div>
                <div class="container">
                    <div class="banner-info"> 
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">釋放．專屬魅力</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">AVITA一直注重用家個人風格，將時尚色彩融入科技</span>
                            <span class="d-md-block">生活。全新 LIBER V 引入超過 14 款配色任您選擇，</span>
                            <span class="d-md-block">更可享受個人化的鐳射雕刻服務，於機身刻上名字</span>
                            <span class="d-md-block">或字句，注入與眾不同的個性，仿如為您度身訂製</span>
                            <span class="d-md-block">的時尚配件，全面釋放專屬於您的個人魅力，讓您</span>
                            <span class="d-md-block">瞬間成為全場焦點。</span>
                            <span class="d-md-block">更多嶄新配色將陸續推出，為您帶來耳目一新的驚</span>
                            <span class="d-md-block">喜。無論你是職場份子還是時尚達人，LIBER V 一樣</span>
                            <span class="d-md-block">讓您更出色、更出眾。</span>
                        </div>
                         
                    </div>
                     
                </div>
            </div>
        </section>
         
         
        
        
        
        <section class="product-liber-performance product-liber-v-screen" style="background-image:none;">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_screen_amd.jpg"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_screen_amd.jpg"> 
                    		 
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">隨身．玩樂隨心</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V系列再創科技突破，將 14 吋屏幕內藏於 13.3 吋機身內，</span>
                            <span class="d-md-block">以精密的工序打造出細緻的機身，重量僅由 1.30 千克起，</span>
                            <span class="d-md-block">較以往的 LIBER 型號輕 14%，將輕巧與堅固達致最佳的平衡，</span>
                            <span class="d-md-block">務求讓您感受來去自如的便捷體驗。</span>
                            <span class="d-md-block">LIBER V 支援 Windows Hello 指紋辨識功能，過程輕鬆簡便，大大提高個人資料安全保障。出遊或出勤，LIBER V 都可常伴左右，輕鬆隨行無負擔。</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
	                    <img class="bc-computer-image bc-computer-2" src="/images/liber-v/FaceUnlock.png">
                            
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.30</div>千克起
                                </div>
                                <div class="badge-caption">14" 螢幕</div>
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
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p02_amd_tc.png"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_performance_amd.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">性能．內外兼備</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V 不僅外型前衛獨特，性能也兼備 。</span>
                            <span class="d-md-block">AMD Ryzen™ 7 3700U and Ryzen™ 5 3500U 處理器，</span>
                            <span class="d-md-block">結合 8GB 記憶體和提供高達 512GB SSD 固態硬碟的超大容量，</span>
                            <span class="d-md-block">讓您能快速處理和存取大量檔案，效率提升至更高層次，</span>
                            <span class="d-md-block">即使面對繁重工作，依然遊刃有餘。</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">LIBER V 的全尺寸背光鍵盤，具有 1.5mm 按鍵行程及</span>
                            <span class="d-md-block">約 19mm 鍵距，為您帶來舒適流暢的打字體驗。配合特大觸控板，</span>
                            <span class="d-md-block">可完美支援四指觸控，給予您的手指更多發揮空間，</span>
                            <span class="d-md-block">操作更自如，輕鬆實現同時充電、傳輸資料、顯示，</span> 
                            <span class="d-md-block">及連接各種周邊設備，滿足您的不同需要。</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                                
                                <div class="data-card my-3 text-left col-12">
                                    <div class="badge-caption">作業系統</div>
                                    <div class="badge-value">Windows 10 Home</div>
                                </div>
                                <div class="data-card my-3 text-left col-12">
                                    <div class="badge-caption">最高</div>
                                    <div class="badge-value">Ryzen 7 3700U</div>
                                    <div class="badge-caption">AMD</div>
                                </div>
                                
                                <div class="data-card my-3 text-left col-6">
                                    <div class="badge-caption">最高</div>
                                    <div class="badge-value">8<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">RAM</div>
                                </div>
                                 <div class="data-card my-3 text-left col-6">
                                    <div class="badge-caption">最高</div>
                                    <div class="badge-value">512<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">SSD</div>
                                </div>
                                
                                
                                <div class="data-card my-3 text-left col-6">
                                    <div class="badge-value">1.5<span class="badge-caption">毫米</span></div>
                                    <div class="badge-caption">按鍵行程</div>
                                </div>
                                <div class="data-card my-3 text-left col-6" > 
                                    <div class="badge-value">19<span class="badge-caption">毫米</span></div>
                                    <div class="badge-caption">鍵距</div>
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
                     <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 屬於美國及其他國家的Intel 公司所有。</li>
                    <li>產品規格可能會依國家地區而有所變動，我們誠摯的建議您與當地的經銷商或零售商確認目前販售產品的規格。</li>
					<li>產品顏色可能會因拍照光線誤差或螢幕設定而與實際產品有所差異。</li>
					<li>我們會盡力提供正確與完整的資料於網頁上，並保留更動、修正頁面資訊的權利，恕不另行通知。</li>
					<li>重量會因組態及製造差異而有所不同。</li> 
                    <li>銷售顏色可能因零售商而異。</li>
                    <li>產品外觀設計，顏色，配搭可能會因應不同型號和配置而異。</li>
                    <li>如有任何爭議，Nexstgo Company Limited保留最終決定權。</li>
                    
                    
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
