<div class="product-support-basic-info col-12">

    <div class="mb-2 text-left">@lang('site.product_support_result', ['total' => $total ])</div>

    @foreach( $all_drivers as $driver_group => $drivers )
        <div id="product-support-accordion" role="tablist" aria-multiselectable="true">

            <div class="card basic-info-item mb-1">
                <a data-toggle="collapse" data-parent="#product-support-accordion"
                   href="#support-collapse-{{ snake_case($driver_group) }}"
                   aria-expanded="false"
                   aria-controls="support-collapse-{{ snake_case($driver_group) }}"
                   class="collapsed card-header px-5" role="tab">
                    <h6 class="mb-0">{{ $driver_group }}</h6>
                </a>

                <div id="support-collapse-{{ snake_case($driver_group) }}" class="collapse" role="tabpanel" aria-labelledby="support-collapse-1">
                    <ul class="product-download-list list-unstyled mb-0 ls-0">
                        @foreach( $drivers as $driver )
                        <li class="py-1">
                            <div class="product-download-header font-weight-bold px-0 px-md-5 my-1">
                                @lang('site.product_support_version') {{ $driver['version'] }}

                                @php
                                    $necessity = array_get( $driver, 'necessity' );

                                    switch ( $necessity )
                                    {
                                        case 'critical': echo " ( Critical Update )"; break;
                                        case 'recommended': echo "( Recommended Update )"; break;
                                        case 'optional': echo "( Optional Update)"; break;
                                    }

                                @endphp

                            </div>
                            <div class="row px-0 px-md-5 pt-1 my-1">
                                <div class="col-3">@lang('site.product_support_desc')</div>
                                <div class="col-9">
                                    <strong>{{ $driver['name'] }}</strong>
                                    <p>{{ $driver['description'] }}</p>
                                </div>
                            </div>
                            <div class="row px-0 px-md-5 pt-1 my-1">
                                <div class="col-3">@lang('site.product_support_size')</div>
                                <div class="col-5">{{ bytesToHuman($driver['file_size']) }}</div>
                                <div class="col-4">@lang('site.product_support_update'): {{ $driver['release_date'] }}</div>
                            </div>
                            <div class="row px-0 px-md-5 pt-1 my-1">
                                <div class="col-3">@lang('site.product_support_download')</div>
                                <div class="col-9">
                                    <a class="btn btn-download" href="{{ $driver['file_url'] }}">@lang('site.product_support_earth')</a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    @endforeach



</div>
