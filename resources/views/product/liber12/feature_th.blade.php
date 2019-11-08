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
                        <div class="h2 banner-header mb-4 mb-sm-5">มีชีวิตชีวาจากในสู่นอก</div>
                        <div class="banner-para">
                            <span class="d-lg-block">LIBER คือการเดินทางแห่งการค้นพบตัวเองแบบใหม่ผ่านศิลปะและมนุษยธรรมในเทคโนโลยี ที่ที่ฟอร์มของแล็ปท็อปยังคงอยู่ แต่เพิ่มความ chic และ ฟอร์มที่ปรับเปลี่ยนได้เพื่อดึงความเป็นคุณออกมาอย่างชัดเจน</span>
                            {{--<span class="d-lg-block">through art and humanity in technology.</span>--}}
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

                        <div class="h2 banner-header mb-4 mb-sm-5">ความเบาบางที่ชัดเจน</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc3_fimg2.png">
                        </div>
                        <div class="banner-para ls-0">

                            <span class="d-lg-block">LIBER ให้ความกระฉับกระเฉง สะดวกสบาย โดยไม่กระทบกับ</span>
                            <span class="d-lg-block">บอดี้เหล็กอันเรียบเนียน ด้วยส่วนที่บางที่สุดเพียง 5 มม และน้ำหนักเริ่มต้นเพียง 1.14 กก มาพร้อมดีไซน์ที่บางเบาที่พร้อมลุยกับคุณเสมอ</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">&nbsp;</div>
                                <span class="badge-value">5</span>
								<span class="badge-caption">มม</span>
								<div class="badge-caption pt-1">ส่วนที่บางที่สุด</div>
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">เริ่มต้นที่</div>
                                <span class="badge-value">1.14</span>
								<span class="badge-caption">กก</span>
								<div  class="badge-caption pt-1">น้ำหนักของ 12.5 นิ้ว</div>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">ประสิทธิภาพการใช้งานอย่างเรียบรื่นไร้รอยต่อ</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER ถูกสร้างมาเพื่อประสบการณ์ทำงานและความบันเทิงสุดล้ำ ด้วยความเร็วที่สูง เหมาะแก่การรับมือกับการทำงานอันยุ่งยากและแสดงเนื้อหาอันสดใสผ่านจอ</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">สูงสุดที่</div>
								<div class="badge-value">Core i5</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">สูงสุดที่</div>
								<div class="badge-value">256<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">SSD</div>
							</div>
							<div class="data-card my-3 text-left">
								<div class="badge-caption">สูงสุดที่</div>
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

                                <div class="h2 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">แบตเตอรี่เต็มยาวนานทั้งวัน</div></div>
    							<div class="banner-para ls-0">
    								<span class="d-lg-block">ตั้งแต่ news feed แรกยามเช้า ผ่านวันทำงานอันแสนวุ่นวาย ถึงความบันเทิงก่อนนอน LIBER สามารถอยู่ได้ถึง 8 ชั่วโมง*เพื่อรับมือกับกิจกรรมของคุณ *อยุ่ได้มากสุดถึง 8 ชั่วโมงด้วย MobileMark 2014 (อยู่ได้มากสุด 10 ชั่วโมงในหากปิดสัญญาณ wifi สัญญาณ bluetooth และเสียง ความสว่างจอที่ 20 และใช้โหมดประหยัดพลังงาน)</span>
                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber12_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">นานสุด<span class="badge-value px-1">8</span>ชั่วโมง<br>ชีวิตของแบตเตอรี่</div>
    						</div>
    						<div class="banner-data d-flex flex-wrap justify-content-center ls-0">
    							<div class="data-card">
    								<div class="badge-caption">&nbsp;</div>
    								<div class="badge-value text-center">27.8<span class="badge-caption pl-1">Wh</span></div>
    								<div class="badge-caption">แบตเตอรี่ Li-ion </div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber12_feature/sc6_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h2 banner-header mb-4 mb-sm-5">คีย์บอร์ดที่ดีไซน์มาเพื่อคุณ</div>
						<div class="ac-computer-wrap hidden-md-up">
							<img class="ac-computer-image ac-computer-1" style="" src="/images/liber/liber12_feature/sc6_fimg1.png">
						</div>
						<div class="banner-para ls-0">
                            <span class="d-lg-block">ทุกสัมผัสบนคีย์บอร์ดบ่งบอกถึงการทำงานของคุณ เพราะฉะนั้น LIBER จึงผสมผสานคีย์บอร์ดที่ทำให้ประทับใจทุกการใช้และเต็มเปี่ยมไปด้วยรายละเอียดที่ละเอียดอ่อนเพื่อรับประกันความสบายและแม่นยำแก่คุณ แป้นที่ใหญ่พิเศษถูกวางเรียงไว้ใน LIBER ทุกเครื่องเพื่อปลดล็อคสัญชาตญาณของคุณ * คียบอร์ดพร้อมไฟ Backlit ที่พัฒนาการประสบการณ์การป้อนข้อมูลแม้ในที่ที่แสงน้อย มาพร้อมรุ่น 12.5 นิ้วทั้งหมด</span>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">สร้างมาเพื่อความปลอดภัยของคุณ</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">ไม่ว่าคุณจะใช้งานโน้ตบุ๊ค AVITA ที่ไหน ความปลอดภัยก็คือสิ่งสำคัญที่สุดต่อเรา AVITA Liber 12.5 นิ้ว มาพร้อมการรับรอง Windows Hello เพื่อการใช้งานของคุณ รหัสผ่านถูกทดแทนด้วยการสแกนลายนิ้วมือ และมาพร้อมความสะดวกสบายและปลอดภัยยิ่งขึ้นด้วยการล็อกอินไร้รหัสผ่าน แต่ยังคงรักษาความปลอดภัยให้ข้อมูลของคุณอย่างดีเยี่ยม</span>

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
                        <div class="h2 banner-header mb-4 mb-sm-5">สัมผัสประสบการณ์บันเทิงเต็มรูปแบบ</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">LIBER ถูกออกแบบมาเพื่อการขยายความเป็นไปได้ของสีเดิมๆให้สดใสยิ่งขึ้นพร้อมกับให้ความรู้สึกสบายตา ด้วยค่าคอนทราสท์ที่ปรับมาอย่างดี ภาพต่างๆเต็มไปด้วยสีสันและรายละเอียดอันน่ามหัสจรรย์ ลำโพง built-in ส่งเสียงเอฟเฟ็กได้อย่างไพเราะ ด้วย dynamic range ที่กว้างขวางและเบสที่หนักแน่น ไม่ว่าจะทำงานหรือเพื่อความบันเทิง LIBER มีสิ่งที่ดีเยี่ยมรออยู่เสมอ</span>
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
									<span class="badge-caption pl-1">ช่อง</span>
                                    <div class="badge-caption">Stereo sound effects</div>
                                </div>

                                <div class="data-card col-6 col-sm-5 my-2 my-sm-3">
                                    <span class="badge-value">2</span>
                                    <span class="badge-caption pl-1">ลำโพงตัว</span>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">เชื่อมต่อทุกที่ <div class="hidden-sm-up"></div> ทุกเวลา</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">มาพร้อม BLUETOOTH 4.2 และ 802.11 ac LIBER มอบการส่งข้อมูลออนไลน์อย่างรวดเร็ว ซึ่งเร็วกว่า 802.11n ถึงสามเท่า *รุ่น12.5นิ้วมีช่องเสียบ USB Type-C หนึ่งช่อง (และสาย adapter ต่อ USB-C tp USB + HDMI ฟรี)</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11 ac</div>
                                <div class="badge-value">3X</div>
                                <div class="badge-caption">เร็วกว่า 802.11 n</div>
                            </div>
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">มากสุด</div>
                                <div class="badge-value">1300<span class="badge-caption pl-1">Mbps</span></div>
                                <div class="badge-caption">ความเร็ว</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside เป็นเครื่องหมายการค้าของ Intel Corporation ในสหรัฐอเมริกาและในประเทศอื่นๆ</li>
                    <li>คุณสมบัติของสินค้าอาจมีความแตกต่าง ขึ้นอยู่กับแต่ละประเทศ สามารถตรวจสอบอัพเดทล่าสุดของสินค้าปัจจุบันได้ที่ตัวแทนจำหนายใกล้คุณ</li>
                    <li>น้ำหนักอาจมีความแตกต่างขึ้นอยู่กับการผลิตและประกอบ</li>
                    <li>สีของสินค้าอาจไม่ตรงกับภาพ ขึ้นอยู่กับแสงใสการถ่ายภาพและจอแสดงที่ท่านใช้</li>
                    <li>เราตั้งใจที่จะมอบข้อมูลที่แม่นยำและถูกต้องที่สุดทางออนไลน์ให้กับลูกค้า อย่างไรก็ตามเราขอสงวนสิทธิ์ในการเก็บ ปรับเปลี่ยน หรือแก้ไขข้อมูลใดๆ โดยไม่ต้องมีการแจ้งให้ทราบล่วงหน้า</li>
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
