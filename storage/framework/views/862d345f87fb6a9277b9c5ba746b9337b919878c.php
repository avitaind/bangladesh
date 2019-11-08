<?php $__env->startSection('title'); ?>
	<?php echo app('translator')->getFromJson('title.where_to_buy'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
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

	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main class="top-nav-padding">

	<?php echo $__env->make('partials.product-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


		<section class="map-panel">

			<div class="container py-5 ls-0">
				<div class="row mx-2">

					<div class="map-search col-12 col-lg-4 push-lg-8 p-4">
						<div class="lead"><?php echo app('translator')->getFromJson('site.shops_near_you'); ?></div>

						<?php if( $country == 'hk'): ?>
							<p class="mt-4">
								<?php echo app('translator')->getFromJson('site.experience_liber125_here'); ?>
							</p>
						<?php endif; ?>

						<div class="input-group py-4">
							<input type="text" name="search" class="form-control search-result-input search-input" id="map-search" required="">
							<div class="input-group-addon search-result-button">
								<button type="button" class=""><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>

						<div class="shop-list">

							<?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<div class="shop-row pb-4" data-latitude="<?php echo e($shop->latitude); ?>" data-longitude="<?php echo e($shop->longitude); ?>">

									<div class="shop-name pb-1"><?php echo e($shop->name); ?></div>
									<div class="shop-address">
										<i class="fa fa-map icon"></i>
										<?php echo e($shop->address); ?>

									</div>
									<div class="shop-phone">
										<i class="fa fa-phone icon"></i>
										<?php echo e($shop->phone); ?>

									</div>

								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>

					<div class="col-12 col-lg-8 pull-lg-4 px-0">
						<div class="map-wrap embed-responsive embed-responsive-1by1">
							<div id="gmap-embed" class="embed-responsive-item">

							</div>
						</div>
					</div>

				</div>
			</div>
            
            
            <div class="container py-5 ls-0">
                <div class="shopsList" style="display:none;">
        
                    <?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                        <div class="col-md-6" >
        
                            <div class="pb-1"><?php echo e($shop->name); ?></div>
                            <div class="">
                                <i class="fa fa-map icon"></i>
                                <?php echo e($shop->address); ?>

                            </div>
                            <div class="">
                                <i class="fa fa-phone icon"></i>
                                <?php echo e($shop->phone); ?>

                            </div>
        
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div><!--container-->

		</section>

		<section class="product-statement mt-4 mt-sm-0">
			<div class="container">
				<ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
					<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
					<li><?php echo app('translator')->getFromJson('site.product_support_footer_1'); ?></li>
					<li><?php echo app('translator')->getFromJson('site.product_support_footer_2'); ?></li>
					<li><?php echo app('translator')->getFromJson('site.product_support_footer_3'); ?></li>
					<li><?php echo app('translator')->getFromJson('site.product_support_footer_4'); ?></li>
				</ul>

			</div>
		</section>

		<div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

	</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

	<script>
		var infowindows = [];
		var markers = [];

		function initMap() {
			var uluru = {lat: 22.313144, lng: 114.219235};
			var map = new google.maps.Map(document.getElementById('gmap-embed'), {
				zoom: 17,
				center: uluru
			});

			setMarkers(map);

			initCardRowEvent(map);




//
//            // Try HTML5 geolocation.
//            if (navigator.geolocation) {
//                navigator.geolocation.getCurrentPosition(function(position) {
//                    var pos = {
//                        lat: position.coords.latitude,
//                        lng: position.coords.longitude
//                    };
//
////                    infoWindow.setPosition(pos);
////                    infoWindow.setContent('Location found.');
//                    map.setCenter(pos);
//                }, function() {
//
//                    console.log("The geolocation service failed");
//
//                });
//            } else {
//                console.log("Your browser doesn\'t support geolocation");
//            }

		}

		function setMarkers( map ){


            $('.shop-row').each( function(index, element) {


                var name = $(element).find('.shop-name').text();
                var lat = $(element).data('latitude');
                var lng = $(element).data('longitude');
                var address = $(element).find('.shop-address').text();
                var phone = $(element).find('.shop-phone').text();

				var marker = new google.maps.Marker({
					map: map, title: name , position:  new google.maps.LatLng(lat, lng)
				});
				marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
                markers.push(marker);

				map.setCenter(marker.getPosition());

				var content = "<b> " + name +  '</b><br>' + address + '<br>' + phone;

				var infowindow = new google.maps.InfoWindow;
				infowindow.setContent(content);
				infowindows.push(infowindow);


				google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
					return function() {
						if (infowindow) {
							infowindows.forEach(closeInfowindow);
				    }

						marker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png')
						infowindow.open(map,marker);
					};
				})(marker,content,infowindow));


			});


		}

		function initCardRowEvent(map) {


		    $('.shop-row').click(function( e ) {

                var lat = $(this).data('latitude');
                var lng = $(this).data('longitude');

                var shopLatLng = new google.maps.LatLng(lat, lng);


                for (var i = 0; i < markers.length; i++) {
                    var marker = markers[i];

                    var mapLatLng = markers[i].getPosition( );

                    if( mapLatLng.equals(shopLatLng)) {
                        new google.maps.event.trigger( marker, 'click' );
                        break;
					}
                }

                map.panTo( shopLatLng ) ;



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

		});


  </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAP_AK')); ?>&callback=initMap"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>