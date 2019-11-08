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

                            <span class="d-lg-block">LIBER memberikan kemudahan Mobilitas yang tinggi, tanpa kompromi.</span>
                            <span class="d-lg-block">Hadir dengan warna metalik yang halus, dengan bagian tertipis hanya 5mm dan berat mulai dari 1.14Kg, LIBER hadir dengan bentuk sangat tipis dan ringan memberikan kemudahan dalam bepergian</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">&nbsp;</div>
                                <span class="badge-value">5</span>
								<span class="badge-caption">mm</span>
								<div class="badge-caption pt-1">Bagian tertipis</div>
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">Dimulai dari</div>
                                <span class="badge-value">1.14</span>
								<span class="badge-caption">kg</span>
								<div  class="badge-caption pt-1">berat 12.5-inch</div>
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
                            <span class="d-md-block">LIBER dibuat khusus untuk pengalaman terbaik untuk bekerja dan hiburan. Didukung dengan performa tinggi dan cepat yang dibutuhkan dalam menangani pekerjaan yang sulit dan konten gambar</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Sistem Operasi</div>
								<div class="badge-value">Windows 10 Home</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Hingga</div>
								<div class="badge-value">Core i5</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Hingga</div>
								<div class="badge-value">256<span class="badge-caption pl-1">GB</span></div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">

                                <div class="h2 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Full Battery for All-day Menu</div></div>
    							<div class="banner-para ls-0">
    								<span class="d-lg-block">Dari ringkasan berita di pagi hari, melewati pekerjaan di hari yang sibuk hingga menikmati hiburan sebelum beristirahat, LIBER mampu bertahan hingga 8 Jam* untuk menangani seluruh kesibukan harian Kamu. </span>
                                    <span class="d-lg-block"><small>*Daya tahan baterai hingga 8 Jam berdasarkan MobileMark 2014 (Daya tahan hingga 10 Jam dengan kondisi Wi-Fi, Bluetooth, Audio dimatikan, tingkat kecerahan 20 dan Sumber Daya dalam Mode Hemat Baterai)</small></span>

                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">Hingga <span class="badge-value px-1">8</span> Jam<br>Daya tahan baterai</div>
    						</div>
    						<div class="banner-data d-flex flex-wrap justify-content-center ls-0">
    							<div class="data-card">
    								<div class="badge-caption">&nbsp;</div>
    								<div class="badge-value text-center">27.8<span class="badge-caption pl-1">Wh</span></div>
    								<div class="badge-caption">Baterai Li-ion</div>
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
                            <span class="d-lg-block">Setiap sentuhan Anda pada keyboard langsung menentukan performa Anda, oleh karena itu LIBER menggabungkan detil yang rumit dengan kemudahan dalam penggunaan untuk memastikan kenyamanan dan ketepatan bagi Anda. Ditunjang dengan touch pad yang ekstra besar pada setiap seri LIBER akan memberikan manipulasi intuisi yang sempurna</span>
                            <span class="d-lg-block"><small>*Backlit Keyboard, memberikan improvisasi pengalaman mengetik dalam keadaan gelap, tersedia pada seluruh seri 12.5</small></span>

                        </div>

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
                            <span class="d-lg-block">Dimanapun Anda menggunakan laptop AVITA, keamanan Anda merupakan prioritas utama kami. AVITA Liber 12.5" memiliki fitur keamanan yang didukung oleh Windows Hello untuk Aktifitas harian, menggantikan kata kunci dengan fitur pembaca sidik jari. Dengan improvisasi untuk meningkatkan keamanan dengan mudah dan nyaman, Anda dapat masuk tanpa perlu memasukan kata kunci sehingga penyimpanan data Anda akan lebih aman setiap saat.</span>

                        </div>

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
							<span class="d-lg-block">LIBER didesain khusus untuk menghasilkan ulang warna-warna yang tidak membuat mata menjadi lelah. Dengan kontrol penyesuaian tingkat kontras, gambar akan tetap jelas dengan detil yang luar biasa. Speaker yang tertanam dengan jangkauan suara yang dinamis dan bass yang kuat turut memberikan efek suara terbaik apakah untuk bekerja atau hiburan, LIBER selalu memberikan hal terbaik untuk penggunanya. </span>
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
                                    <div class="badge-caption">Resolusi</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-sm-3">
                                    <div class="badge-image"></div>
                                </div>

                                <div class="data-card col-sm-9 my-2 my-sm-3">
                                    <div class="badge-value">800:1</div>
                                    <div class="badge-caption">Rasio Kontras</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-12 col-sm-3 my-2 my-sm-3">
                                    <div class="badge-image"><img src="/images/liber/liber12_feature/sc8_img2.png"></div>
                                </div>

                                <div class="data-card col-6 col-sm-4 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
									<span class="badge-caption pl-1">kanal</span>
                                    <div class="badge-caption">Efek Suara Stereo</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
                                    <span class="badge-caption pl-1">speaker</span>
                                    <!-- <div class="badge-value">2</div> -->
                                    <div class="badge-caption">&nbsp;</div>
                                </div>


                            </div>

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
                            <span class="d-lg-block">Dilengkapi dengan BLUETOOTH 4.2 dan 802.11 ac, LIBER menawarkan kecepatan koneksi yang berarti 3-kali lebih cepat dibandingkan dengan koneksi 802.11n</span>
                            <span class="d-lg-block">
                                <small>*12.5-inch menyediakan 1 port USB Type-C (Gratis tambahan USB-C to USB + HDMI adaptor) </small>
                            </span>

                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11 ac</div>
                                <div class="badge-value">3X</div>
                                <div class="badge-caption">Lebih cepat dari  802.11n</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">Kecepatan Hingga</div>
                                <div class="badge-value">1300<span class="badge-caption pl-1">Mbps</span></div>
                                <div class="badge-caption">&nbsp;</div>
                            </div>
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
