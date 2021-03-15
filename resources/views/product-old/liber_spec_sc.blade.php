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

                        @if ($HAVE_LIBER_U)
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER New Generation</div><div class="d-sm-block">(13.3-inch)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/u13/lightpurple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #c5c2d9" class="active" data-image="/images/liber/u13/lightpurple.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/u13/purple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/u13/blue.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/u13/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/u13/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/u13/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/u13/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/u13/orange.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/liber/u13/lightpink.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/u13/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/u13/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/u13/black.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/u13/lightsilver.png"></li>
                                <li style="background-color: #7d7e82" data-image="/images/liber/u13/silver.png"></li>
                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-5" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER New Generation</div><div class="d-sm-block">(14-inch)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/u14/lightpurple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4">
                                <li style="background-color: #c5c2d9" class="active" data-image="/images/liber/u14/lightpurple.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/u14/purple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/u14/blue.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/u14/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/u14/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/u14/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/u14/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/u14/orange.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/liber/u14/lightpink.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/u14/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/u14/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/u14/black.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/u14/lightsilver.png"></li>
                                <li style="background-color: #7d7e82" data-image="/images/liber/u14/silver.png"></li>
                            </ul>
                        </a>
                        @endif

                        <a class="col text-center nav-link " data-toggle="tab" href="#spec-3" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(12.5-inch) @if( !$HAVE_LIBER_12) / @lang('site.coming_soon') @endif</div></div>
                            <img class="hidden-sm-down" src="/images/liber/12/pink.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #DE9299" class="active" data-image="/images/liber/12/pink.png"></li>
                                <li style="background-color: #55665B" data-image="/images/liber/12/green.png"></li>
                                <li style="background-color: #2F5896" data-image="/images/liber/12/blue.png"></li>
                                <li style="background-color: #74AACA" data-image="/images/liber/12/cyan.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/liber/12/purple.png"></li>
                            </ul>
                        </a>
                        {{-- <a class="col text-center nav-link" data-toggle="tab" href="#spec-1" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(13.3-inch)</div></div>
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
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(14-inch)</div></div>
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
                        </a> --}}

                    </nav>
                </div>
            </div>

            {{-- <div class="logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-1 col-4 col-md-3">
                            <div class="mt-3">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane" id="spec-3" role="tabpanel">
                    <div class="container">

                        {{-- <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div> --}}

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">作业系统<br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div>from 7th Gen Intel® Core<sup>TM</sup> i5-7Y54 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">荧幕 <br>(Display)</div>
                                <div>12.5" FHD (1920x1080) IPS</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">记忆体 <br>(Memory)</div>
                                <div>8GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">显示卡 <br>(Graphics)</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">储存装置 <br>(Storage)</div>
                                <div>256GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">摄影机 <br>(Integrated Camera)</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">键盘 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网路 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
                                <div>USB 3.0 Type-C x 1 (PD 2.0 charging, Display out), 3.5mm Headphone Jack x 1, DC in x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>299(W) x 199.5(H) x 14.89(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.14 kg 起</div>

                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 27.8 Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 8 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材质 <br>(Material)</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
                                <div>Blossom Pink (花漾粉红) / Angel Blue (天使蓝) / Himalayan Blue (澄空蓝) / Fragrant Lilac (丁香紫) / Peacock Green (炫彩绿)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter and Power cord, USB Type-C port  (with additional USB-C to USB + HDMI adapter for free)</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-1" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">作业系统<br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div>from 7th Gen Intel® Celeron® N3350 , up to Intel® Core® i5 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">荧幕 <br>(Display)</div>
                                <div>13.3" FHD (1920x1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">记忆体 <br>(Memory)</div>
                                <div>4GB/8GB DDR3 1600MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">显示卡 <br>(Graphics)</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">储存装置 <br>(Storage)</div>
                                <div>128GB SSD / 256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">摄影机 <br>(Integrated Camera)</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">键盘 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit - Optional)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网路 <br>(Wireless)</div>
                                <div>IEEE 802.11 ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.0</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
                                <div>USB 3.0 x 2, USB 3.0 Type-C (Display out &amp; Charging) x 1, MicroSD card slot x 1, 3.5mm Headphone/Mic-in Combo Jack x 1, Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>315(W) x 212(H) x15(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.35 kg 起</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材质 <br>(Material)</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
                                <div>Black / Silver/ Space Grey / Other Colours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter, Mini HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-2" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">作业系统 <br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div>from 7th Gen Intel® Celeron® N3350 , up to Intel® Core® i7 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">荧幕 <br>(Display)
                                </div>
                                <div>14" FHD (1920x1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">记忆体 <br>(Memory)</div>
                                <div>4GB/8GB DDR3 1600MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">显示卡 <br>(Graphics)</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">储存装置 <br>(Storage)</div>
                                <div>128GB SSD / 256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">摄影机 <br>(Integrated Camera)</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">键盘 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit - Optional)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网路 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.0</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
                                <div>USB 3.0 x 2, USB 3.0 Type-C (Display out &amp; Charging) x 1, MicroSD card slot x 1, 3.5mm Headphone/Mic-in Combo Jack x 1, Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>333(W) x 222(H) x 16(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.46 kg 起</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材质 <br>(Material)</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
                                <div>Black / Silver / Space Grey / Other Colours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter, Mini HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">操作系统<br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div>
                                    Intel® Core™ i7-8550U Processor, Intel® Core™ i5-8250U Processor, Intel® Core™ i3-8130U Processor, Intel® Pentium® N5000 Processor, Intel® Celeron® N4000 Processor, Intel® Core™ i7-7Y75 Processor, Intel® Core™ i5-7Y54 Processor, Intel® Pentium® N4200 Processor, Intel® Celeron® N3350 Processor
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">屏幕 <br>(Display)</div>
                                <div>13.3" FHD IPS (1920 x 1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">内存 <br>(Memory)</div>
                                <div>8GB DDR4 2400MHz / 4GB LPDDR4 2400MHz / 8GB DDR3 1600MHz / 4GB DDR3 1600MHz </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">显示适配器 <br>(Graphics)</div>
                                <div>Intel® UHD Graphics / Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">储存装置 <br>(Storage)</div>
                                <div>128GB / 256GB / 512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">摄影机 <br>(Integrated Camera)</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">键盘 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit)  <small>*For Intel® Core™ Processor model only</small></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网络 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n (Wi-Fi 4) /ac (Wi-Fi 5)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.2 / v4.0 </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
                                <div>1 x 3.5mm Headphone, 1 x USB 3.0 Type-C (PD 2.0 Charging, Display out), 2 x USB 3.0, 1 x Micro-HDMI/Mini-HDMI, 1 x MicroSD Card Reader</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>315mm (W) x 212mm (D) x 15mm (H)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.35 kg 起</div>

                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材质 <br>(Material)</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
                                <div>Angel Blue (天使蓝) / AVITA Purple (AVITA紫) / Blossom Pink (花漾粉红) / Champagne Gold (香槟金) / Cloud Silver (曙光银) / Fragrant Lilac (丁香紫) / Himalayan Blue (澄空蓝) / Matt Black (型酷黑) / Pearl White (珍珠白) / Shamrock Green (幸运草) / Space Grey (太空灰) / Sunflower Yellow (向日葵) / Sunrise Orange (旭日橙) / Urban Ruby (都市红)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter and Power cord, Micro HDMI to HDMI Adapter/ Mini-HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-5" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">操作系统 <br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div>
                                    Intel® Core™ i7-8550U Processor, Intel® Core™ i5-8250U Processor, Intel® Core™ i3-8130U Processor, Intel® Pentium® N5000 Processor, Intel® Celeron® N4000 Processor, Intel® Core™ i7-7Y75 Processor, Intel® Core™ i5-7Y54 Processor, Intel® Pentium® N4200 Processor, Intel® Celeron® N3350 Processor
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">屏幕 <br>(Display)
                                </div>
                                <div>14" FHD IPS (1920 x 1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">内存 <br>(Memory)</div>
                                <div>8GB DDR4 2400MHz / 4GB LPDDR4 2400MHz / 8GB DDR3 1600MHz / 4GB DDR3 1600MHz </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">显示适配器 <br>(Graphics)</div>
                                <div>Intel® UHD Graphics / Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">储存装置 <br>(Storage)</div>
                                <div>128GB / 256GB / 512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">摄影机 <br>(Integrated Camera)</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">键盘 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit) <small>*For Intel® Core™ Processor model only</small></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网络 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n (Wi-Fi 4) /ac (Wi-Fi 5)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.2 / v4.0 </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
                                <div>1 x 3.5mm Headphone, 1 x USB 3.0 Type-C (PD 2.0 Charging, Display out), 2 x USB 3.0, 1 x Micro-HDMI/Mini-HDMI, 1 x MicroSD Card Reader</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>333mm (W) x 222mm (D) x 16mm (H)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.46 kg 起</div>
                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材质 <br>(Material)</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
                                <div>Angel Blue (天使蓝) / AVITA Purple (AVITA紫) / Blossom Pink (花漾粉红) / Champagne Gold (香槟金) / Cloud Silver (曙光银) / Fragrant Lilac (丁香紫) / Himalayan Blue (澄空蓝) / Matt Black (型酷黑) / Pearl White (珍珠白) / Shamrock Green (幸运草) / Space Grey (太空灰) / Sunflower Yellow (向日葵) / Sunrise Orange (旭日橙) / Urban Ruby (都市红)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter and Power cord, Micro HDMI to HDMI Adapter/ Mini-HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 属于美国及其他国家的Intel 公司所有。</li>
                    <li>产品规格可能会依国家地区而有所变动，我们诚挚的建议您与当地的经销商或零售商确认目前贩售产品的规格。</li>
                    <li>产品颜色可能会因拍照光线误差或荧幕设定而与实际产品有所差异。</li>
                    <li>我们会尽力提供正确与完整的资料于网页上，并保留更动、修正页面资讯的权利，恕不另行通知。</li>
                    <li>重量会因组态及制造差异而有所不同。</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
