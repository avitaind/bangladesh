@extends('layouts.app')

@section('title')
    @lang('title.Pura_home')
@stop

@section('content')
    <main class="top-nav-padding">
    
    	@include('partials.product-navbar')

        <!-------------------Submenu-------------
        <div class="nav-product-panel">
            <div class="container">
                <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                    <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
                </div>
        
                <div class="product-nav-collapse">
                    <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
        
        
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'pura') }}">@lang('pura.name')</a></li>
        
        
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', 'pura') }}">@lang('site.productnav_spec')</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
                         <li class="nav-item">
                            <a class="nav-link py-1" href="{{ route('product.map', 'liber') }}">銷售地點</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--------------->


        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/pura/AW_PURA_1920x720.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/pura/AW_PURA_991x1050.jpg')"></div>
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
        <section class="product-liber-computer ls-0" id="test" style="background-color:#fff;">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="h2 banner-header">全新上市</div>
                        </div>
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <a href="https://www.nexstmall.com/zh_hk/avita.html/avita-laptops/avita-pura-laptop?___store=zh_hk&utm_source=brandsitepuraproductpage&utm_medium=web&utm_campaign=puraLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#09F">立即購買
 ></a>&nbsp;&nbsp; 
                            <a href="{{ route('product.map', 'pura') }}" style="color:#09F">銷售地點 ></a>&nbsp;&nbsp; 
                            <a href="#offer" style="color:#09F">禮遇 > </a> 
                            </span>
                        </div>
                        <div class="space30"></div>
                    </div>
                </div>
        </section>
        
         <section class="admiror-video" style="background-color:#fff;">
        	<div class="banner-block">
                <div class="container"> 
                 <div class="space30"></div> 
			    <iframe id="ytplayer" type="text/html" width="1110" height="630" src="/videos/AVITA_PURA_HK.mp4?controls=1&rel=0&showinfo=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe> 
	            </div>
            </div>
            <div class="space60"></div>
             <div class="space30"></div>
        </section>
        
        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
                <div class="container">
                    <div class="banner-info">
                        <div class="space60"></div>
                        <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">簡約．不簡單</div>
                        <div class="banner-para">
                            <span class="d-lg-block">崇尚簡約，隨心所欲，</span>
                            <span class="d-lg-block">一切化繁為簡，貫徹真我風格。</span>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
        </section>


        
        <section class="product-liber-wifi ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-2" src="/images/pura/pic_pura01.png">
                </div>
                <div class="container">
                    <div class="banner-info ls-0" style="text-align:left">
                        <div class="h2 mob-text-center banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">全新．全功能</div>
                        
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura01.png">
                        </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">嶄新AVITA PURA系列啟迪著不一樣的簡潔輕巧，率性而為。配合優良的技術規格，全功能的AVITA PURA 以輕便擺脫傳統手提電腦的累贅。</span>
                            <span class="d-lg-block"><a href="{{ route('product.spec', 'pura') }}" style="color:#09F">@lang('site.productnav_spec') ></a></span>
                        </div>
                        
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">作業系統</div>
								<div class="badge-value">Windows 10 in S Mode</div>
                                <div class="badge-caption"><a href="https://support.microsoft.com/zh-tw/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">了解更多 ></a></div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
								<div class="badge-value">Core i5</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
								<div class="badge-value">512<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">SSD</div>
							</div>
							<div class="data-card my-3 text-left">
								<div class="badge-caption">最高</div>
								<div class="badge-value">8<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">RAM</div>
                            </div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/pura/pura_bg3.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left"></div>
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">輕巧．過人</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura02.png">
                        </div>                
                        <div class="banner-para ls-0">14吋 AVITA PURA 機身輕巧纖薄，重量僅由1.344公斤起，為喜歡無拘無束的您提供無與倫比的易攜性。</span></div>
                        <section class="product-liber-wifi">
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                            <div class="data-card mx-3 text-left">
                                <span class="badge-value">5</span>
								<span class="badge-caption">mm</span>
								<div class="badge-caption">Thinnest part</div>
                            </div>
                            <div class="data-card mx-3 text-left">
                                <span class="badge-value">1.344</span>
								<span class="badge-caption">kg</span>
								<div class="badge-caption">14-inch weight</div>
                            </div>
                        </div>
						</section>  

                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div>
        </div>    
        </section>

        <section>
        <div class="banner-block" >
        <div class="banner-bg hidden-sm-down" style="background:url(/images/pura/pura_bg2.jpg) top center no-repeat;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">瞬間．躍動</div></div>
                        <div class="ac-computer-wrap hidden-sm-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pura_bg2_mob.jpg">
                        </div>
                <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0">
捕捉稍遜即逝的絕佳意念，快速起動至為關鍵！AVITA PURA 展示出現代 電腦概念，約20秒即可啟動系統，讓您在彈指之間已經進入工作狀態。配合10小時電池續航力，讓您完美演繹Work Life Combined 理念，隨時隨地為您時刻候命！<br />
<br />
AVITA PURA 配備具有 S 模式的 Windows 10 家用版 ，搭載第8代 Intel® Core™ i3-8145U 或 i5-8265U 處理器，最高搭載 8GB 記憶體及 512GB 固態硬碟， 以及多個接駁端口，充分迎合您的日常需要。</div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div>
        </div>    
        </section>
        

        <section style="background-color:#fff;">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-2">
                    </div>
                	<div class="col-12 col-lg-8" align="center">
                    	<div class="h2 banner-header"><div class="d-sm-inline" style="text-transform:uppercase;">絕佳．體驗</div></div>
                        <div>
                            <img class="Fadein-up" src="/images/pura/pic_pura03.png">
                        </div>
                <div class="space60"></div>
                        <div class="banner-para ls-0">
    						<span class="d-lg-block">AVITA PURA的每項細節，無不經過悉心考慮。高度舒適與準確的鍵盤能提升工作表現，所以AVITA PURA配備了耳目一新的優化鍵盤設計，而具備防滑設計的外殼，有效減低損壞風險。</span>
                        </div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </section>

<!--- SIMPLY PERFECT--------->        
        
        <section style="background-color:#fff;">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-2">
                    </div>
                	<div class="col-12 col-lg-8" align="center">
                    	<div class="h2 banner-header"><div class="d-sm-inline" style="text-transform:uppercase;">拋開繁瑣．發揮極緻</div></div>
                        <div class="banner-para ls-0 py-3">
    						<span class="d-lg-block">PURA預載Windows 10 S 模式。S 模式是一個為了降低裝置負擔而只保留基本功能的Windows版本。除了令啟動速度大幅提升之外，裝置的續航力也變得更持久耐用。除了效能外，你能在 Microsoft Store 找到經過 Microsoft 認證安全性的喜愛應用程式及使用Edge 瀏覽網頁。使用更無憂，瀏覽更安全。視乎個人需要，你更可以隨時將S 模式免費升級至Windows 10家用版，打造貼心使用設定。　
                            </span>
                            <span class="d-lg-block  py-3">
                            <a href="https://support.microsoft.com/zh-tw/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">如何免費切換到Windows 10 家用版　></a>
                            </span>
                            <span class="d-lg-block  mb-3">
								<small>
									*當退出 S 模式並升級至Windows 10家用版後，將無法回復至最初的Windows 10 S 模式。
								</small>
							</span>
                        </div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </section>

   
<!--- Show your color--------->        
        <section style="background-color:#fff;" id="offer">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-2">
                    </div>
                	<div class="col-12 col-lg-8  Fadein" align="center">
                    	<div class="h2 banner-header"><div class="d-sm-inline" style="text-transform:uppercase;">色彩．盡現</div></div>
                <div class="space60"></div>
                        <div class="banner-para ls-0">
    						<span class="d-lg-block">推廣期內，AVITA PURA 隨機附送三合一手提電腦袋乙個，以優質物料量身訂造，質感柔軟。電腦袋共有灰、綠、橙、藍、黑及紫6種不同顏色，盡現型格！</span>
                            <span class="d-lg-block">
<small>*推廣期有限，逾期無效。數量有限，送完即止。</small></span>
                        </div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </section>
       
        <section style="background-color:#fff;">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-12  Fadein" align="center">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-2" src="/images/pura/bag_color.png">
                        </div>
                          <section class="product-liber-wifi">
                             <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center">
                                
                                  <div class="banner-para">
                                    <span class="d-lg-block txt_white text-center">
                                        <a href="https://www.nexstmall.com/zh_hk/avita.html/avita-laptops/avita-pura-laptop?___store=zh_hk&utm_source=brandsitepuraproductpage&utm_medium=web&utm_campaign=puraLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#7accc8">立即購買 > </a>&nbsp;&nbsp; 
                                        <a href="{{ route('product.map', 'pura') }}" style="color:#7accc8">銷售地點 ></a>
                                    </span>
                                </div>
                                 
                            </div>
                          </section>
                    </div>
                </div>
                <div class="space60"></div>
            </div>
        </section>
   
        
        

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                	<li>備註: S 模式的 Windows 10 家用版只能在 Windows 與 Microsoft Store 中的應用程式搭配運作，並且搭配使用與 S 模式的 Windows 10 家用版相容的配件。 單向切換脫離 S 模式可供使用。 如需詳細資訊，請瀏覽 <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>。</li>
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
