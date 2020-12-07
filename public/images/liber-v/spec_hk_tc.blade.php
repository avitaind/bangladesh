@extends('layouts.app')

@section('title')
    @lang('title.LIBER_v_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

 
<!--------------LIBER v 14"(New Generation)-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-140" role="tab">
                            <div class="spec-item-name mb-12"><div class="d-sm-block">AVITA LIBER V</div><div class="d-sm-block">(14-inch)</div></div>
                            <img class="hidden-sm-down" src="/images/liber-v/purple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4"> 
                                <li style="background-color: #704594" class="active" data-image="/images/liber-v/purple.png"></li>
                                <li style="background-color: #54a7d9" data-image="/images/liber-v/lightblue.png"></li>
                                <li style="background-color: #1f1f1f" data-image="/images/liber-v/black.png"></li>
                                <li style="background-color: #c2c2c2" data-image="/images/liber-v/white.png"></li>
                                <li style="background-color: #f6bdc8" data-image="/images/liber-v/lightpink.png"></li> 
                            </ul>
                        </a>
  

                    </nav>
                </div>
            </div>


            <!-- Tab panes -->
            <div class="tab-content">
            
             
                
                 
<!-- Liber 140 SPEC -------------------------------------------------------------->
                <div class="tab-pane active" id="spec-140" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.os')</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.cpu')</div>
                                <div>Intel® Core™ i5-10210U / Intel® Core™ i7-10510U</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>14" 16:9 全高清 IPS 防昡液晶螢幕 (1920x1080) 178度超廣角顯示	</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>8GB DDR4 2400MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>Intel® UHD Graphics 620</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>512GB / 1TB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.camera')</div>
                                <div>1M</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.audio')</div>
                                <div>1W x 2 揚聲器, 雙麥克風</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.keyboard')</div>
                                <div>全尺寸背光鍵盤</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.wireless')</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.bluetooth')</div>
                                <div>藍牙 4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.ports')</div>
                                <div>2 x USB 3.0, 1 x USB 3.0 Type-C (PD 2.0 Charging, Display out), 1 x 3.5mm Headphone Jack, DC in, 1 x MicroSD card slot, 1 x Micro HDMI Type D</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>W318 X H218 X D 15.9 mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>約1.28 kg 起</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery')</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery_life')</div>
                                <div>最高長達10小時<sup>*</sup></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">安全性</div>
                                <div>指紋識別功能</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.material')</div>
                                <div>@lang('prod_spec_hk.liber140_material')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>曙光銀, 型酷黑, 丁香紫, 天使藍, 花樣粉紅</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.accessories')</div>
                                <div>@lang('prod_spec_hk.liber140_accessories')</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 屬於美國及其他國家的Intel 公司所有。</li>
                    <li>產品規格可能會依國家地區而有所變動，我們誠摯的建議您與當地的經銷商或零售商確認目前販售產品的規格。</li>
					<li>產品顏色可能會因拍照光線誤差或螢幕設定而與實際產品有所差異。</li>
					<li>我們會盡力提供正確與完整的資料於網頁上，並保留更動、修正頁面資訊的權利，恕不另行通知。</li>
					<li>重量會因組態及製造差異而有所不同。</li>
                    <li><sup>*</sup>根據MobileMark 2014 測試長達10小時</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
