@extends('layouts.app')

@section('title')
    @lang('title.IMAGO_spec')
@stop

@section('css')
<style>
    main{
        background-color : #fff
    }
    .nav-spec img{
        max-width: 100%;
        max-height: 400px;
    }
    .nav-spec { 
        border : 2px solid transparent;
    }
    a.nav-spec:hover, 
    a.nav-spec:active,
    a.nav-spec:focus {
        text-decoration: none
    }
    .nav-spec.active{
        border-color : #ccc;
    }
    .nav-spec.active:after{
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        width: 3rem;
        height: 3rem;
        margin-top:1px;
        border: 2px solid #ccc;
        border-width: 0 2px 2px 0;
        -webkit-transform: translate(-50%,-50%) rotate(45deg);
        -ms-transform: translate(-50%,-50%) rotate(45deg);
        transform: translate(-50%,-50%) rotate(45deg);
        background-color: #fff;
    }
    .spec-list .imago-spec-title{
        background-color: #444;
        color: #fff;
    }
    .spec-list .imago-spec-title > div:first-child, .spec-list .imago-spec-item > div:first-child{
        font-weight: 700;
    }
    .spec-list .imago-spec-item{
        border-bottom: 2px solid #ccc;
    }

    @media (max-width: 767px){
        .nav-spec.active:after{ display: none;}
    }
</style>
@endsection

@section('content')

<main class="top-nav-padding">
    <div class="nav-product-panel">
        <div class="container">
            <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
            </div>

            <div class="product-nav-collapse">
                <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end py-2 mb-0">
                    <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', $product->short_code) }}">@lang('site.productnav_overview')</a></li>
                    <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', $product->short_code) }}">@lang('site.productnav_spec')</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container py-5">
            <nav class="nav nav-pills nav-product-spec justify-content-center text-center">
                <a class="nav-spec col text-center py-3 active" href="#spec-1" data-toggle="tab" role="tab">
                    <div class="text-center mb-md-4"><b>IMAGO</b> IM100</div>
                    <img class="hidden-sm-down" src="/images/imago/vs1.png">
                </a>
                <a class="nav-spec col text-center py-3" href="#spec-2" data-toggle="tab" role="tab">
                    <div class="text-center mb-md-4"><b>IMAGO</b> IM200</div>
                    <img class="hidden-sm-down" src="/images/imago/vs2.png">
                </a>
            </nav>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="spec-1" role="tabpanel">
                <div class="container">
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Configuration</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">CPU</div>
                            <div>Rockchip 3288</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Frequency</div>
                            <div>Cortex A17</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">GPU</div>
                            <div>Mali-T764</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">RAM</div>
                            <div>2GB</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">ROM</div>
                            <div>8GB (64G Optional)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Wifi</div>
                            <div>2.4G/5G Double frequency 802.11 a/b/g/n</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Bluetooth</div>
                            <div>Bluetooth 4.0</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">OS</div>
                            <div>Android 5.1.X</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Waterproof capacitive touch screen</div>
                            <div>YES (10 points)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Speaker</div>
                            <div>2x2W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Power button(touch)</div>
                            <div>YES</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Motion sensor</div>
                            <div>YES (20~80cm)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Ports</div>
                            <div style="line-height: 2rem">
                                USB:1<br> USE(OTG):1
                                <br> Audio switch:YES<br> RCA (Audio out):2 (Red & white)
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Power/Consumption</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Power input</div>
                            <div>AC 100-240V 2AMax 50/60Hz</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Consumption</div>
                            <div>&le; 45W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Standby Consumption</div>
                            <div>&le; 1W</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Display</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display size</div>
                            <div>21.5"</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display type</div>
                            <div>IPS</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display ratio</div>
                            <div>16:9</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Resolution</div>
                            <div>1920 x R.G.B x 1080</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Brightness</div>
                            <div>1000 cd/m2 (Original LED screen)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Contrast Ratio</div>
                            <div>4000:1</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Viewing angle</div>
                            <div>178&deg; (H) X 178&deg; (V)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display color</div>
                            <div>16.7M</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Response time</div>
                            <div>5ms</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Working life</div>
                            <div>25000 Hours</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">General Dimension</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">General Size</div>
                            <div>800X600mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Thickness</div>
                            <div>40mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Mirror panel</div>
                            <div>Coated Silver Mirror</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Material</div>
                            <div>Stainless steel bracket, metal casing, plastic parts and etc.</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">IP level</div>
                            <div>IP65</div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- tab 2 (IMAGO IM200) -->
            <div class="tab-pane" id="spec-2" role="tabpanel">
                <div class="container">
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Configuration</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">CPU</div>
                            <div>Rockchip 3288</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Frequency</div>
                            <div>Cortex A17 1.8GHz</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">GPU</div>
                            <div>Mali-T764</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Image processor</div>
                            <div style="line-height: 2rem">
                                OPENGL ES1.1/2.0/3.0, OPEN VG1.1<br> OPENCL, Directx11<br> 2D/3D
                                <br> 4K, H.265 decoder
                            </div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">RAM</div>
                            <div>2GB</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">ROM</div>
                            <div>8GB (64G Optional)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Wifi</div>
                            <div>2.4G/5G Double frequency 802.11 a/b/g/n</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Bluetooth</div>
                            <div>Bluetooth 4.0</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">OS</div>
                            <div>Android 5.1.X</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2" style="border : 0;">
                            <div class="offset-md-1 col-5 col-md-5">Waterproof capacitive touch screen</div>
                            <div>YES (10 points)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2" style="border : 0;">
                            <div class="offset-md-1 col-5 col-md-5">Speaker</div>
                            <div>2*2W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2" style="border : 0;">
                            <div class="offset-md-1 col-5 col-md-5">Power button(touch)</div>
                            <div>YES</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Motion sensor</div>
                            <div>YES (20~80cm)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Ports</div>
                            <div style="line-height: 2rem">
                                DC IN:1<br> USE(OTG):1
                                <br> USD:1
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Power/Consumption</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Power input</div>
                            <div>DC 12V 3A</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Consumption</div>
                            <div>&le; 36W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Standby Consumption</div>
                            <div>&le; 0.6W</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Display</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display size</div>
                            <div>13.3"</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display type</div>
                            <div>IPS</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display ratio</div>
                            <div>16:9</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Resolution</div>
                            <div>1920 x R.G.B x 1080</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Brightness</div>
                            <div>350 cd/m2 (Original LED screen)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Contrast Ratio</div>
                            <div>1000:1</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Viewing angle</div>
                            <div>178&deg; (H) X 178&deg; (V)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Response time</div>
                            <div>16ms</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Working life</div>
                            <div>&ge; 20000 Hours</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">General Dimension</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">General Size</div>
                            <div>&Phi;500mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Thickness</div>
                            <div>36mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Mirror panel</div>
                            <div>Diamond level coated glass</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Material</div>
                            <div>Aluminium-alloy rim, plastic back shell</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">IP level</div>
                            <div>IP65</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-wrap py-5 justify-content-around align-items-center">
            <div class="mx-3 my-3">
                <img src="/images/imago/icon1.png">
            </div>
            <div class="mx-3 my-3">
                <img src="/images/imago/icon2.png">
            </div>
            <div class="mx-3 my-3">
                <img src="/images/imago/icon3.png">
            </div>
            <div class="mx-3 my-3">
                <img src="/images/imago/icon4.png">
            </div>
            <div class="mx-3 my-3">
                <img src="/images/imago/icon5.png">
            </div>
            <div class="mx-3 my-3">
                <img src="/images/imago/icon6.png">
            </div>
            <div class="mx-3 my-3">
                <img src="/images/imago/icon7.png">
            </div>
        </div>

    </section>

</main>

@endsection
