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

        <section class="product-liber-computer ls-0" id="test">
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
                        <div class="h2 banner-header mb-4 mb-sm-5">Inside-out Vibrancy</div>
                        <div class="banner-para">
                            <span class="d-lg-block">LIBER is a new journey of self-discovery</span>
                            <span class="d-lg-block">through art and humanity in technology.</span>
                            <span class="d-lg-block">Where the form of a laptop remains,</span>
                            <span class="d-lg-block">it on top features chic and interchangeable </span>
                            <span class="d-lg-block">form factors to reveal your true colors.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-size ls-0"/>
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

                        <div class="h2 banner-header mb-4 mb-sm-5">Tangible Lightness</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc3_fimg2.png">
                        </div>
                        <div class="banner-para ls-0">

                            <span class="d-lg-block">LIBER offers great mobility.</span>
                            <span class="d-lg-block">Having no compromise to <br>a silky metallic body</span>
                            <span class="d-lg-block">with the thinnest part of only 5mm and</span>
                            <span class="d-lg-block">weight starting from 1.14kg,</span>
                            <span class="d-lg-block">it comes with an ultra slim and light design</span>
                            <span class="d-lg-block">that unburdens you on the go.</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">&nbsp;</div>
                                <span class="badge-value">5</span>
								<span class="badge-caption">mm</span>
								<div class="badge-caption pt-1">Thinnest part</div>
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">Starting from</div>
                                <span class="badge-value">1.14</span>
								<span class="badge-caption">kg</span>
								<div  class="badge-caption pt-1">12.5-inch weight</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc4_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc4_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Seamless Efficiency</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER is made for the best work and entertainment experience. </span>
							<span class="d-md-block">It is marked with a high performance speed particularly useful in</span>
							<span class="d-md-block">handling complicated operations and visual contents.</span>
                            </div>
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Operating System</div>
								<div class="badge-value">Windows 10 Home</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Up to</div>
								<div class="badge-value">Core i5</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Up to</div>
								<div class="badge-value">256<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">SSD</div>
							</div>
							<div class="data-card my-3 text-left">
								<div class="badge-caption">Up to</div>
								<div class="badge-value">8<span class="badge-caption pl-1">GB</span></div>
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

        <section class="product-liber-power ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">

                                <div class="h2 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Full Battery for All-day Menu</div></div>
    							<div class="banner-para ls-0">
    								<span class="d-lg-block">From the first news feed you get in the morning, </span>
    								<span class="d-lg-block">through a hectic day of work to finally </span>
    								<span class="d-lg-block">some entertainment before sleep, </span>
    								<span class="d-lg-block">LIBER can stay cordless for up to 8 hours*</span>
    								<span class="d-lg-block">to handle all of your daytime activities.</span>
                                    <span class="d-lg-block"><small>* Up to 8 hours on MobileMark 2014
                                            (Up to 10 hours in the condition of Wi-Fi, Bluetooth, audio are off, brightness as 20, and Power in Battery saver mode)</small></span>

                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">Up to <span class="badge-value px-1">8</span> hrs<br>Battery life</div>
    						</div>
    						<div class="banner-data d-flex flex-wrap justify-content-center ls-0">
    							<div class="data-card">
    								<div class="badge-caption">&nbsp;</div>
    								<div class="badge-value text-center">27.8<span class="badge-caption pl-1">Wh</span></div>
    								<div class="badge-caption">Li-ion Battery</div>
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

        <section class="product-liber-keyboard ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc6_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h2 banner-header mb-4 mb-sm-5">Pleasing Keyboard Design</div>
						<div class="ac-computer-wrap hidden-md-up">
							<img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc6_fimg1.png">
						</div>
						<div class="banner-para ls-0">
                            <span class="d-lg-block">Every touch on the keyboard directly</span>
                            <span class="d-lg-block">determines your performance.</span>
                            <span class="d-lg-block">Therefore, LIBER incorporates a pleasing-to-use</span>
                            <span class="d-lg-block">keyboard of delicate details that ensures</span>
                            <span class="d-lg-block">the best comfort and accuracy for you. An extra-large touch pad is equipped on every LIBER to enable intuitive manipulation.</span>
                            <span class="d-lg-block"><small>* Backlit keyboard, which improve input experience in dimly-lit environment, is available on all 12.5-inch models</small></span>

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

        <section class="product-liber-port ls-0">
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
                        <div class="h2 banner-header mb-4 mb-sm-5">Built to be Secured</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">No matter where you use your AVITA notebooks, your security is always our top priority. AVITA Liber 12.5" feature full support for Windows Hello for daily life, replacing passwords with fingerprint reading. With improved convenience and security, you can log in without the need for a password, and keep all your data safe anytime.</span>

                        </div>

                        <!--
                        <div class="banner-data ls-0 d-flex flex-wrap justify-content-around">
                            <div class="data-card mt-2 mb-3 my-sm-0 px-2">
                                <div class="badge-value pt-1 pt-md-0"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAASCAMAAAA9mj1BAAAABGdBTUEAALGPC/xhBQAAALpQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/bVsnRQAAAD10Uk5TWdRYpKKwDK8NSK1NuzUjMmJUHhUSSiTKhO48R/veGfn6JU7vhajwmLell+ZRC3TR8QIzxHBgKNP3kBCAALWUMBgAAAEvSURBVDjLpVPXjsMwDHP33nsm3dnbsa+R/v+3znbSQx/TK4GABCECRkQREAgd08bSsE0nlCkivshHblg/JWEZHP0oj5554LkA7adAn7Ge5CdjbCB5IIQyeoz1JbcBXC/gZxmN+CGFtHYp+95LTYwfeAQk9IMUiKa3rpnAHfEmORMzD8kPIZRxQ7xLvrZ0jUAa+CFx0IPtnp1AYULpVAlK6VzyXAhlTCmd5DMntt+Chw4xuQurzRE+wHGzApebxDZgiWv4CGtcgmETtGCBu8+iO1yAhd9Ev3jwF78pX06lWM44SYZKJEkykzwTQhnDJBkXy6kUy1GVqGp6o2wlGrpWzStRFLFevoj1VxH/6t+U5e7GcUe1PY7jkeSREMroxHFXcvOt/q+jy0ri/ej+e+q/XgHcYYvwUFwAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">USB-C 3.0 x 1<br>(Quick Charge)</div>
                            </div>

                            <div class="data-card mt-2 mb-3 my-sm-0 px-2">
                                <div class="badge-value"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAAZCAMAAAC1gdb7AAAABGdBTUEAALGPC/xhBQAAAH5QTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/L72lxwAAACl0Uk5TTh93RP2AbSMk23k7pufaPFosQh5jh4wGChbs5PKL8eHoIJDwUGDgsAC0Tew4AAAAx0lEQVQ4y+2URw7CQAwAN733XjcFCP7/B7HMJkLcNrkh5jSKPIeVHLNqGOEc41CxEvh2Dg4DG3n9PEfNRwYbisJucjAFqw2oNnTpR+vGXmvgmHc5TAc0UZfgST/ag1LUC8zS9QzLD9SWdG0dtQqu+Fas65qRxWgRWYQWk2VohZh0QRV1M0HwIHrcg46sRZvIJrSWrEPr34MBTM2+a7YfStahbx+bepDjr9OQpWgJWYKWkjVo+cf0dy3Hvz5ZX7trw6WbeumevwBGteR+q+afiAAAAABJRU5ErkJggg=="></div>
                                <div class="badge-caption">USB 3.0 x 2</div>
                            </div>
                            <div class="data-card mt-2 mb-3 my-sm-0 px-2">
                                <div class="badge-value"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAAAVCAMAAADFAciVAAAABGdBTUEAALGPC/xhBQAAANJQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/hWL0FwAAAEV0Uk5T1+H7/B0LA/eik5rqCdTxPwz90qhv408e+GLROl/cJBTEPYUpXQrWwFFHCAKrzG7YWzXN3Qb+MbgEtsJInqb5INAQoLAA/mMlZAAAATNJREFUOMvd1Md2gzAQBVAlce+9994bYNMDRPP/v5QJI+OtgV3e6gLinSMhwRjEzAeD0k+slICBwzFy4ttP2TTNBrGFHBAHyBaxgSwTE/Lfmw5VFLLpKFNIZwtBRQ6kjOfngU+GxAnSITrICXGIfBAzEuSeFSk7X+EU1XXdJVFG7og7pExcIlUxuJK3U6LCpfUIHwfc/1aRhGK0iiIknx9VUrpj18/VsqwT0UBeiBekQTwhr8RxV5GCfWF0oh2PjhFU8NGMdoun2bZ9JurIG/GG1IlnpCYGz0ZigzfbPEbaTWA9+PTmUQvm3hf0mLpYgXK4Rym4HxRYLVTG+X5zxKMzDVswxSN53Ow5Z/7ldg2gG2EKDB1gvfXJxK2+BlB7/19VA9D64lX2mlm9+v6OqNZfq/cLKRlbrhLU7OUAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">Mini HDMI x 1</div>
                            </div>
                            <div class="data-card mt-2 mb-3 my-sm-0 px-2">
                                <div class="badge-value pt-1 pt-md-0"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAMBAMAAADFQ2OWAAAABGdBTUEAALGPC/xhBQAAABhQTFRFncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/ltTdvQAAAAd0Uk5Tz6RayICQALyS1tsAAAAvSURBVBjTYyjHAxgKQnECdobSNJwgnHaS4tidWgiWVMXu1iCK7Cx2wQnMGfAFHwBhFINbs2nndwAAAABJRU5ErkJggg=="></div>
                                <div class="badge-caption">MicroSD <br>card reader</div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance2 ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc8_fimg1.png">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc8_fimg2.png"> -->


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
                        <div class="h2 banner-header mb-4 mb-sm-5">A Feast to Eyes &amp; Ears</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">LIBER is engineered for an outstanding reproduction of</span>
							<span class="d-lg-block">original colors that brings no fatigue to eyes.</span>
							<span class="d-lg-block">With a well-adjusted contrast level, </span>
							<span class="d-lg-block">images remain vivid with great details. </span>
							<span class="d-lg-block">Its inbuilt speaker is also good at </span>
							<span class="d-lg-block">delivering stunning sound effects as it has </span>
							<span class="d-lg-block">a wide dynamic range and strong bass. </span>
							<span class="d-lg-block">No matter it is for work or entertainment to go, </span>
							<span class="d-lg-block">LIBER always has the best to offer.</span>
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
                                    <div class="badge-caption">Resolution</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-sm-3">
                                    <div class="badge-image"></div>
                                </div>

                                <div class="data-card col-sm-9 my-2 my-sm-3">
                                    <div class="badge-value">800:1</div>
                                    <div class="badge-caption">Contrast ratio</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-12 col-sm-3 my-2 my-sm-3">
                                    <div class="badge-image"><img src="/images/liber/liber12_feature/sc8_img2.png"></div>
                                </div>

                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
									<span class="badge-caption pl-1">Channels</span>
                                    <div class="badge-caption">Stereo sound effects</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
                                    <span class="badge-caption pl-1">Speakers</span>
                                    <!-- <div class="badge-value">2</div> -->
                                    <div class="badge-caption">&nbsp;</div>
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

        <section class="product-liber-wifi ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc9_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/liber12_feature/sc9_fimg2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ls-0">
                        <div class="h2 banner-header mb-4 mb-sm-5">Stay Connected <div class="hidden-sm-up"></div> Anytime, Anywhere</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Equipped with BLUETOOTH 4.2 and 802.11 ac,</span>
                            <span class="d-lg-block">LIBER offers the speediest online means, </span>
                            <span class="d-lg-block">which is three times faster than an 802.11n connection.</span>
                            <span class="d-lg-block">
                                <small>* 12.5-inch provides one USB Type-C port  (with additional USB-C to USB + HDMI adapter for free)</small>
                            </span>

                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11 ac</div>
                                <div class="badge-value">3X</div>
                                <div class="badge-caption">Faster than 802.11n</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">1300<span class="badge-caption pl-1">Mbps</span></div>
                                <div class="badge-caption">Speed</div>
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
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
