@extends('layouts.app')

@section('title')
    @lang('title.LIBER_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-3" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(12.5 นิ้ว) @if( !$HAVE_LIBER_12) / @lang('site.coming_soon') @endif</div></div>
                            <img class="hidden-sm-down" src="/images/liber/12/pink.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #DE9299" class="active" data-image="/images/liber/12/pink.png"></li>
                                <li style="background-color: #55665B" data-image="/images/liber/12/green.png"></li>
                                <li style="background-color: #2F5896" data-image="/images/liber/12/blue.png"></li>
                                <li style="background-color: #74AACA" data-image="/images/liber/12/cyan.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/liber/12/purple.png"></li>
                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-1" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(13.3 นิ้ว)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/13/lightpurple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #c5c2d9" class="active" data-image="/images/liber/13/lightpurple.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/13/purple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/13/blue.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/13/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/13/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/13/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/13/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/13/orange.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/liber/13/lightpink.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/13/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/13/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/13/black.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/13/lightsilver.png"></li>
                                <li style="background-color: #7d7e82" data-image="/images/liber/13/silver.png"></li>
                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-2" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(14 นิ้ว)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/14/lightpurple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4">
                                <li style="background-color: #c5c2d9" class="active" data-image="/images/liber/14/lightpurple.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/14/purple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/14/blue.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/14/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/14/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/14/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/14/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/14/orange.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/liber/14/lightpink.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/14/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/14/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/14/black.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/14/lightsilver.png"></li>
                                <li style="background-color: #7d7e82" data-image="/images/liber/14/silver.png"></li>
                            </ul>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="spec-3" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">ระบบปฏิบัติการ</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>from 7th Gen Intel® Core<sup>TM</sup> i5-7Y54 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">จอแสดงผล</div>
                                <div>12.5" FHD (1920x1080) IPS</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>8GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">แกรฟฟิค</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>256GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island-type Keyboard (with Backlit)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 Type-C x 1 (PD 2.0 charging, Display out), 3.5mm Headphone Jack x 1, DC in x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>299(W) x 199.5(H) x 14.89(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">น้ำหนัก</div>
                                <div>เริ่มต้นที่ 1.14 กก</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>Li-ion Battery, 27.8Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>สูงสุด 8 ชั่วโมง</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">วัสดุ</div>
                                <div>อลูมิเนียม</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">สี</div>
                                <div>Blossom Pink / Angel Blue / Himalayan Blue / Fragrant Lilac / Peacock Green</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">อุปกรณ์เสริม</div>
                                <div>AC Adapter and Power cord, USB Type-C port (สาย adapter ต่อ USB-C tp USB + HDMI ฟรี)</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-1" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">ระบบปฏิบัติการ</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>from 7th Gen Intel® Celeron® N3350 , up to Intel® Core® i5 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">จอแสดงผล</div>
                                <div>13.3" FHD (1920x1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB/8GB DDR3 1600MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">แกรฟฟิค</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>128GB SSD / 256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island-type Keyboard (with Backlit - Optional)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.0</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 x 2, USB 3.0 Type-C (Display out &amp; Charging) x 1, MicroSD card slot x 1, 3.5mm Headphone/Mic-in Combo Jack x 1, Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>315(W) x 212(H) x15(D) มม</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">น้ำหนัก</div>
                                <div>เริ่มต้นที่ 1.37 กก</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>สูงสุด 10 ชั่วโมง</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">วัสดุ</div>
                                <div>อลูมิเนียม</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">สี</div>
                                <div>Black / Silver/ Space Grey / Other Colours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">อุปกรณ์เสริม</div>
                                <div>AC Adapter, Mini HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-2" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">ระบบปฏิบัติการ</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>from 7th Gen Intel® Celeron® N3350 , up to Intel® Core® i7 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">จอแสดงผล</div>
                                <div>14" FHD (1920x1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB/8GB DDR3 1600MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">แกรฟฟิค</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>128GB SSD / 256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island-type Keyboard (with Backlit - Optional)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.0</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 x 2, USB 3.0 Type-C (Display out &amp; Charging) x 1, MicroSD card slot x 1, 3.5mm Headphone/Mic-in Combo Jack x 1, Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>333(W) x 222(H) x 16(D) มม</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">น้ำหนัก</div>
                                <div>เริ่มต้นที่ 1.14 กก</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>สูงสุด 10 ชั่วโมง</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">วัสดุ</div>
                                <div>อลูมิเนียม</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">สี</div>
                                <div>Black / Silver / Space Grey / Other Colours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">อุปกรณ์เสริม</div>
                                <div>AC Adapter, Mini HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
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
