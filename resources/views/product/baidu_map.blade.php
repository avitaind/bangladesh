@extends('layouts.app')

@section('title')
    @lang('title.where_to_buy')
@stop

@section('css')
    <style>
        .shop-list {
            min-height: 400px;
            max-height: 565px;
            overflow-y: auto;
            cursor: default;
        }


        .shop-row .shop-name{
            font-size: 1.1rem;
            font-weight: 700;
        }

        .shop-row .shop-address, .shop-row .shop-phone {
            padding-right: 10px;
            padding-left: 30px;

            position: relative;
            font-size: 0.9em;
        }

        .shop-row .icon {

            position: absolute;
            left: 0px;
            top: 5px;

        }


        #bmap  {width: 100%;height: 100%;overflow: hidden;margin:0; }

    </style>
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.product-navbar')


        <section class="map-panel">

            <div class="container py-5 ls-0">
                <div class="row mx-2">

                    <div class="map-search col-12 col-lg-4 push-lg-8 p-4">
                        <div class="lead">@lang('site.shops_near_you')</div>

                        @if( $country == 'hk')
                            <p class="mt-4">
                                @lang('site.experience_liber125_here')
                            </p>
                        @endif

                        <div class="input-group py-4">
                            <input type="text" name="search" class="form-control search-result-input search-input" id="map-search" required="">
                            <div class="input-group-addon search-result-button">
                                <button type="button" class=""><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>

                        <div class="shop-list">

                            @foreach( $shops as $shop )

                                <div class="shop-row pb-4" data-latitude="{{ $shop->latitude }}" data-longitude="{{ $shop->longitude }}">

                                    <div class="shop-name pb-1">{{ $shop->name }}</div>
                                    <div class="shop-address">
                                        <i class="fa fa-map icon"></i>
                                        {{ $shop->address }}
                                    </div>
                                    <div class="shop-phone">
                                        <i class="fa fa-phone icon"></i>
                                        {{ $shop->phone }}
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 pull-lg-4 px-0">
                <div id="bmap">

                        </div> 

                       {{--<div class="map-wrap embed-responsive embed-responsive-1by1">--}}
                            {{--<div id="gmap-embed" class="embed-responsive-item">--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>@lang('site.product_support_footer_1')</li>
                    <li>@lang('site.product_support_footer_2')</li>
                    <li>@lang('site.product_support_footer_3')</li>
                    <li>@lang('site.product_support_footer_4')</li>
                </ul>

            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('js')

 <script type="text/javascript" src="//api.map.baidu.com/api?v=2.0&ak=gLcbtpgGiUbFbe4DE6I0Ewg57gOIMkU1"></script> 
 
 var infowindows = [];
        var markers = [];

        function initMap() {

            var map = new BMap.Map("bmap");          // 创建地图实例
            map.centerAndZoom(new BMap.Point(114.092258, 22.553438), 17);

            setMarkers( map ) ;

            initCardRowEvent(map);


        }

        function setMarkers( map ){


            $('.shop-row').each( function(index, element) {


                var shop_name = $(element).find('.shop-name').text();
                var lat = $(element).data('latitude');
                var lng = $(element).data('longitude');
                var address = $(element).find('.shop-address').text();
                var phone = $(element).find('.shop-phone').text();


                var marker = new BMap.Marker(new BMap.Point(lng, lat)); // 创建点
                markers.push(marker);
                map.addOverlay( marker);

                // // Add Click Event Listener
                // marker.addEventListener("click",function(e){
                //
                //     var content = "地址: " + address + "<br>" + "電話: " + phone;
                //
                //     var p = e.target;
                //     var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                //
                //
                //     var infoWindow = new BMap.InfoWindow(content, {
                //         width : 250,     // 信息窗口宽度
                //         height: 150,     // 信息窗口高度
                //         title : shop_name , // 信息窗口标题
                //         enableMessage:true//设置允许信息窗发送短息
                //     });  // 创建信息窗口对象
                //
                //     map.openInfoWindow(infoWindow,point); //开启信息窗口
                //
                // });


            });


        }

        function initCardRowEvent(map) {


            $('.shop-row').click(function( e ) {

                var lat = $(this).data('latitude');
                var lng = $(this).data('longitude');

                var point = new BMap.Point(lng, lat);

                map.setCenter(point);

                for (var i = 0; i < markers.length; i++) {
                    var marker = markers[i];

                    var mapLatLng = markers[i].getPosition( );



                    if( mapLatLng.equals(point)) {

                        // Create our event (with options)
                        var evt = new Event('click');
                        // If cancelled, don't dispatch our event
                        var canceled = !marker.dispatchEvent(evt);

                    }
                }


            })

        }

        function closeInfowindow(item, index){
            infowindows[index].close();
            markers[index].setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png')
        }

        function resize_shop_list_bar( ) {

            // Get avita support us google map.
            var map_height = $( ".map-wrap" ).height();

            $('.shop-list').css('height', map_height - $('.shop-list').offset() );

        }

        $(document).ready(function(){

            $("#map-search").change(function(e){

                var search_term = $(this).val();

                $('.shop-row').each(function(index, item) {

                    var search = new RegExp(search_term , "i");

                    var title = $(item).find(".shop-name").text();

                    if ( title.match(search) ) {
                        $(item).css("display", "");
                    } else {


                        $(item).css("display", "none");
                    }
                });

            });


            $( window ).resize(function() {

                resize_shop_list_bar();
            });

            resize_shop_list_bar();


            initMap();

        });

    </script>




@endsection
