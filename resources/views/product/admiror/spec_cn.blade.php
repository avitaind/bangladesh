@extends('layouts.app')

@section('title')
    @lang('title.Admiror_spec')
@stop

@section('content')

    <main class="top-nav-padding">
    
	@include('partials.product-navbar')
     
 
        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
 
 
						<!------------- AVITA ADMIROR (14-inch) -------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA 艾飞达 ADMIROR A01</div><div class="d-sm-block">(14英寸)</div></div>
                            <img class="hidden-sm-down" src="/images/admiror/admiror_gold.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li style="background-color: #75779b" class="active" data-image="/images/admiror/admiror_blue.png"></li>
                                <li style="background-color: #b1816b" data-image="/images/admiror/admiror_brown.png"></li> 
                                <li style="background-color: #d08364" data-image="/images/admiror/admiror_gold.png"></li>
                                <li style="background-color: #b7b189" data-image="/images/admiror/admiror_green.png"></li>
                                <li style="background-color: #efa4a1" data-image="/images/admiror/admiror_pink.png"></li>
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
                                <div class="offset-md-1 col-4 col-md-3">操作系统<br>(Operating System)</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div>Intel® Core™ i5-8265U Processor
								</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">屏幕 <br>(Display)</div>
                                <div>14" TFT (1920x1080) IPS</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">内存 <br>(Memory)</div>
                                <div>8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">显示适配器 <br>(Graphics)</div>
                                <div>Intel® UHD Graphics 620</div>
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
                                <div>2W x 2 + passive booster x 4, Dual Microphones</div>
                            </li>
                            <!--<li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">鍵盤 <br>(Keyboard)</div>
                                <div>Island-type Keyboard (with Backlit)</div>
                            </li>-->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网络 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
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
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>Li-ion Battery, 38.5Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">材质 <br>(Material)</div>
                                <div>Aluminum, Magnesium</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
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
<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等trademarks 属于美国及其他国家的Intel 公司所有。</li>
<li>产品规格可能会依国家地区而有所变动，我们诚挚的建议您与当地的经销商或零售商确认目前贩售产品的规格。 </li>
<li>产品颜色可能会因拍照光线误差或萤幕设定而与实际产品有所差异。 </li>
<li>我们会尽力提供正确与完整的资料于网页上，并保留更动、修正页面资讯的权利，恕不另行通知。 </li>
<li>重量会因组态及制造差异而有所不同。 </li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
