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
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/essential/AVITA_essential_banner_tw.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/essential/AVITA_essential_banner_tw_mo.jpg')"></div>
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
                    <div class="banner-info">
                        <div class="space60"></div>
                        <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">靈巧舒適．強大性能</div>
                        <div class="banner-para">
                            <span class="d-lg-block">AVITA入門級Essential筆電靈活多變，</span>
                            <span class="d-lg-block">輕鬆滿足日常工作所需</span>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
        </section> 
        
        
        
        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/essential/essential_bg1.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div> 
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left"></div>
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">貼心設計．照顧工作所需</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/essential/essential_bg1_mo.jpg">
                        </div>                
                        <div class="banner-para ls-0">Essential的FHD全高清IPS螢幕提供舒適視角，並採用防眩光設計，從任何角度都可欣賞到絕佳畫質。精巧機身配備標準鍵盤，即使身處何時何地，打字亦能得心應手。此外，Essential的連接埠一應俱全，助你輕鬆接駁各類周邊裝置，全方位照顧你工作所需。</span></div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </div>    
        </section>


    

        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/essential/essential_bg2.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">卓越性能．應付日常工作</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/essential/essential_bg2_mo.jpg" style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                        </div>                
                        <div class="banner-para ls-0">Essential入門級筆電內藏強大性能。內置SATA 固態硬碟（SSD）容量達128GB，資料存取速度更快，開機時間亦大大縮短，工作效率進一步提高。Essential的低耗電量設計，將筆電耗電量控制於2.6GHz以內，續航力得以提升。另外，筆電採用無扇葉散熱設計，摒除雜音，讓你更專注手頭工作。配上專業設計，紡布白、緞布黑、織布灰3款機殼獨特 布紋設計 ，完美植入你的家居生活！</span></div>                       
                        
                    </div>
                	<div class="col-12 col-lg-6" align="left"></div>
                </div>
                <div class="space60 hidden-sm-down"></div>
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
                        <div class="h2 mob-text-center banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">輕薄設計．輕鬆隨行</div>
                        
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/essential/essential_product.png">
                        </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Essential 14吋型號僅20毫米，輕巧便攜。採用窄邊框設計，於最小空間提供最寬廣的視野。即使在上班、上學或出行的路上，都能輕鬆享受極致畫面。</span>
                            <span class="d-lg-block"><a href="{{ route('product.spec', 'essential') }}" style="color:#09F">@lang('site.productnav_spec') ></a></span>
                        </div>
                        
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">作業系統</div>
								<div class="badge-value">Windows 10 in S Mode</div>
                                <div class="badge-caption"><a href="https://support.microsoft.com/zh-tw/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">了解更多 ></a></div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                <div class="badge-caption">最高</div>
								<div class="badge-value">N4000</div>
                                <div class="badge-caption">INTEL&reg; Celeron&trade; PROCESSOR</div>
                            </div> 
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                <div class="badge-caption">最高</div>
								<div class="badge-value">128<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">SSD</div>
							</div>
							<div class="data-card my-3 col-12 col-lg-6 text-left">
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
        <div class="banner-bg hidden-sm-down" style="background:url(/images/essential/essential_bg3.jpg) top center no-repeat;"></div>
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
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/essential/essential_bg3_mo.jpg">
                        </div>                
                        <div class="banner-para ls-0">14吋型號螢幕較大，即使長時間使用亦能提供舒適的視覺體驗，加上卓越性能，應付文書、上網等日常工作事務綽綽有餘，亦適合學生作網上學習之用。</span></div>
                        
                        <section class="product-liber-wifi">
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap"> 
                            <div class="data-card mx-3 text-left">
                                <span class="badge-value">1.377</span>
								<span class="badge-caption">千克起</span>
								<div class="badge-caption">14" 重量</div>
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
