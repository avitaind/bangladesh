@extends('layouts.app')

@section('title')
    @lang('title.MAGUS_spec')
@stop

@section('content')

    <main class="top-nav-padding">

<!-------------------Submenu------------->
        <div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">


                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'magus12-2in1-laptop') }}">@lang('site.productnav_magus')</a></li>


                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'magus-spec') }}">@lang('site.productnav_spec')</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
            </ul>
        </div>
    </div>
</div>
<!--------------->

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA MAGUS 12.2" 2-in-1 Laptop</div><div class="d-sm-block">NS12T5</div></div>
                            <img class="hidden-sm-down" src="/images/magus/magus_grey.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #434343" class="active" data-image="/images/magus/magus_grey.png"></li>
                                <li style="background-color: #b699ca" data-image="/images/magus/magus_violet.png"></li>
                                <li style="background-color: #dbb2a7" data-image="/images/magus/magus_pink.png"></li>
                                <li style="background-color: #576f91" data-image="/images/magus/magus_blue.png"></li>
                            </ul>
                        </a>
                    </nav>
                </div>
            </div>



            <!-- Tab panes -->
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
                                <div class="offset-md-1 col-4 col-md-3">
                                  作業系統<br />
                                  (Operating System)
                                </div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                  <div class="offset-md-1 col-4 col-md-3">處理器 <br />
                                    (CPU)</div>
                                <div>Intel® Celeron® N3350</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">螢幕 <br />
                                (Display)</div>
                                <div>12.2&quot; TFT,  (1920 x 1200) IPS</div>
                            </li>
                            <li class="spec-item d-flex"><span class="offset-md-1 col-4 col-md-3">記憶體 <br />
                              (Memory)</span>
                                <div>4GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">顯示卡 <br />
                                (Graphics)</div>
                                <div>Intel® HD Graphics 500</div>
                            </li>
                            <li class="spec-item d-flex"><span class="offset-md-1 col-4 col-md-3">儲存裝置 <br />
                              (Storage)</span>
                                <div>64GB eMMC + 64GB MicroSD Card</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">音效 <br />
                                (Audio)</div>
                                <div>1W x 2 Stereo Speaker </div>
                            </li>
                            <li class="spec-item d-flex">
                                  <div class="offset-md-1 col-4 col-md-3">鍵盤 <br />
                                    (Keyboard)</div>
                                <div>English Travel Keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">無線網路 <br />
                                (Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex"><span class="offset-md-1 col-4 col-md-3">藍芽 <br />
                              (Bluetooth)</span>
                                <div>Bluetooth v4.0 </div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">輸出/輸入埠 <br />
                                (I/O Ports)</div>
                                <div>1 x 3.5mm Headphone, 1 x USB 3.0, 1 x Mini-HDMI, 1 x MicroSD Card Slot</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">尺寸 <br />
                                (Dimension)</div>
                                <div>299mm (W) x 206mm (D) x 22mm (H)</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">重量 <br />
                                (Weight)</div>
                                <div>Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">電池容量 <br />
                                (Battery)</div>
                              <div>Li-ion Battery </div>
                            </li>
                            <li class="spec-item d-flex">
                                  <div class="offset-md-1 col-4 col-md-3">電池續航時間 <br />
                                    (Battery Life)</div>
                                <div>Up to 8 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                              <div class="offset-md-1 col-4 col-md-3">配件 <br />
                                (Accessories)</div>
                                <div>AC Adapter and  Power cord, English Travel Keyboard, 64GB Micro SD card</div>
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
                    <li>電池使用時間因應產品型號、規格、應用程式、功能、使用情況、網絡連線情況及電源設定而異。電池的最高使用效能隨使用時間及情況而遞減</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
