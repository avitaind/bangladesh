@extends('layouts.app')

@section('title')
    @lang('title.LIBER_u_series_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber/liber_u_feature/banner.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber/liber_u_feature/banner_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/liber_u_feature/brand.png">--}}
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc2_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc2_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber_u_feature/sc2_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/liber_u_feature/sc2_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/liber_u_feature/sc2_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/liber_u_feature/sc2_fimg6.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-1" src="/images/liber/liber_u_feature/sc2_img1.png">
                            <!-- <img class="ac-computer-image ac-computer-2" src="/images/liber/liber_u_feature/sc2_img2.png"> -->
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5">由内到外&nbsp;&nbsp;发掘自我</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER是一趟发掘自我的全新旅程，</span>
                            <span class="d-lg-block">是艺术、人文与科技的结合体。</span>
                            <span class="d-lg-block">科技产品不一定只有一种个性，而应该更具灵性。</span>
                            <span class="d-lg-block">LIBER不止是一台笔记型电脑。加入我们，认识更精彩的自己。</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-size"/>
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc3_fimg1.png" style="right: 840px">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc3_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber_u_feature/sc3_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/liber_u_feature/sc3_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/liber_u_feature/sc3_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/liber_u_feature/sc3_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/liber_u_feature/sc3_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/liber_u_feature/sc3_fimg8.png">
                </div>
                <div class="container">
                    <div class="banner-info">

                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">纤薄轻巧&nbsp;&nbsp;</div><div class="d-sm-inline">并非遥不可及</div></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber_u_feature/sc3_fimg2.png">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">我们相信纤薄轻巧的笔电是每位用家的基本需求。</span>
                            <span class="d-lg-block">LIBER 经过精密设计工序打造的全金属机身，</span>
                            <span class="d-lg-block">最薄之处只有5毫米，重量更轻至1.35(13.3”)及1.46(14”)千克起，</span>
                            <span class="d-lg-block">令您能轻易将LIBER带到生活上的各种场景。</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">5.0</div>毫米
                                </div>
                                <div class="badge-caption">纤薄</div>
                            </div>
                            <div class="data-card data-card-2 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                {{-- <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">180</div>度
                                </div>
                                <div class="badge-caption">铰链</div> --}}
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.35</div>千克起
                                </div>
                                <div class="badge-caption">13.3" 重量</div>
                            </div>
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.46</div>千克起
                                </div>
                                <div class="badge-caption">14" 重量</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc4_fimg1.jpg">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc4_fimg2.png"> -->
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber_u_feature/sc4_fimg1.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">工作及娱乐体验&nbsp;&nbsp;</div><div class="d-sm-inline">从未如此愉悦</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">AVITA 团队的信念是为用户打造最愉快的工作及娱乐体验。</span>
                            <span class="d-md-block">LIBER在效能上表现出色，</span>
                            <span class="d-md-block">即使面对复杂工作或处理精致的视觉效果，</span>
                            <span class="d-md-block">亦能瞬间完成，同时运作顺畅无比。</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">作业系统</div>
								<div class="badge-value">Windows 10 Home</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">Core i7</div>
                                <div class="badge-caption">8th Gen INTEL® CORE™ PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">512<span class="badge-caption">GB</span></div>
                                <!-- <div class="badge-caption">PCle Gen 3 SSD</div> -->
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">8<span class="badge-caption">GB</span></div>
                                <div class="badge-caption">RAM</div>
                            </div>
                            <!-- <div class="data-card">
                                <div class="badge-caption">可提升至</div>
                                <div class="badge-value">3.6<span class="badge-caption">GHz</span></div>
                                <div class="badge-caption">频率</div>
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

        <section class="product-liber-power">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc5_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">

                                <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">电源&nbsp;&nbsp;</div><div class="d-sm-inline">不再是前进的障碍</div></div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">LIBER 的每趟使用之旅，无论旅途长短，</span>
                                    <span class="d-lg-block">最高达 10小时的电池续航力<sup>＊</sup>都能随时回应您使用所需，</span>
                                    <span class="d-lg-block">由早上在社交网路查看第一则动态新闻开始</span>
                                    <span class="d-lg-block">直至晚上下班回家观看电影，都不用连接电源。</span>
                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber_u_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center justify-content-center">
                                <div class="badge-caption">最高<span class="badge-value">10</span>小时<br>电池续航力</div>
                            </div>
                            <div class="banner-data d-flex flex-wrap justify-content-center ls-0">
                                <div class="data-card">
                                    <div class="badge-caption">&nbsp;</div>
                                    <div class="badge-value">36.7<span class="badge-caption">瓦时</span></div>
                                    <div class="badge-caption">锂聚合物电池</div>
                                </div>

                                <ul class="battery-block d-flex"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                                <!-- <div class="data-card">
                                    <div class="badge-caption">快速充电？</div>
                                    <div class="badge-value">10%</div>
                                    <div class="badge-caption">每分钟</div>
                                </div> -->
                                <!-- <div class="data-card">
                                    <div class="badge-caption">&nbsp;</div>
                                    <div class="badge-value">3<span class="badge-caption">倍</span></div>
                                    <div class="badge-caption">电池使用寿命</div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="product-liber-keyboard">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc6_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h1 banner-header mb-4 mb-sm-5">耳目一新的键盘设计</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber_u_feature/sc6_fimg1.png">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">我们知道，键盘的优劣会直接影响您的工作表现，</span>
                            <span class="d-lg-block">LIBER 的键盘在每个细节都被重新考虑和设计，</span>
                            <span class="d-lg-block">带给您最好的舒适度与准确度。</span>
                        </div>
                        <!-- <div class="banner-data d-flex justify-content-around">
                            <div class="data-card">
                                <div class="badge-value">512<span class="badge-caption">厘米</span></div>
                                <div class="badge-caption">行程距离</div>
                            </div>
                            <div class="data-card">
                                <div class="badge-value">512<span class="badge-caption">厘米</span></div>
                                <div class="badge-caption">按键间距</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-port">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc7_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber_u_feature/sc7_fimg3.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber_u_feature/liber_u_feature/sc7_fimg1.png">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-lg-inline">安全可信</div></div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">无论在何处使用AVITA手提电脑，安全永远是我们最高考量。 AVITA 完整支援 Windows Hello，可利用指纹辨识来登入系统，透过更方便的安全性装置，无须输入密码也能确保资料在任何情况下皆安全无误。</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance2">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc8_fimg1.png">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc8_fimg2.png"> -->

                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber_u_feature/sc8_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/liber_u_feature/sc8_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/liber_u_feature/sc8_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/liber_u_feature/sc8_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/liber_u_feature/sc8_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/liber_u_feature/sc8_fimg8.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber_u_feature/sc8_fimg2.png">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5">来一场视觉及听觉的盛宴</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">AVITA的工程师在开发过程中，</span>
                            <span class="d-lg-block">务求令荧幕能还原更真实的色彩同时维持眼睛舒适度。</span>
                            <span class="d-lg-block">经调较后的对比度，让影像栩栩如生，细节表现淋漓尽致。</span>
                            <span class="d-lg-block">扬声器经过设计，广阔的动态范围、</span>
                            <span class="d-lg-block">强劲的低音，营造最震撼的听觉效果。</span>
                            <span class="d-lg-block">无论工作还是在旅途上欣赏音乐或电影，</span>
                            <span class="d-lg-block">LIBER都一应具全。</span>
                        </div>
                    </div>

                    <div class="banner-data-block d-flex align-items-center justify-content-center">
                        <div class="banner-data-inner ls-0">
                            <div class="banner-data d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center">
                                <div class="data-card col-12 col-sm-3 my-2 my-sm-0">
                                    <div class="badge-image"><img src="/images/liber/liber_u_feature/sc8_img1.png"></div>
                                </div>
                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <div class="badge-value">72%</div>
                                    <div class="badge-caption">NTSC</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <div class="badge-value">1920x1080</div>
                                    <div class="badge-caption">解像度</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-sm-3">
                                    <div class="badge-image"></div>
                                </div>

                                <div class="data-card col-sm-9 my-2 my-sm-3">
                                    <div class="badge-value">1000:1</div>
                                    <div class="badge-caption">对比度</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-12 col-sm-3 my-2 my-sm-3">
                                    <div class="badge-image"><img src="/images/liber/liber_u_feature/sc8_img2.png"></div>
                                </div>

                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <div class="badge-value">2声道</div>
                                    <div class="badge-caption">立体声音效</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <div class="badge-value">2<span class="badge-caption"></span></div>
                                    <div class="badge-caption">扬声器</div>
                                </div>


                            </div>

                            <!-- <div class="banner-data d-flex flex-wrap justify-content-between align-items-center pt-3 pt-md-4">
                                <div class="data-card col-12 col-sm-3 my-2 my-sm-0">
                                    <div class="badge-image"><img src="/images/liber/liber_u_feature/sc8_img2.png"></div>
                                </div>

                                <div class="data-card col-6 col-sm-4 my-2 my-sm-0">
                                    <div class="badge-value">双声道</div>
                                    <div class="badge-caption">立体声音效</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-0">
                                    <div class="badge-value">2<span class="badge-caption">颗</span></div>
                                    <div class="badge-caption">扬声器</div>
                                </div>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-wifi">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc9_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc9_fimg2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto">
                        <div class="h1 banner-header mb-4 mb-sm-5">随时随地&nbsp;&nbsp;保持联系</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER随时随地为您提供最快的连线方式。</span>
                            <span class="d-lg-block">配备BLUETOOTH 4.2 及</span>
                            <span class="d-lg-block">802.11ac Wi-Fi，速度比802.11n快三倍。</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11ac</div>
                                <div class="badge-value">3<span class="badge-caption">倍</span></div>
                                <div class="badge-caption">比802.11n快</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">1300<span class="badge-caption">Mbps</span></div>
                                <div class="badge-caption">速度</div>
                            </div>
                            <!-- <div class="data-card">
                                <div class="badge-caption">&nbsp;</div>
                                <div class="badge-value">2.4<span class="badge-caption">GHz+</span>5<span class="badge-caption">GHz</span></div>
                                <div class="badge-caption">&nbsp;</div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 属于美国及其他国家的Intel 公司所有。</li>
                    <li>产品规格可能会依国家地区而有所变动，我们诚挚的建议您与当地的经销商或零售商确认目前贩售产品的规格。</li>
                    <li>重量会因组态及制造差异而有所不同。</li>
                    <li>产品颜色可能会因拍照光线误差或荧幕设定而与实际产品有所差异。</li>
                    <li>我们会尽力提供正确与完整的资料于网页上，并保留更动、修正页面资讯的权利，恕不另行通知。</li>
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
