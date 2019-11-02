<!-- Footer -->
<footer class="footer">
    <div class="footer-social py-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-around justify-content-md-start">
                <span class="d-inline-block navbar-brand hidden-sm-down">
                    <img src="/images/logo.png"/>
                </span>


                @php
                    $sns_icons = [ 'facebook' => facebookLinkForCountry($country),
                      'twitter' => twitterLinkForCountry($country),
                      'instagram' => instagramLinkForCountry($country) ];
                @endphp

                @foreach( $sns_icons as $sns_name => $sns_url )

                    @if( $sns_url )
                        <a class="ml-0 {{ $loop->first ? 'ml-md-auto' : 'ml-md-3' }}" href="{{ $sns_url }}" target="_blank"><i class="fa fa-{{ $sns_name }}" aria-hidden="true"></i></a>
                    @endif

                @endforeach


            </div>
        </div>
    </div>

    <div class="footer-info py-0 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <a href="{{ route('products') }}" class="my-1">@lang('site.products')</a>
                            <a href="{{ route('news') }}" class="my-1">@lang('site.news')</a>
                            <a href="/aboutus" class="my-1">@lang('site.footer_aboutus')</a>
                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                            <a href="{{ route('product.map', ['liber']) }}" class="my-1">@lang('site.header_where_to_buy')</a>

                            @if( $storeURL )
                                <a class="my-1" target="_blank" href="{{ $storeURL }}">@lang('site.header_store')</a>
                            @endif

                            <a href="/contact_us" class="my-1">@lang('site.footer_contact')</a>
         
                        
                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">
                            <a href="{{ route('support') }}" class="my-1">@lang('site.productnav_support')</a>
                            <a href="{{ route('repair_tnc') }}" class="my-1">@lang('site.footer_repair_tnc')</a>
                            <a href="tnc" class="my-1">@lang('site.terms')</a>
                            <a href="tnc" class="my-1">@lang('site.privacy')</a>
                        </div>
                    </div>
                    <div class="d-flex hidden-sm-up">
                        <div class="d-flex flex-column mr-5 small-lsm-little">
                            <a href="{{ route('products') }}" class="my-1">@lang('site.products')</a>
                            <a href="{{ route('news') }}" class="my-1">@lang('site.news')</a>
                            <a href="/aboutus" class="my-1">@lang('site.footer_aboutus')</a>
                            <a href="{{ route('product.map', ['liber']) }}" class="my-1">@lang('site.header_where_to_buy')</a>

                            @if( $storeURL )
                                <a class="my-1" target="_blank" href="{{ $storeURL }}">@lang('site.header_store')</a>
                            @endif

                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">


                            <a href="/avita/contact_us" class="my-1">@lang('site.footer_contact')</a>

                            <a href="{{ route('support') }}" class="my-1">@lang('site.productnav_support')</a>

                            <a href="{{ route('repair_tnc') }}" class="my-1">@lang('site.footer_repair_tnc')</a>

                            <a href="http://avitain.ashplanmedia.com/tnc" class="my-1">@lang('site.terms')</a>
                            <a href="http://avitain.ashplanmedia.com/tnc" class="my-1">@lang('site.privacy')</a>

                        </div>
                    </div>
                </div>
                <!---
                
                --->
                
                   <div class="col-12 col-md-3 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <strong>Available On</strong>
                            <a href="https://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=avita" class="my-1">Amazon</a>
                            <a href="#" class="my-1">Flipkart</a>
                            <a href="https://www.tatacliq.com/search/?searchCategory=all&text=avita" class="my-1">Tata Cliq</a>
                            <a href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2" class="my-1">Paytm Mall</a>
                        </div>
                        
            
                    </div>
            
                </div>
                <!----
                
                ---->
                <div class="col-12 col-md-4 pb-3 py-md-0 text-md-right">
                    <div class="d-flex flex-wrap h-100 align-content-between">
                        <div class="col-12 info-lang w-100 px-0 hidden-sm-down">
                            <a class="col-6 px-0" href="http://avitain.ashplanmedia.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class="">INDIA</span></a>
                        </div>



                        <div class="info-copyright w-100"><a target="_blank" href="http://www.nexstgo.com">© Nexstgo Company Ltd.</a>  All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->
