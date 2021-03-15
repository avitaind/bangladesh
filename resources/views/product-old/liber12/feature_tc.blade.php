@extends('layouts.app')

@section('title')
    @lang('title.LIBER_12.5_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/banner3.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/banner3_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/liber12_feature/brand.png">--}}
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc2_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc2_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber12_feature/sc2_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/liber12_feature/sc2_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/liber12_feature/sc2_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/liber12_feature/sc2_fimg6.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-1" src="/images/liber/liber12_feature/sc2_img1.png">
                            <!-- <img class="ac-computer-image ac-computer-2" src="/images/liber/liber12_feature/sc2_img2.png"> -->
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5">由內到外&nbsp;&nbsp;發掘自我</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER是一趟發掘自我的全新旅程，</span>
                            <span class="d-lg-block">是藝術、人文與科技的結合體。</span>
                            <span class="d-lg-block">科技產品不一定只有一種個性，而應該更具靈性。</span>
                            <span class="d-lg-block">LIBER不止是一台筆記型電腦。加入我們，認識更精彩的自己。</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-size"/>
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc3_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc3_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber12_feature/sc3_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/liber12_feature/sc3_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/liber12_feature/sc3_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/liber12_feature/sc3_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/liber12_feature/sc3_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/liber12_feature/sc3_fimg8.png">
                </div>
                <div class="container">
                    <div class="banner-info">

                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">纖薄輕巧&nbsp</div><div class="d-sm-inline">並非遙不可及</div></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc3_fimg2.png">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">我們相信纖薄輕巧的筆電是每位用家的基本需求。</span>
                            <span class="d-lg-block">LIBER 經過精密設計工序打造的全金屬機身，</span>
                            <span class="d-lg-block">最薄之處只有5毫米，重量更輕至1.14千克起，</span>
                            <span class="d-lg-block">令您能輕易將LIBER帶到生活上的各種場景。</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">5.0</div>毫米
                                </div>
                                <div class="badge-caption">最薄的部分</div>
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.14</div>千克起
                                </div>
                                <div class="badge-caption">12.5" 重量</div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc4_fimg1.png">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc4_fimg2.png"> -->
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc4_fimg1.png">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">工作及娛樂體驗&nbsp;&nbsp;</div><div class="d-sm-inline">從未如此愉悅</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">AVITA 團隊的信念是為用戶打造最愉快的工作及娛樂體驗。</span>
                            <span class="d-md-block">LIBER在效能上表現出色，</span>
                            <span class="d-md-block">即使面對複雜工作或處理精緻的視覺效果，</span>
                            <span class="d-md-block">亦能瞬間完成，同時運作順暢無比。</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">作業系統</div>
                                <div class="badge-value">Windows 10 Home</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">Core i5</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
                                <div class="badge-value">256<span class="badge-caption">GB</span></div>
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

        <section class="product-liber-power">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">

                                <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">電源&nbsp;&nbsp;</div><div class="d-sm-inline">不再是前進的障礙</div></div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">LIBER 的每趟使用之旅，無論旅途長短，</span>
                                    <span class="d-lg-block">最高達 8 小時的電池續航力<sup>＊</sup>都能隨時回應您使用所需，</span>
                                    <span class="d-lg-block">由早上在社交網路查看第一則動態新聞開始</span>
                                    <span class="d-lg-block">直至晚上下班回家觀看電影，都不用連接電源。</span>
                                    <span class="d-lg-block">
                                        <small>* 根據MobileMark 2014  測試長達8個小時 (當關閉Wi-Fi、藍芽及音頻，螢幕亮度設定為20，及設定為省電模式下，電池續航時間可長達10個小時)</small>
                                    </span>
                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center justify-content-center">
                                <div class="badge-caption">最高<span class="badge-value">8</span>小時<br>電池續航力</div>
                            </div>
                            <div class="banner-data d-flex flex-wrap justify-content-center ls-0">
                                <div class="data-card">
                                    <div class="badge-caption">&nbsp;</div>
                                    <div class="badge-value">27.8<span class="badge-caption">瓦時</span></div>
                                    <div class="badge-caption">鋰離子電池</div>
                                </div>

                                <ul class="battery-block d-flex"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                                <!-- <div class="data-card">
                                    <div class="badge-caption">快速充電？</div>
                                    <div class="badge-value">10%</div>
                                    <div class="badge-caption">每分鐘</div>
                                </div> -->
                                <!-- <div class="data-card">
                                    <div class="badge-caption">&nbsp;</div>
                                    <div class="badge-value">3<span class="badge-caption">倍</span></div>
                                    <div class="badge-caption">電池使用壽命</div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc6_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h1 banner-header mb-4 mb-sm-5">耳目一新的鍵盤設計</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc6_fimg1.png">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">我們知道，鍵盤的優劣會直接影響您的工作表現，</span>
                            <span class="d-lg-block">LIBER 的鍵盤在每個細節都被重新考慮和設計，</span>
                            <span class="d-lg-block">帶給您最好的舒適度與準確度。LIBER均備有特大觸控板以實現直觀的操作。</span>
                            <span class="d-lg-block"><small>* 為改善用家於暗光環境下的使用體驗，全線12.5"型號均配置背光鍵盤</small></span>
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

        <section class="product-liber-port">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc7_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber12_feature/sc7_fimg3.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc7_fimg1.png">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-lg-inline">安全可信</div></div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">無論在何處使用AVITA手提電腦，安全永遠是我們最高考量。 AVITA 12.5"完整支援 Windows Hello，可利用指紋辨識來登入系統，透過更方便的安全性裝置，無須輸入密碼也能確保資料在任何情況下皆安全無誤。</span>
                        </div>

                        <!--
                        <div class="banner-data ls-0 d-flex flex-wrap justify-content-around">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-value pt-1 pt-md-0"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAASCAMAAAA9mj1BAAAABGdBTUEAALGPC/xhBQAAALpQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/bVsnRQAAAD10Uk5TWdRYpKKwDK8NSK1NuzUjMmJUHhUSSiTKhO48R/veGfn6JU7vhajwmLell+ZRC3TR8QIzxHBgKNP3kBCAALWUMBgAAAEvSURBVDjLpVPXjsMwDHP33nsm3dnbsa+R/v+3znbSQx/TK4GABCECRkQREAgd08bSsE0nlCkivshHblg/JWEZHP0oj5554LkA7adAn7Ge5CdjbCB5IIQyeoz1JbcBXC/gZxmN+CGFtHYp+95LTYwfeAQk9IMUiKa3rpnAHfEmORMzD8kPIZRxQ7xLvrZ0jUAa+CFx0IPtnp1AYULpVAlK6VzyXAhlTCmd5DMntt+Chw4xuQurzRE+wHGzApebxDZgiWv4CGtcgmETtGCBu8+iO1yAhd9Ev3jwF78pX06lWM44SYZKJEkykzwTQhnDJBkXy6kUy1GVqGp6o2wlGrpWzStRFLFevoj1VxH/6t+U5e7GcUe1PY7jkeSREMroxHFXcvOt/q+jy0ri/ej+e+q/XgHcYYvwUFwAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">USB-C 3.0 x 1<br>(支援快速充電)</div>
                            </div>

                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-value"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAAZCAMAAAC1gdb7AAAABGdBTUEAALGPC/xhBQAAAH5QTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/L72lxwAAACl0Uk5TTh93RP2AbSMk23k7pufaPFosQh5jh4wGChbs5PKL8eHoIJDwUGDgsAC0Tew4AAAAx0lEQVQ4y+2URw7CQAwAN733XjcFCP7/B7HMJkLcNrkh5jSKPIeVHLNqGOEc41CxEvh2Dg4DG3n9PEfNRwYbisJucjAFqw2oNnTpR+vGXmvgmHc5TAc0UZfgST/ag1LUC8zS9QzLD9SWdG0dtQqu+Fas65qRxWgRWYQWk2VohZh0QRV1M0HwIHrcg46sRZvIJrSWrEPr34MBTM2+a7YfStahbx+bepDjr9OQpWgJWYKWkjVo+cf0dy3Hvz5ZX7trw6WbeumevwBGteR+q+afiAAAAABJRU5ErkJggg=="></div>
                                <div class="badge-caption">USB 3.0 x 2</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-value"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAAAVCAMAAADFAciVAAAABGdBTUEAALGPC/xhBQAAANJQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/hWL0FwAAAEV0Uk5T1+H7/B0LA/eik5rqCdTxPwz90qhv408e+GLROl/cJBTEPYUpXQrWwFFHCAKrzG7YWzXN3Qb+MbgEtsJInqb5INAQoLAA/mMlZAAAATNJREFUOMvd1Md2gzAQBVAlce+9994bYNMDRPP/v5QJI+OtgV3e6gLinSMhwRjEzAeD0k+slICBwzFy4ttP2TTNBrGFHBAHyBaxgSwTE/Lfmw5VFLLpKFNIZwtBRQ6kjOfngU+GxAnSITrICXGIfBAzEuSeFSk7X+EU1XXdJVFG7og7pExcIlUxuJK3U6LCpfUIHwfc/1aRhGK0iiIknx9VUrpj18/VsqwT0UBeiBekQTwhr8RxV5GCfWF0oh2PjhFU8NGMdoun2bZ9JurIG/GG1IlnpCYGz0ZigzfbPEbaTWA9+PTmUQvm3hf0mLpYgXK4Rym4HxRYLVTG+X5zxKMzDVswxSN53Ow5Z/7ldg2gG2EKDB1gvfXJxK2+BlB7/19VA9D64lX2mlm9+v6OqNZfq/cLKRlbrhLU7OUAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">Mini HDMI x 1</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-value pt-1 pt-md-0"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAMBAMAAADFQ2OWAAAABGdBTUEAALGPC/xhBQAAABhQTFRFncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/ltTdvQAAAAd0Uk5Tz6RayICQALyS1tsAAAAvSURBVBjTYyjHAxgKQnECdobSNJwgnHaS4tidWgiWVMXu1iCK7Cx2wQnMGfAFHwBhFINbs2nndwAAAABJRU5ErkJggg=="></div>
                                <div class="badge-caption">MicroSD 讀卡機</div>
                            </div>
                        </div>
                        -->

                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance2">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc8_fimg1.png">

                    <img class="bc-computer-image bc-computer-4" src="/images/liber/liber12_feature/sc8_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/liber12_feature/sc8_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/liber12_feature/sc8_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/liber12_feature/sc8_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/liber12_feature/sc8_fimg8.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/liber12_feature/sc8_fimg3.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc8_fimg2.png">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5">來一場視覺及聽覺的盛宴</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">AVITA的工程師在開發過程中，</span>
                            <span class="d-lg-block">務求令螢幕能還原更真實的色彩同時維持眼睛舒適度。</span>
                            <span class="d-lg-block">經調較後的對比度，讓影像栩栩如生，細節表現淋漓盡致。</span>
                            <span class="d-lg-block">揚聲器經過設計，廣闊的動態範圍、</span>
                            <span class="d-lg-block">強勁的低音，營造最震撼的聽覺效果。</span>
                            <span class="d-lg-block">無論工作還是在旅途上欣賞音樂或電影，</span>
                            <span class="d-lg-block">LIBER都一應俱全。</span>
                        </div>
                    </div>

                    <div class="banner-data-block d-flex align-items-center justify-content-center">
                        <div class="banner-data-inner ls-0">
                            <div class="banner-data d-flex flex-wrap justify-content-center justify-content-sm-start align-items-center">
                                <div class="data-card col-12 col-sm-3 my-2 my-sm-0">
                                    <div class="badge-image"><img src="/images/liber/liber12_feature/sc8_img1.png"></div>
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
                                    <div class="badge-value">800:1</div>
                                    <div class="badge-caption">對比度</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-12 col-sm-3 my-2 my-sm-3">
                                    <div class="badge-image"><img src="/images/liber/liber12_feature/sc8_img2.png"></div>
                                </div>



                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <div class="badge-value">2聲道</div>
                                    <div class="badge-caption">立體聲音效</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <div class="badge-value">2<span class="badge-caption"></span></div>
                                    <div class="badge-caption">揚聲器</div>
                                </div>


                            </div>

                            <!-- <div class="banner-data d-flex flex-wrap justify-content-between align-items-center pt-3 pt-md-4">
                                <div class="data-card col-12 col-sm-3 my-2 my-sm-0">
                                    <div class="badge-image"><img src="/images/liber/liber12_feature/sc8_img2.png"></div>
                                </div>

                                <div class="data-card col-6 col-sm-4 my-2 my-sm-0">
                                    <div class="badge-value">雙聲道</div>
                                    <div class="badge-caption">立體聲音效</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-0">
                                    <div class="badge-value">2<span class="badge-caption">顆</span></div>
                                    <div class="badge-caption">揚聲器</div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc9_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc9_fimg2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto">
                        <div class="h1 banner-header mb-4 mb-sm-5">隨時隨地&nbsp;&nbsp;保持聯繫</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER隨時隨地為您提供最快的連線方式。</span>
                            <span class="d-lg-block">配備BLUETOOTH 4.2及</span>
                            <span class="d-lg-block">802.11 ac Wi-Fi，速度比802.11n快三倍。</span>
                            <span class="d-lg-block"><small>* 12.5"配備一組USB Type-C 連接埠 (附送USB-C轉USB + HDMI轉接器)</small></span>

                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11 ac</div>
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
