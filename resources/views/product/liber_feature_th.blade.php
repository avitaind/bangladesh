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
                        <div class="h2 banner-header mb-4 mb-sm-5">บ่งบอกสีสันในตัวคุณ</div>
                        <div class="banner-para">
                            <span class="d-lg-block">LIBER คือการเดินทางแห่งการค้นพบตัวเองแบบใหม่ผ่านศิลปะและมนุษยธรรมในเทคโนโลยี </span>
                            <span class="d-lg-block">ที่ที่ฟอร์มของแล็ปท็อปยังคงอยู่ </span>
                            <span class="d-lg-block">แต่เพิ่มความ chic และ </span>
                            <span class="d-lg-block">ฟอร์มที่ปรับเปลี่ยนได้เพื่อดึงความเป็นคุณออกมาอย่างชัดเจน</span>
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

                        <div class="h2 banner-header mb-4 mb-sm-5">ความเบาบางที่ชัดเจน</div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc3_fimg2.png">
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER ให้ความกระฉับกระเฉง สะดวกสบาย โดยไม่กระทบกับ</span>
							<span class="d-lg-block">บอดี้เหล็กอันเรียบเนียน ด้วยส่วนที่บางที่สุดเพียง 5 มม และน้ำหนักเริ่มต้นเพียง 1.14 กก มาพร้อมดีไซน์ที่บางเบาที่พร้อมลุยกับคุณเสมอ</span>
							<span class="d-block"><small>*ส่วนที่บางที่สุด</small></span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <span class="badge-value">5</span>
								<span class="badge-caption">มม</span>
								<div class="badge-caption pt-1">ส่วนที่บางที่สุด</div>
                            </div>
                            <div class="data-card data-card-2 col-6 my-2 my-sm-4">
                                <span class="badge-value">180</span>
								<span style="font-size: 3rem; font-weight: 300;">&deg;</span>
								<div class="badge-caption pt-1">บานพับ</div>
                            </div>
                            <div class="data-card data-card-3 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                                <div class="badge-caption">เริ่มต้นที่</div>
                                <span class="badge-value">1.37</span>
								<span class="badge-caption">กก</span>
								<div  class="badge-caption pt-1">น้ำหนักของ 13.3 นิ้ว</div>
                            </div>
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4">
                                <div class="badge-caption">เริ่มต้นที่</div>
                                <span class="badge-value">1.49</span>
                                <span class="badge-caption">กก</span>
                                <div  class="badge-caption pt-1">น้ำหนักของ 14 นิ้ว</div>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">ประสิทธิภาพการใช้งานอย่างเรียบรื่นไร้รอยต่อ</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER ถูกสร้างมาเพื่อประสบการณ์ทำงานและความบันเทิงสุดล้ำ ด้วยความเร็วที่สูง เหมาะแก่การรับมือกับการทำงานอันยุ่งยากและแสดงเนื้อหาอันสดใสผ่านจอ</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">สูงสุดที่</div>
								<div class="badge-value">Core i7</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">สูงสุดที่</div>
								<div class="badge-value">512<span class="badge-caption pl-1">GB</span></div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc5_fimg1.jpg">
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
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">นานสุด <span class="badge-value px-1">10</span> ชั่วโมง<br>ชีวิตของแบตเตอรี่</div>
    						</div>
    						<div class="banner-data d-flex flex-wrap justify-content-center ls-0">
    							<div class="data-card">
    								<div class="badge-caption">&nbsp;</div>
    								<div class="badge-value text-center">36<span class="badge-caption pl-1">Wh</span></div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc6_fimg1.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h2 banner-header mb-4 mb-sm-5">คีย์บอร์ดที่ดีไซน์มาเพื่อคุณ</div>
						<div class="ac-computer-wrap hidden-md-up">
							<img class="ac-computer-image ac-computer-1" style="" src="/images/liber/sc6_fimg1.png">
						</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">ทุกสัมผัสบนคีย์บอร์ดบ่งบอกถึงการทำงานของคุณ เพราะฉะนั้น LIBER จึงผสมผสานคีย์บอร์ดที่ทำให้ประทับใจทุกการใช้และเต็มเปี่ยมไปด้วยรายละเอียดที่ละเอียดอ่อนเพื่อรับประกันความสบายและแม่นยำแก่คุณ แป้นที่ใหญ่พิเศษถูกวางเรียงไว้ใน LIBER ทุกเครื่องเพื่อปลดล็อคสัญชาตญาณของคุณ </span>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">ช่องเสียบสายครอบคลุมทุกความต้องการ</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER เปิดโอกาศการเชื่อมต่ออันแสนสะดวกด้วยอุปกรณ์รอบข้างในการชาร์จแบตเตอรี่ เคลื่อนย้ายข้อมูล และ display output และยังมาพร้อมช่องเสียบ USB 3.0 2 ช่องเพื่อการรองรับการทำงานที่ราบรื่น</span>
                        </div>
                        <div class="banner-data ls-0 d-flex flex-wrap justify-content-around">
                            <div class="data-card mt-2 mb-3 my-sm-0 px-2">
                                <div class="badge-value pt-1 pt-md-0"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAASCAMAAAA9mj1BAAAABGdBTUEAALGPC/xhBQAAALpQTFRFncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/ncO/AAAAncO/bVsnRQAAAD10Uk5TWdRYpKKwDK8NSK1NuzUjMmJUHhUSSiTKhO48R/veGfn6JU7vhajwmLell+ZRC3TR8QIzxHBgKNP3kBCAALWUMBgAAAEvSURBVDjLpVPXjsMwDHP33nsm3dnbsa+R/v+3znbSQx/TK4GABCECRkQREAgd08bSsE0nlCkivshHblg/JWEZHP0oj5554LkA7adAn7Ge5CdjbCB5IIQyeoz1JbcBXC/gZxmN+CGFtHYp+95LTYwfeAQk9IMUiKa3rpnAHfEmORMzD8kPIZRxQ7xLvrZ0jUAa+CFx0IPtnp1AYULpVAlK6VzyXAhlTCmd5DMntt+Chw4xuQurzRE+wHGzApebxDZgiWv4CGtcgmETtGCBu8+iO1yAhd9Ev3jwF78pX06lWM44SYZKJEkykzwTQhnDJBkXy6kUy1GVqGp6o2wlGrpWzStRFLFevoj1VxH/6t+U5e7GcUe1PY7jkeSREMroxHFXcvOt/q+jy0ri/ej+e+q/XgHcYYvwUFwAAAAASUVORK5CYII="></div>
                                <div class="badge-caption">USB-C 3.0 x 1<br>(ชาร์จรวดเร็ว)</div>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">สัมผัสประสบการณ์บันเทิงเต็มรูปแบบ</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">LIBER ถูกออกแบบมาเพื่อการขยายความเป็นไปได้ของสีเดิมๆให้สดใสยิ่งขึ้นพร้อมกับให้ความรู้สึกสบายตา ด้วยค่าคอนทราสท์ที่ปรับมาอย่างดี ภาพต่างๆเต็มไปด้วยสีสันและรายละเอียดอันน่ามหัสจรรย์ ลำโพง built-in ส่งเสียงเอฟเฟ็กได้อย่างไพเราะ ด้วย dynamic range ที่กว้างขวางและเบสที่หนักแน่น ไม่ว่าจะทำงานหรือเพื่อความบันเทิง LIBER มีสิ่งที่ดีเยี่ยมรออยู่เสมอ</span>
							{{--<span class="d-lg-block">LIBER always has the best to offer.</span>--}}
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
                                    <div class="badge-caption">Resolution</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-sm-3">
                                    <div class="badge-image"></div>
                                </div>

                                <div class="data-card col-sm-9 my-2 my-sm-3">
                                    <div class="badge-value">1000:1</div>
                                    <div class="badge-caption">Contrast ratio</div>
                                </div>

                                <div class="col-12 clearfix"></div>

                                <div class="data-card col-12 col-sm-3 my-2 my-sm-3">
                                    <div class="badge-image"><img src="/images/liber/sc8_img2.png"></div>
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
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc9_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/sc9_fimg2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ls-0">
                        <div class="h2 banner-header mb-4 mb-sm-5">เชื่อมต่อทุกที่ ทุกเวลา</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">มาพร้อม BLUETOOTH 4.0 และ 802.11 ac LIBER มอบการส่งข้อมูลออนไลน์อย่างรวดเร็ว ซึ่งเร็วกว่า 802.11n ถึงสามเท่า *รุ่น12.5นิ้วมีช่องเสียบ USB Type-C หนึ่งช่อง (และสาย adapter ต่อ USB-C tp USB + HDMI ฟรี)</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap justify-content-around align-items-center">
                            <div class="data-card my-2 my-sm-0">
                                <div class="badge-caption">802.11ac</div>
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
