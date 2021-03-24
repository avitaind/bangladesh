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
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA PURA - AMD</div><div class="d-sm-block">(14-inch)</div></div>
                             <img class="hidden-sm-down" src="/images/pura/Pura_grey.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li class="active" style="background-color: #7d7e82" data-image="/images/pura/Pura_grey.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/pura/Pura_black.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/pura/Pura_white.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/pura/Pura_blue.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/pura/Pura_purple.png"></li>
                                <li style="background-color: #9e0b0f" data-image="/images/pura/Pura_red.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/pura/Pura_yellow.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/pura/Pura_sparklingPink.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/pura/Pura_pink.png"></li>
                            </ul>
                        </a>   	
                        
                        
                        <!-------------- PURA 14-inch Ryzen -------------->
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-5" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA PURA - AMD Ryzen™</div><div class="d-sm-block">(14-inch)</div></div>
                              <img class="hidden-sm-down" src="/images/pura/01-757575.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li class="active" style="background-color: #757575" data-image="/images/pura/01-757575.png"></li>
                                <li style="background-color: #c7c7c7" data-image="/images/pura/02-c7c7c7.png"></li>
                                <li style="background-color: #bc1031" data-image="/images/pura/03-bc1031.png"></li>
                                <li style="background-color: #277a9e" data-image="/images/pura/04-277a9e.png"></li>
                                <li style="background-color: #2c2c2c" data-image="/images/pura/05-2c2c2c.png"></li>
                                <li style="background-color: #e1be21" data-image="/images/pura/06-e1be21.png"></li>
                                <li style="background-color: #b36175" data-image="/images/pura/07-b36175.png"></li>
                                <li style="background-color: #7c68a7" data-image="/images/pura/08-7c68a7.png"></li>
                                <li style="background-color: #be1b5f" data-image="/images/pura/09-be1b5f.png"></li>
                            </ul>
                        </a>   	
                        
                        

                    </nav>
                </div>
            </div>
  
           

			<!-- Tab panes PRODUCT SPEC-->
            <div class="tab-content">
            
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">作業系統<br>(Operating System)</div>
                                <div>Windows 10 Home in S mode</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">處理器 <br>(CPU)</div>
                                <div>   
                                	AMD A9-9420E
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">螢幕 <br>(Display)</div>
                                <div>14" 16:9 全高清 IPS 螢幕 (1920x1080) 178度超廣角顯示</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">記憶體 <br>(Memory)</div>
                                <div>4GB / 8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">顯示卡 <br>(Graphics)</div>
                                <div>AMD Radeon R5 Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">儲存裝置 <br>(Storage)</div>
                                <div>128GB / 256GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">攝影機 <br>(Integrated Camera)</div>
                                <div>VGA</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>0.8W x 2 揚聲器, 雙麥克風</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">鍵盤 <br>(Keyboard)</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
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
                                <div>1 x 3.5mm Headphone Jack, 1 x Full Size USB 2.0, 1 x Full Size USB 3.0, 1 x USB 3.0 Type-C, 1 x MicroSD card slot (Max support 256GB), Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>332(W) x 221(H) x 17(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>約1.34 kg 起</div>
                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電源供應器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電池容量 <br>(Battery)</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電池續航時間 <br>(Battery Life)</div>
                                <div>最高長達8小時</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">顏色 <br>(Colour)</div>
                                <div>太空灰 / 鋼鐵黑 / 柔光白 / 藍水晶 / 光影紫 / 甜心紅 / 亮麗黃 / 粉紅鑽 / 閃亮紅</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter and Power cord</div> 
                            </li>

                        </ul>
                    </div> 
                
            </div>


<!------------------  PURA 14-inch Ryzen------------------------------------->

                <div class="tab-pane" id="spec-5" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">作業系統<br>(Operating System)</div>
                                <div>Windows 10 Home in S mode</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">處理器 <br>(CPU)</div>
                                <div>   
                                	AMD Ryzen™ 3 3200U / Ryzen™ 5 3500U
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">螢幕 <br>(Display)</div>
                                <div>14" 16:9 全高清 IPS 防眩液晶螢幕 (1920x1080) 178度超廣角顯示</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">記憶體 <br>(Memory)</div>
                                <div>8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">顯示卡 <br>(Graphics)</div>
                                <div>AMD Radeon Vega 3 Graphics / AMD Radeon Vega 8  Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">儲存裝置 <br>(Storage)</div>
                                <div>256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">攝影機 <br>(Integrated Camera)</div>
                                <div>VGA</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">音效 <br>(Audio)</div>
                                <div>0.8W x 2 揚聲器, 雙麥克風</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">鍵盤 <br>(Keyboard)</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">無線網路 <br>(Wireless)</div>
                                <div>Qualcomm® QCA9377 IEEE 802.11a/b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">藍芽 <br>(Bluetooth)</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">輸出/輸入埠 <br>(I/O Ports)</div>
                                <div>1 x 3.5mm Headphone Jack, 2 x Full Size USB 3.0, 1 x USB 3.0 Type-C, 1 x MicroSD card slot (Max support 256GB), Full Size HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">尺寸 <br>(Dimension)</div>
                                <div>333(W) x 222(H) x 20(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">重量 <br>(Weight)</div>
                                <div>約1.344 kg 起</div>
                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電源供應器 <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電池容量 <br>(Battery)</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">電池續航時間 <br>(Battery Life)</div>
                                <div>最高長達7小時</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">顏色 <br>(Colour)</div>
                                <div>
                                太空灰 / 柔光白 / 甜心紅 / 藍水晶 / 鋼鐵黑 / 亮麗黃 / 粉紅鑽 / 光影紫 / 閃亮紅
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">配件 <br>(Accessories)</div>
                                <div>AC Adapter and Power cord</div> 
                            </li> 
                        </ul>
                    </div>  
            </div> 

<!------------------ End PURA 14-inch Ryzen------------------------------------->
 
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>備註: S 模式的 Windows 10 家用版只能在 Windows 與 Microsoft Store 中的應用程式搭配運作，並且搭配使用與 S 模式的 Windows 10 家用版相容的配件。 單向切換脫離 S 模式可供使用。 如需詳細資訊，請瀏覽 <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>。</li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 屬於美國及其他國家的Intel 公司所有。</li>
                    <li>產品規格可能會依國家地區而有所變動，我們誠摯的建議您與當地的經銷商或零售商確認目前販售產品的規格。</li>
                    <li>重量會因組態及製造差異而有所不同。</li>
                    <li>產品顏色可能會因拍照光線誤差或螢幕設定而與實際產品有所差異。</li>
                    <li>我們會盡力提供正確與完整的資料於網頁上，並保留更動、修正頁面資訊的權利，恕不另行通知。</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
