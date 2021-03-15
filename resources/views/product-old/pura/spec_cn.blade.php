@extends('layouts.app')

@section('title')
    @lang('title.Pura_spec')
@stop

@section('content')

    <main class="top-nav-padding">
    
	@include('partials.product-navbar')
     

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
                    
                    	<!-------------- PURA 14-inch-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA 艾飞达 PURA P01</div><div class="d-sm-block">(14英寸)</div></div>
                             <img class="hidden-sm-down" src="/images/pura/silver.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li class="active" style="background-color: #7d7e82" data-image="/images/pura/silver.png"></li>
                            </ul>
                        </a>   	

                    </nav>
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
                                <div>Windows 10 Home in S mode</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">处理器 <br>(CPU)</div>
                                <div> 
                                	Intel® Core™ i5-8265U Processor
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">屏幕 <br>(Display)</div>
                                <div>14" TFT (1920 x 1080) </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">内存 <br>(Memory)</div>
                                <div>4GB / 8GB</div>
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
                                <div>1M</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>0.8W x 2 Speaker, Dual Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">键盘 <br>(Keyboard)</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">无线网络 <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">蓝芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.1</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">输出/输入埠 <br>(I/O Ports)</div>
                                <div>1 x 3.5mm Headphone Jack, 2 x Full Size USB 3.0, 1 x USB 3.0 Type-C (PD 2.0 Charging, Display out), 1 x MicroSD card slot (Max support 256GB)</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>332(W) x 221(H) x 15(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>1.344 kg 起</div>
                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电源供应器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池容量 <br>(Battery)</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">电池续航时间 <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">颜色 <br>(Colour)</div>
                                <div>Space Grey (太空灰)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter and Power cord 
                                	 
                                </div> 
                            </li>

                        </ul>
                    </div> 
                
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                 <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
<li>备注: S 模式的 Windows 10 家用版只能在 Windows 与 Microsoft Store 中的应用程式搭配运作，并且搭配使用与 S 模式的 Windows 10 家用版相容的配件。单向切换脱离 S 模式可供使用。如需详细资讯，请浏览 <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>。 </li>
<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等trademarks 属于美国及其他国家的Intel 公司所有。 </li>
<li>产品规格可能会依国家地区而有所变动，我们诚挚的建议您与当地的经销商或零售商确认目前贩售产品的规格。 </li>
<li>重量会因组态及制造差异而有所不同。 </li>
<li>产品颜色可能会因拍照光线误差或萤幕设定而与实际产品有所差异。 </li>
<li>我们会尽力提供正确与完整的资料于网页上，并保留更动、修正页面资讯的权利，恕不另行通知。 </li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
