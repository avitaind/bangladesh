@extends('layouts.app')

@section('title')
    @lang('title.LIBER_13_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/banner.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/banner_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/brand.png">--}}
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc2_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/sc2_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc2_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/sc2_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/sc2_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/sc2_fimg6.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-1" src="/images/liber/sc2_img1.png">
                            <!-- <img class="ac-computer-image ac-computer-2" src="/images/liber/sc2_img2.png"> -->
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Inside-out Vibrancy</div>
                        <div class="banner-para">

                            <span class="d-lg-block">LIBER adalah sebuah perjalanan mencari jati diri melalui seni dan sisi kemanusiaan didalam teknologi, Dalam bentuk sebuah laptop dengan fitur utama yang menawan dan dapat diganti demi menunjukan siapa sesungguhnya diri kita.</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-size ls-0"/>
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc3_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/sc3_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc3_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/sc3_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/sc3_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/sc3_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/sc3_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/sc3_fimg8.png">
                </div>
                <div class="container">
                    <div class="banner-info">

                        <div class="h2 banner-header mb-4 mb-sm-5">Tangible Lightness</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc3_fimg2.png">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER memberikan kemudahan Mobilitas yang tinggi, tanpa kompromi.</span>
							<span class="d-lg-block">Hadir dengan warna metalik yang halus, dengan bagian tertipis hanya 5mm dan berat mulai dari 1.14Kg, LIBER hadir dengan bentuk sangat tipis dan ringan memberikan kemudahan dalam bepergian</span>
							<span class="d-block"><small>* Bagian tertipis</small></span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <span class="badge-value">5</span>
								<span class="badge-caption">mm</span>
								<div class="badge-caption pt-1">Thin</div>
                            </div>
                            <div class="data-card data-card-2 col-6 my-2 my-sm-4">
                                <span class="badge-value">180</span>
								<span style="font-size: 3rem; font-weight: 300;">&deg;</span>
								<div class="badge-caption pt-1">Hinge</div>
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">Dimulai dari</div>
                                <span class="badge-value">1.37</span>
								<span class="badge-caption">kg</span>
								<div  class="badge-caption pt-1">Berat 13.3-inch</div>
                            </div>
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4">
                                <div class="badge-caption">Dimulai dari</div>
                                <span class="badge-value">1.49</span>
                                <span class="badge-caption">kg</span>
                                <div  class="badge-caption pt-1">Berat 14-inch</div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc4_fimg1.jpg">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber/sc4_fimg2.png"> -->
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc4_fimg1.jpg">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Seamless Efficiency</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER dibuat khusus untuk pengalaman terbaik untuk bekerja dan hiburan. Didukung dengan performa tinggi dan cepat yang dibutuhkan dalam menangani pekerjaan yang sulit dan konten gambar.</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Hingga</div>
								<div class="badge-value">Core i7</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Hingga</div>
								<div class="badge-value">512<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">SSD</div>
							</div>
							<div class="data-card my-3 text-left">
								<div class="badge-caption">Hingga</div>
								<div class="badge-value">8<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">RAM</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-power ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc5_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">

                                <div class="h2 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Full Battery for All-day Menu</div></div>
    							<div class="banner-para ls-0">
    								<span class="d-lg-block">Dari ringkasan berita di pagi hari, melewati pekerjaan di hari yang sibuk hingga menikmati hiburan sebelum beristirahat, LIBER mampu bertahan hingga 10 Jam* untuk menangani seluruh kesibukan harian Kamu. </span>
                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">Hingga <span class="badge-value px-1">10</span> Jam<br>Daya tahan baterai</div>
    						</div>
    						<div class="banner-data d-flex flex-wrap justify-content-center ls-0">
    							<div class="data-card">
    								<div class="badge-caption">&nbsp;</div>
    								<div class="badge-value text-center">36<span class="badge-caption pl-1">Wh</span></div>
    								<div class="badge-caption">Baterai Li-ion</div>
                                </div>

                                <ul class="battery-block d-flex"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="product-liber-keyboard ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc6_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h2 banner-header mb-4 mb-sm-5">Pleasing Keyboard Design</div>
						<div class="ac-computer-wrap hidden-md-up">
							<img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc6_fimg1.png">
						</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">Setiap sentuhan Anda pada keyboard langsung menentukan performa Anda, oleh karena itu LIBER menggabungkan detil yang rumit dengan kemudahan dalam penggunaan untuk memastikan kenyamanan dan ketepatan bagi Anda. .</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc7_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Comprehensive Ports</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER memudahkan koneksi dengan perangkat lain guna pengisian ulang daya baterai, transfer data, dan keluaran tampilan. Juga memberikan 2 posrt USB 3.0 guna memberikan efisiensi tertinggi dalam bekerja.</span>
                        </div>
                        <div class="banner-data ls-0 d-flex flex-wrap justify-content-around">
                            <div class="data-card mt-2 mb-3 my-sm-0 px-2">
                                <div class="badge-value pt-1 pt-md-0"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAASCAMAAAA9mj1BAAAABGdBTUEAALGPC/xhBQAAALpQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/bVsnRQAAAD10Uk5TWdRYpKKwDK8NSK1NuzUjMmJUHhUSSiTKhO48R/veGfn6JU7vhajwmLell+ZRC3TR8QIzxHBgKNP3kBCAALWUMBgAAAEvSURBVDjLpVPXjsMwDHP33nsm3dnbsa+R/v+3znbSQx/TK4GABCECRkQREAgd08bSsE0nlCkivshHblg/JWEZHP0oj5554LkA7adAn7Ge5CdjbCB5IIQyeoz1JbcBXC/gZxmN+CGFtHYp+95LTYwfeAQk9IMUiKa3rpnAHfEmORMzD8kPIZRxQ7xLvrZ0jUAa+CFx0IPtnp1AYULpVAlK6VzyXAhlTCmd5DMntt+Chw4xuQurzRE+wHGzApebxDZgiWv4CGtcgmETtGCBu8+iO1yAhd9Ev3jwF78pX06lWM44SYZKJEkykzwTQhnDJBkXy6kUy1GVqGp6o2wlGrpWzStRFLFevoj1VxH/6t+U5e7GcUe1PY7jkeSREMroxHFXcvOt/q+jy0ri/ej+e+q/XgHcYYvwUFwAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">USB-C 3.0 x 1<br>(Pengisian Cepat)</div>
                            </div>
                            <!-- <div class="data-card">
                                <div class="badge-value"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAASCAMAAAA9mj1BAAAABGdBTUEAALGPC/xhBQAAALpQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/bVsnRQAAAD10Uk5TWdRYpKKwDK8NSK1NuzUjMmJUHhUSSiTKhO48R/veGfn6JU7vhajwmLell+ZRC3TR8QIzxHBgKNP3kBCAALWUMBgAAAEvSURBVDjLpVPXjsMwDHP33nsm3dnbsa+R/v+3znbSQx/TK4GABCECRkQREAgd08bSsE0nlCkivshHblg/JWEZHP0oj5554LkA7adAn7Ge5CdjbCB5IIQyeoz1JbcBXC/gZxmN+CGFtHYp+95LTYwfeAQk9IMUiKa3rpnAHfEmORMzD8kPIZRxQ7xLvrZ0jUAa+CFx0IPtnp1AYULpVAlK6VzyXAhlTCmd5DMntt+Chw4xuQurzRE+wHGzApebxDZgiWv4CGtcgmETtGCBu8+iO1yAhd9Ev3jwF78pX06lWM44SYZKJEkykzwTQhnDJBkXy6kUy1GVqGp6o2wlGrpWzStRFLFevoj1VxH/6t+U5e7GcUe1PY7jkeSREMroxHFXcvOt/q+jy0ri/ej+e+q/XgHcYYvwUFwAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">USB-C 3.0 x 1</div>
                            </div> -->
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
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance2 ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc8_fimg1.png">
                    <!-- <img class="bc-computer-image bc-computer-2" src="/images/liber/sc8_fimg2.png"> -->

                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc8_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/sc8_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/sc8_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/sc8_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/sc8_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/sc8_fimg8.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc8_fimg2.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">A Feast to Eyes &amp; Ears</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">LIBER didesain khusus untuk menghasilkan ulang warna-warna yang tidak membuat mata menjadi lelah. Dengan kontrol penyesuaian tingkat kontras, gambar akan tetap jelas dengan detil yang luar biasa. Speaker yang tertanam dengan jangkauan suara yang dinamis dan bass yang kuat turut memberikan efek suara terbaik apakah untuk bekerja atau hiburan, LIBER selalu memberikan hal terbaik untuk penggunanya. .</span>
                        </div>
                    </div>

                    <div class="banner-data-block d-flex align-items-center justify-content-center">
                        <div class="banner-data-inner ls-0">
                            <div class="banner-data d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center">
                                <div class="data-card col-12 col-sm-3 my-2 my-sm-0">
                                    <div class="badge-image"><img src="/images/liber/sc8_img1.png"></div>
                                </div>
                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <div class="badge-value">72%</div>
                                    <div class="badge-caption">NTSC</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <div class="badge-value">1920x1080</div>
                                    <div class="badge-caption">Resolusi</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-sm-3">
                                    <div class="badge-image"></div>
                                </div>

                                <div class="data-card col-sm-9 my-2 my-sm-3">
                                    <div class="badge-value">1000:1</div>
                                    <div class="badge-caption">Rasio Kontras</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-12 col-sm-3 my-2 my-sm-3">
                                    <div class="badge-image"><img src="/images/liber/sc8_img2.png"></div>
                                </div>

                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
									<span class="badge-caption pl-1">kanal</span>
                                    <div class="badge-caption">Efek Suara Stereo</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
                                    <span class="badge-caption pl-1">Speaker</span>
                                    <!-- <div class="badge-value">2</div> -->
                                    <div class="badge-caption">&nbsp;</div>
                                </div>


                            </div>

                            <!-- <div class="banner-data d-flex flex-wrap justify-content-between align-items-center pt-3 pt-md-4">
                                <div class="data-card col-12 col-sm-3 my-2 my-sm-0">
                                    <div class="badge-image"><img src="/images/liber/sc8_img2.png"></div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc9_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/sc9_fimg2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ls-0">
                        <div class="h2 banner-header mb-4 mb-sm-5">Stay Connected <div class="hidden-sm-up"></div> Anytime, Anywhere</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Dilengkapi dengan BLUETOOTH 4.2 dan 802.11 ac, LIBER menawarkan kecepatan koneksi yang berarti 3-kali lebih cepat dibandingkan dengan koneksi 802.11n</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11ac</div>
                                <div class="badge-value">3X</div>
                                <div class="badge-caption">Lebih cepat dari 802.11n</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">Kecepatan Hingga</div>
                                <div class="badge-value">1300<span class="badge-caption pl-1">Mbps</span></div>
                                <div class="badge-caption">&nbsp;</div>
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
                    <li>Spesifikasi dapat berubah pada setiap negara, harap menghubungi distributor atau toko ritel di area Anda untuk berita mengenai produk terbaru</li>
                    <li>Berat produk tergantung dari konfigurasi dan variasi pabrikan</li>
                    <li>Warna dari produk aktual mungkin berbeda dari gambar yang diakibatkan oleh teknik cahaya fotografi</li>
                    <li>Dengan sebaik-baiknya kami mencoba untuk memberikan informasi produk yang lengkap dan akurat. Akan tetapi kami berhak untuk merubah atau melakukan revisi terhadap informasi tanpa pemberitahuan terlebih dahulu.</li>
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
