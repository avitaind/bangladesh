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
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">12.5" (31.75 cm) @if( !$HAVE_LIBER_12) / @lang('site.coming_soon') @endif</div></div>
                            <img class="hidden-sm-down" src="/images/liber/12/pink.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #DE9299" class="active" data-image="/images/liber/12/pink.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/liber/12/purple.png"></li>
                                <li style="background-color: #55665B" data-image="/images/liber/12/green.png"></li>
                                <li style="background-color: #74AACA" data-image="/images/liber/12/cyan.png"></li>

                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-1" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">13.3" (33.78 cm)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/13/silver.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">

                                <li style="background-color: #7d7e82" class="active" data-image="/images/liber/13/silver.png"></li>
                                <li style="background-color: #c5c2d9" data-image="/images/liber/13/lightpurple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/13/blue.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/13/purple.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/13/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/13/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/13/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/13/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/13/orange.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/13/lightsilver.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/13/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/13/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/13/black.png"></li>
                                <li style="background-color: #bdbbb7" data-image="/images/liber/13/lightsilver.png"></li>

                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-2" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">14" (35.56 cm)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/14/silver.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4">

                                <li style="background-color: #7d7e82" class="active" data-image="/images/liber/14/silver.png"></li>
                                <li style="background-color: #c5c2d9" data-image="/images/liber/14/lightpurple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/14/blue.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/14/purple.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/14/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/14/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/14/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/14/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/14/orange.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/14/lightsilver.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/14/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/14/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/14/black.png"></li>
                                <li style="background-color: #bdbbb7" data-image="/images/liber/14/lightsilver.png"></li>
                            </ul>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="spec-3" role="tabpanel">
                    <div class="container">
                        <div class="offset-md-1">
                            <img style="width: 200px; margin: 2% 0px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                        </div>
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating System</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>7th Gen Intel® Core i5-7Y54</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>1920x1080</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>8GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>256 GB SSD</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 B/G/N/AC</div>
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
                                <div class="offset-md-1 col-4 col-md-3">Dimension W x H x D (mm)</div>
                                <div>299 x 199.5 x 14.89</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>1.14 kg</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 8 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Chassis</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Princess Pink, Fragrant Lilac, Peacock Green, Angel Blue.</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-1" role="tabpanel">
                    <div class="container">
                        <div class="offset-md-1">
                            <img style="width: 200px; margin: 2% 0px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                        </div>
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating System</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>Intel® Core i5-7Y54</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>1920x1080</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>8GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>256 GB SSD / 512 GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 B/G/N/AC</div>
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
                                <div class="offset-md-1 col-4 col-md-3">Dimension W x H x D (mm)</div>
                                <div>315 x 212 x 15</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.35 kg</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Chassis</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Avita Purple, Pearl White, Champagne Gold, Princess Pink, Cloud Silver, Shamrock Green, Fragrant Lilac, Space Grey, Angel Blue, Sunflower Yellow, Matt Black, Sunrise Orange, Peacock Green, Urban Ruby. </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-2" role="tabpanel">
                    <div class="container">
                        <div class="offset-md-1">
                            <img style="width: 200px; margin: 2% 0px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                        </div>
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating System</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>Intel® Core i5-7Y54</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>1920x1080</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div> 8GB DDR3 </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>256 GB SSD / 512 GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 B/G/N/AC</div>
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
                                <div class="offset-md-1 col-4 col-md-3">Dimension W x  H x D (mm)</div>
                                <div>333 x 222 x 16</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.46 kg</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Chassis</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Avita Purple, Pearl White, Champagne Gold, Princess Pink, Cloud Silver, Shamrock Green, Fragrant Lilac, Space Grey, Angel Blue, Sunflower Yellow, Matt Black, Sunrise Orange, Peacock Green, Urban Ruby. </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
