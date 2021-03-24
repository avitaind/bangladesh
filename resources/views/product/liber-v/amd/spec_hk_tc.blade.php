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
                            <div class="spec-item-name mb-12"><div class="d-sm-block">AVITA LIBER V - AMD Ryzen™</div><div class="d-sm-block">(14-inch)</div></div>
                            <img class="hidden-sm-down" src="/images/liber-v/ff6082.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4"> 
                                <li style="background-color: #ff6082" class="active" data-image="/images/liber-v/ff6082.png"></li>
                                <li style="background-color: #c54343" data-image="/images/liber-v/c54343.png"></li>
                                <li style="background-color: #b55cba" data-image="/images/liber-v/b55cba.png"></li>
                                <li style="background-color: #31496d" data-image="/images/liber-v/31496d.png"></li>
                                <li style="background-color: #94c880" data-image="/images/liber-v/94c880.png"></li> 
                                <li style="background-color: #9bbfe3" data-image="/images/liber-v/9bbfe3.png"></li>  
                                <li style="background-color: #9b5abe" data-image="/images/liber-v/9b5abe.png"></li> 
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
                                <div>AMD Ryzen™ 5 3500U / Ryzen™ 7 3700U</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>14" 16:9 全高清 IPS 防眩液晶螢幕 (1920x1080) 178度超廣角顯示	</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>8GB DDR4 2400MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>Radeon™ Vega 8 Graphics / Radeon™ RX Vega 10 Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>512GB SSD SATA M.2</div>
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
                                <div>2 x USB 3.0, 1 x USB 3.0 Type-C (PD 3.0 charging, Display out), 1 x 3.5mm Headphone Jack, DC in, 1 x MicroSD card slot, 1 x HDMI Type A</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>W318 X H218 X D 17.4 mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>約1.30kg 起</div>
                            </li>
                            <!-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery')</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                           <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery_life')</div>
                                <div>最高長達10小時<sup>*</sup></div>
                            </li>-->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">安全性<br/>Security</div>
                                <div>指紋識別功能</div>
                            </li>
                           <!-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.material')</div>
                                <div>@lang('prod_spec_hk.liber140_material')</div>
                            </li> -->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>柔薇紫, 盛夏粉紅, 蔚天藍, 悅目紅, 雅緻金, 極光銀, 深邃黑, 亮光白, 原創紫, 銀河灰<br/>(14款以上顏色將陸續登場,請密切關注我們的更新)</div>
                            </li>
                           <!-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.accessories')</div>
                                <div>@lang('prod_spec_hk.liber140_accessories')</div>
                            </li> -->
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
                    <li>銷售顏色可能因零售商而異。</li>
                    <li>產品外觀設計，顏色，配搭可能會因應不同型號和配置而異。</li>
                    <li>如有任何爭議，Nexstgo Company Limited保留最終決定權。</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
