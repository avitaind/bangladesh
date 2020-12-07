@extends('layouts.app')

@section('title')
    @lang('title.LIBER_v_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_hk_tc.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_hk_tc_mo.jpg')"></div>
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

        <section class="product-liber-computer" id="test">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/sc2_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber-v/sc2_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber-v/sc2_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber-v/sc2_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber-v/sc2_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber-v/sc2_fimg6.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-1" src="/images/liber-v/sc2_img1.png">
                            <!-- <img class="ac-computer-image ac-computer-2" src="/images/liber-v/sc2_img2.png"> -->
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5">外形．破格非凡</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">以「Limitless Evolution」為系列理念，注入以鮮明多變為創作原則的後現代建築設計風格，</span>
                            <span class="d-lg-block">LIBER V 參照西班牙La Muralla Roja前衛堡壘，獨樹一格地以俐落的幾何線條，把網絡鏡頭劃出螢幕界限。</span>
                            <span class="d-lg-block">完美演繹後現代主義的幾何立方結構風格，令機身更纖巧，亦更容易開啟。</span>
                            <span class="d-lg-block">配合亮麗的機身色系，為手提電腦的設計時尚帶來重新詮釋！</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        <section class="product-liber-wifi product-liber-v-view">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-view-1" src="/images/liber-v/AVITA_liber_v_view_1.jpg">
                    <img class="bc-computer-image bc-view-2" src="/images/liber-v/AVITA_liber_v_view_2.jpg">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto">
                        <div class="h1 banner-header mb-4 mb-sm-5">視野．從此無界</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">機身細細，但畫面強大。LIBER V 擁有極致纖幼的 3.7mm 無邊際邊框，比以往 LIBER 系列大大縮減了約 63%，達致完美的 78.2% 螢幕機身比例。</span>
                            <span class="d-lg-block">配合 16:9 全高清 IPS 防昡液晶螢幕，能在室內和室外的不同光線下，穩定流暢地呈現螢幕上的細節，精準還原細緻的畫面，令您在這 178 度超廣闊視角內，全情投入 LIBER V 的大世界。</span>
                            <span class="d-lg-block">而上置式的網絡鏡頭，更可展現更佳的拍攝角度，為您帶來更高視野。無論是學習、工作、或玩樂，就由 LIBER V 帶給您前所未見的細緻觀賞體驗。</span>
                        </div> 
                    </div>

                </div>
            </div>
        </section>
        
        
          <section class="product-liber-keyboard  product-liber-v-color">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_color.jpg">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h1 banner-header mb-4 mb-sm-5">色彩．唯您釋放</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_color.jpg">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">AVITA一直注重用家個人風格，將時尚色彩融入科技生活。全新 LIBER V 引入超過 14 款配色任您選擇，更可享受個人化的鐳射雕刻服務，於機身刻上名字或字句，注入與眾不同的個性，仿如為您度身訂製的時尚配件，全面釋放專屬於您的個人魅力，讓您瞬間成為全場焦點。</span>
                            <span class="d-lg-block">更多嶄新配色將陸續推出，為您帶來耳目一新的驚喜。無論你是職場份子還是時尚達人，LIBER V 一樣讓您更出色、更出眾。</span>
                        </div>
                        <!-- <div class="banner-data d-flex justify-content-around">
                            <div class="data-card">
                                <div class="badge-value">512<span class="badge-caption">厘米</span></div>
                                <div class="badge-caption">行程距離</div>
                            </div>
                            <div class="data-card">
                                <div class="badge-value">512<span class="badge-caption">厘米</span></div>
                                <div class="badge-caption">按鍵間距</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="product-liber-performance product-liber-v-screen">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_screen.jpg">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber-v/sc4_fimg2.png"> -->
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_screen.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">隨身．更是隨心</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V系列再創科技突破，將 14 吋屏幕內藏於 13.3 吋機身內，</span>
                            <span class="d-md-block">以精密的工序打造出細緻的機身，重量僅由 1.28 公克起，</span>
                            <span class="d-md-block">較以往的 LIBER 型號輕 14%，將輕巧與堅固達致最佳的平衡，</span>
                            <span class="d-md-block">務求讓您感受來去自如的便捷體驗。</span>
                            <span class="d-md-block">LIBER V 另備有指紋識別功能，大大提高安全性。</span>
                            <span class="d-md-block">出遊或出勤，LIBER V 都可常伴左右，輕鬆隨行無負擔。</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">5.0</div>毫米
                                </div>
                                <div class="badge-caption">纖薄</div>
                            </div>
                            <div class="data-card data-card-2 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">178</div>度
                                </div>
                                <div class="badge-caption">超廣闊視角</div>
                            </div> 
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.28</div>千克起
                                </div>
                                <div class="badge-caption">14" 重量</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
         <section class="product-liber-performance product-liber-v-performance">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_performance.jpg"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_performance.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">效能．兼顧性能</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V 不僅外型前衛獨特，性能也兼備 。</span>
                            <span class="d-md-block">配備第 10 代 Intel® Core™  i5-10210U/ i7-10510U 處理器，</span>
                            <span class="d-md-block">結合 8GB 記憶體和提供高達 1TB  SSD 固態硬碟的超大容量，</span>
                            <span class="d-md-block">讓您能快速處理和存取大量檔案，效率提升至更高層次，</span>
                            <span class="d-md-block">即使面對繁重工作，依然遊刃有餘。</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">LIBER V 的全尺寸背光鍵盤，具有 1.5mm 按鍵行程及</span>
                            <span class="d-md-block">約 19mm 鍵距，為您帶來舒適流暢的打字體驗。配合特大觸控板，</span>
                            <span class="d-md-block">可完美支援四指觸控，給予您的手指更多發揮空間，</span>
                            <span class="d-md-block">操作更自如。LIBER V 更貼心的配置多個連接端口</span>
                            <span class="d-md-block">和長達 10 小時的電池續航力，為您做好萬全準備，</span>
                            <span class="d-md-block">兼容您的不同裝置，輕鬆實現同時充電、傳輸資料、顯示，</span>
                            <span class="d-md-block">及連接各種周邊設備，滿足您的不同需要。</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">作業系統</div>
								<div class="badge-value">Windows 10 Home</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">Core i7</div>
                                <div class="badge-caption">10th Gen INTEL® CORE™ PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">1<span class="badge-caption">TB</span></div>
                                <div class="badge-caption">SSD</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">8<span class="badge-caption">GB</span></div>
                                <div class="badge-caption">RAM</div>
                            </div>
                            <!-- <div class="data-card">
                                <div class="badge-caption">可提升至</div>
                                <div class="badge-value">3.6<span class="badge-caption">GHz</span></div>
                                <div class="badge-caption">頻率</div>
                            </div> -->
                            <!-- <div class="clearfix col-12"></div> -->
                            <!-- <div class="data-card pr-5">
                                <div class="badge-caption">&nbsp;</div>
                                <div class="badge-value">3X<span class="badge-caption">倍</span></div>
                                <div class="badge-caption">比 SATA3 SSD 快</div>
                            </div>
                            <div class="data-card">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">256<span class="badge-caption">GB</span></div>
                                <div class="badge-caption">RAM</div>
                            </div> -->
                        </div>
                    </div>
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

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
