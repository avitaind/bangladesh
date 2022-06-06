@extends('layouts.app')

@section('title')
    @lang('title.LIBER_v_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.liber-v-navbar')

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

 
<!--------------Intel-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-intel" role="tab">
                            <div class="spec-item-name mb-12"> 
								<div class="d-sm-block">LIBER V New Collection</div>
								<div class="d-sm-block">Intel® Core™</div>
								<div class="d-sm-block">(14-inch)</div>
							</div>
                            <img class="hidden-sm-down" src="/images/liber-v/ebd9f2.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4">  
                                <li style="background-color: #ebd9f2" class="active" data-image="/images/liber-v/ebd9f2.png"></li> 
                                <li style="background-color: #54a7d9" data-image="/images/liber-v/54a7d9.png"></li> 
                                <li style="background-color: #c2c2c2" data-image="/images/liber-v/c2c2c2.png"></li> 
                                <li style="background-color: #7d7d7d" data-image="/images/liber-v/7d7d7d.png"></li> 
                                <li style="background-color: #1f1f1f" data-image="/images/liber-v/1f1f1f.png"></li>  
                            </ul>
                        </a>
						
<!--------------AMD -------------->
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-amd" role="tab">
                            <div class="spec-item-name mb-12"> 
								<div class="d-sm-block">LIBER V New Collection</div>
								<div class="d-sm-block">AMD Ryzen™</div>
								<div class="d-sm-block">(14-inch)</div>
							</div>
                            <img class="hidden-sm-down" src="/images/liber-v/9ae3d9.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4"> 
                                <li style="background-color: #9ae3d9" class="active"  data-image="/images/liber-v/9ae3d9.png"></li> 
                                <li style="background-color: #7d801e" data-image="/images/liber-v/7d801e.png"></li>
								<li style="background-color: #a9756d" data-image="/images/liber-v/a9756d.png"></li> 
                                <li style="background-color: #c88b87" data-image="/images/liber-v/c88b87.png"></li>
								<li style="background-color: #8685c5" data-image="/images/liber-v/8685c5.png"></li>
                                <li style="background-color: #c6869e" data-image="/images/liber-v/c6869e.png"></li> 
                                <li style="background-color: #fce86d" data-image="/images/liber-v/fce86d.png"></li>								
                                <li style="background-color: #7772a8" data-image="/images/liber-v/7772a8.png"></li>   
                                <li style="background-color: #ebd9f2" data-image="/images/liber-v/ebd9f2.png"></li> 
                                <li style="background-color: #54a7d9" data-image="/images/liber-v/54a7d9.png"></li> 
                                <li style="background-color: #c2c2c2" data-image="/images/liber-v/c2c2c2.png"></li> 
                                <li style="background-color: #7d7d7d" data-image="/images/liber-v/7d7d7d.png"></li> 
                                <li style="background-color: #1f1f1f" data-image="/images/liber-v/1f1f1f.png"></li>  
                                <li style="background-color: #9b5abe" data-image="/images/liber-v/9b5abe.png"></li>  
                                <li style="background-color: #a19485" data-image="/images/liber-v/a19485.png"></li>  
                            </ul>
                        </a>						
  

                    </nav>
                </div>
            </div>


            <!-- Tab panes -->
            <div class="tab-content">
            
             
                
                 
<!-- Liber intel SPEC -------------------------------------------------------------->
                <div class="tab-pane active" id="spec-intel" role="tabpanel">
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
                                <div>Intel® Core™ i5-1135G7 / Intel® Core™ i7-1165G7</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>14" 16:9 Full HD (1920 x 1080) Anti-Glare IPS Panel with 178 degree wide viewing angle</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>8GB / 16GB LPDDR4x</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>Intel® Iris® Xe Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>512GB / 1TB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.camera')</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.audio')</div>
                                <div>1W x 2 Stereo Speakers, Dual Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.keyboard')</div>
                                <div>Backlit Keyboard, Fingerprint Reader</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.wireless')</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.bluetooth')</div>
                                <div>Bluetooth 4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.ports')</div>
                                <div>
									USB3.0 x 2, USB 3.1 Type-C x 1 (PD 3.0 charging, Display out),<br/>
									3.5mm Headphone Jack, DC In,<br/>
									MicroSD card slot x 1, Full-sized HDMI x 1<div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>318(W) X 218(H) X 17.4(D)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>Starting from 1.3kg</div>
                            </li> 
									
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>Soft Lavender, Azure Blue, Star Silver, Anchor Grey, Infinite Black</div>
                            </li>
                          
                        </ul>
                    </div>
                </div>
					
					
					
					
					
					
<!-- Liber AMD SPEC -------------------------------------------------------------->
                <div class="tab-pane " id="spec-amd" role="tabpanel">
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
                                <div>AMD Ryzen™ 5 4500U</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.display')</div>
                                <div>14" 16:9 Full HD (1920 x 1080) Anti-Glare IPS Panel with 178 degree wide viewing angle</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.memory')</div>
                                <div>16GB LPDDR4x</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.graphics')</div>
                                <div>AMD Radeon™ Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.storage')</div>
                                <div>512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.camera')</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.audio')</div>
                                <div>1W x 2 Stereo Speakers, Dual Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.keyboard')</div>
                                <div>Backlit Keyboard, Fingerprint Reader</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.wireless')</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.bluetooth')</div>
                                <div>Bluetooth 4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.ports')</div>
                                <div>
									USB3.0 x 2, USB 3.0 Type-C x 1 (PD 3.0 charging, Display out),<br/>
									3.5mm Headphone Jack, DC In,<br/>
									MicroSD card slot x 1, Full-sized HDMI x 1<div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.dimension')</div>
                                <div>318(W) X 218(H) X 17.4(D)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.weight')</div>
                                <div>Starting from 1.3kg</div>
                            </li>
                             
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">@lang('prod_spec.colour')</div>
                                <div>Olive Green on Gold, Strawberry Almond on Gold, Strawberry Almond Milk on Gold, Berry Blue on Gold, Summer Pink on Silver, Ultimate yellow on grey, Taro Purple, Soft Lavender, Azure Blue, Star Silver, Anchor Grey, Infinite Black, Aqua Blue, Original Purple, Sand Beige</div>
                            </li>
                          
                        </ul>
                    </div>
                </div>
					
					
					
					
					
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    @lang('site.liber_v_amd_tnc')
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
