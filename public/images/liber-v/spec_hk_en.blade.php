@extends('layouts.app')

@section('title')
    @lang('title.LIBER_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section>
        
<!--------------PRODUCT IMAGES-------------->
            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

<!--------------LIBER u 13.3"(New Generation)-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-133" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(13.3-inch)</div></div>
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
<!--------------LIBER u 14"(New Generation)-------------->
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-140" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(14-inch)</div></div>
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
                        
<!--------------LIBER 12.5"-------------->
                        <a class="col text-center nav-link " data-toggle="tab" href="#spec-125" role="tab">
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
                        
                    </nav>
                </div>
            </div>
<!--------------END PRODUCT IMAGES-------------->


<!-- Tab panes PRODUCT SPEC-->
            <div class="tab-content">
            
<!------------------ PRODUCT SPEC LIBER 12.5"-------------------------------------------------->
                <div class="tab-pane" id="spec-125" role="tabpanel">
                    <div class="container">

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.os')</div>
                                <div>@lang('prod_spec_hk.liber125_os')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.cpu')</div>
                                <div>@lang('prod_spec_hk.liber125_cpu')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>@lang('prod_spec_hk.liber125_display')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>@lang('prod_spec_hk.liber125_memory')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>@lang('prod_spec_hk.liber125_graphics')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>@lang('prod_spec_hk.liber125_storage')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.camera')</div>
                                <div>@lang('prod_spec_hk.liber125_camera')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.audio')</div>
                                <div>@lang('prod_spec_hk.liber125_audio')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.keyboard')</div>
                                <div>@lang('prod_spec_hk.liber125_keyboard')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.wireless')</div>
                                <div>@lang('prod_spec_hk.liber125_wireless')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.bluetooth')</div>
                                <div>@lang('prod_spec_hk.liber125_bluetooth')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.ports')</div>
                                <div>@lang('prod_spec_hk.liber125_ports')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>@lang('prod_spec_hk.liber125_dimension')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>@lang('prod_spec_hk.liber125_weight')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery')</div>
                                <div>@lang('prod_spec_hk.liber125_battery')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery_life')</div>
                                <div>@lang('prod_spec_hk.liber125_battery_life')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.material')</div>
                                <div>@lang('prod_spec_hk.liber125_material')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>@lang('prod_spec_hk.liber125_colour')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.accessories')</div>
                                <div>@lang('prod_spec_hk.liber125_accessories')</div>
                            </li>
                        </ul>
                    </div>
                </div>

<!------------------  PRODUCT SPEC LIBER 13.3" ------------------------------------->
                <div class="tab-pane active" id="spec-133" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.os')</div>
                                <div>@lang('prod_spec_hk.liber133_os')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.cpu')</div>
                                <div>@lang('prod_spec_hk.liber133_cpu')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>@lang('prod_spec_hk.liber133_display')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>@lang('prod_spec_hk.liber133_memory')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>@lang('prod_spec_hk.liber133_graphics')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>@lang('prod_spec_hk.liber133_storage')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.camera')</div>
                                <div>@lang('prod_spec_hk.liber133_camera')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.audio')</div>
                                <div>@lang('prod_spec_hk.liber133_audio')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.keyboard')</div>
                                <div>@lang('prod_spec_hk.liber133_keyboard')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.wireless')</div>
                                <div>@lang('prod_spec_hk.liber133_wireless')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.bluetooth')</div>
                                <div>@lang('prod_spec_hk.liber133_bluetooth')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.ports')</div>
                                <div>@lang('prod_spec_hk.liber133_ports')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>@lang('prod_spec_hk.liber133_dimension')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>@lang('prod_spec_hk.liber133_weight')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery')</div>
                                <div>@lang('prod_spec_hk.liber133_battery')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery_life')</div>
                                <div>@lang('prod_spec_hk.liber133_battery_life')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.material')</div>
                                <div>@lang('prod_spec_hk.liber133_material')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>@lang('prod_spec_hk.liber133_colour')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.accessories')</div>
                                <div>@lang('prod_spec_hk.liber133_accessories')</div>
                            </li>
                        </ul>

                    </div>
                </div>
<!-- Liber 140 SPEC -------------------------------------------------------------->
                <div class="tab-pane" id="spec-140" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.os')</div>
                                <div>@lang('prod_spec_hk.liber140_os')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.cpu')</div>
                                <div>@lang('prod_spec_hk.liber140_cpu')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>@lang('prod_spec_hk.liber140_display')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>@lang('prod_spec_hk.liber140_memory')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>@lang('prod_spec_hk.liber140_graphics')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>@lang('prod_spec_hk.liber140_storage')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.camera')</div>
                                <div>@lang('prod_spec_hk.liber140_camera')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.audio')</div>
                                <div>@lang('prod_spec_hk.liber140_audio')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.keyboard')</div>
                                <div>@lang('prod_spec_hk.liber140_keyboard')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.wireless')</div>
                                <div>@lang('prod_spec_hk.liber140_wireless')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.bluetooth')</div>
                                <div>@lang('prod_spec_hk.liber140_bluetooth')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.ports')</div>
                                <div>@lang('prod_spec_hk.liber140_ports')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>@lang('prod_spec_hk.liber140_dimension')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>@lang('prod_spec_hk.liber140_weight')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery')</div>
                                <div>@lang('prod_spec_hk.liber140_battery')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.battery_life')</div>
                                <div>@lang('prod_spec_hk.liber140_battery_life')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.material')</div>
                                <div>@lang('prod_spec_hk.liber140_material')</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>@lang('prod_spec_hk.liber140_colour')</div>
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

<!-- DISCLAIMER-->
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
