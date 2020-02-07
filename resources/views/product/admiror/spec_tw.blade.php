@extends('layouts.app')

@section('title')
    @lang('title.Admiror_spec')
@stop

@section('content')

    <main class="top-nav-padding">
    
	@include('partials.product-navbar')
    
        <!-------------------Submenu------------ 
        <div class="nav-product-panel">
            <div class="container">
                <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                    <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
                </div>
        
                <div class="product-nav-collapse">
                    <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
        
        
                         <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'admiror') }}">@lang('admiror.name')</a></li>
         
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', 'admiror') }}">@lang('site.productnav_spec')</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
                        
                        
                        <li class="nav-item" style="display:none;"><a class="nav-link py-1" href="{{ route('product.support', 'admiror') }}">@lang('site.productnav_support')</a></li>
                        
                        <li class="nav-item">
                            <a class="nav-link py-1" href="{{ route('product.map', 'liber') }}">@lang('site.productnav_wheretobuy')</a>
                        </li>
                        
                        <li class="nav-item" style="display:none;">
                            <a class="nav-link py-1" href="{{ route('product.map', 'admiror') }}">@lang('site.productnav_wheretobuy')</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--------------->

 
        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
 
 
						<!------------- AVITA ADMIROR (14-inch) -------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA ADMIROR</div><div class="d-sm-block">(14-inch)</div></div>
                           <img class="hidden-sm-down" src="/images/admiror/admiror_brown.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li style="background-color: #b1816b" class="active" data-image="/images/admiror/admiror_brown.png"></li> 
                                <li style="background-color: #d08364" data-image="/images/admiror/admiror_gold.png"></li>
                                <li style="background-color: #efa4a1" data-image="/images/admiror/admiror_pink.png"></li>
                                <li style="background-color: #75779b" data-image="/images/admiror/admiror_blue.png"></li>
                                <li style="background-color: #b7b189" data-image="/images/admiror/admiror_green.png"></li>
                            </ul>
                        </a>  

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
<!------------------ AVITA ADMIROR (14-inch) -------------------------------------------------->
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">


                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">作業系統<br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">處理器 <br>(CPU)</div>
                                <div>Intel® Core™ i5-8265U Processor<br />
                                	 Intel® Core™ i7-8565U Processor
								</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">螢幕 <br>(Display)</div>
                                <div>14" TFT (1920x1080) IPS</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">記憶體 <br>(Memory)</div>
                                <div>8GB DDR4</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">顯示卡 <br>(Graphics)</div>
                                <div>Intel® UHD Graphics 620</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">儲存裝置 <br>(Storage)</div>
                                <div>256GB /512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">攝影機 <br>(Integrated Camera)</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>2W x 2 + passive booster x 4, Dual Microphones</div>
                            </li>
                            <!--<li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">鍵盤 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit)</div>
                            </li>-->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">無線網路 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">藍芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">輸出/輸入埠 <br>(I/O Ports)</div>
                                <div>USB 3.0 Type-C x 2 (PD 2.0 charging, Display out)</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>325mm(W) x 235mm(D) x 18mm(H)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.32 kg 起</div>

                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電源供應器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 38.5Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電池續航時間 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材質 <br>(Material)</div>
                                <div>Aluminum, Magnesium</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">顏色 <br>(Colour)</div>
                                <div>Blazing Brown, Flaming Copper, Delight Pink, Pride Blue*, Traveler Green* <small>(* To be released)</small></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter, Power cord, USB-C to USB + HDMI + Headphone Jack Adapter, USB-C to 3.5mm Converter Cable</div>
                            </li>

                        </ul>
                    </div>
                </div>
                
                
<!------------------ENd  AVITA ADMIROR (14-inch) -------------------------------------------------->
                    
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
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
