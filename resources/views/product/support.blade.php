@extends('layouts.app')

@php
	$item_count = $product->faqs->count();
@endphp

@section('title')
	@lang('title.support')
@stop

@section('content')

<main class="top-nav-padding">

	@include('partials.product-navbar')

	<section class="product-support-section">
		<div class="tab-product-support">
			<div class="container px-0 ls-0">
				<nav class="nav nav-justified justify-content-center">
					<a class="text-sm-center nav-link active" href="#support-drivers">@lang('site.product_support_1')</a>
					<a class="text-sm-center nav-link" href="#support-terms">@lang('site.product_support_2')</a>
					@if( $item_count > 0 )
						<a class="text-sm-center nav-link" href="#support-faq">@lang('site.product_support_3')</a>
					@endif
				</nav>
			</div>
		</div>

		<div class="content-product-support">

			<article class="product-support-article py-5 ls-0" id="support-drivers">
				<div class="container">
					<div class="text-center mx-auto px-0 my-0 my-md-5 col-12 col-sm-8 col-md-5">
						<div class="h3 font-weight-normal mb-3 mb-md-5">@lang('site.product_support_1')</div>

						<div class="my-3 my-md-5 py-1 px-3 px-sm-0 ls-0">
							<div class="mb-2 text-left">@lang('site.product_support_1_option_1')</div>

							<select id="product_type_field" class="custom-select rounded-0 w-100 mb-1" data-init-val="{{ $json_data['product_type'] }}">

							</select>

							<select id="product_series_field" class="custom-select rounded-0 w-100 mb-1" data-init-val="{{ $json_data['product_series'] }}" style="display: none;">

							</select>

							<select id="marketing_number_field" class="custom-select rounded-0 w-100 mb-1" data-init-val="{{ $json_data['marketing_number'] }}" style="display: none;">

							</select>

							<select id="product_number_field" class="custom-select rounded-0 w-100 mb-1" data-init-val="{{ $json_data['product_number'] }}" style="display: none;">

							</select>

							{{--<select id="product_model_field" name="product_model" class="custom-select rounded-0 w-100 mb-1" data-init-val="{{ $json_data['product_model'] }}" style="display: none;">--}}

							{{--</select>--}}

							{{--<p id="product_config_field" style="display: inline-block; max-width: 100%; height: calc(2.25rem + 2px); padding: .375rem 1.75rem .375rem .75rem; line-height: 1.25; color: #464a4c; vertical-align: middle;"></p>--}}
							<div class="mt-4">

								@if( $lang == 'th' )

									<p class="text-left">สินค้าประเภทแล็ปท็อปทั้งหมดของเอวิต้าไม่รองรับอัพเดทของ Windows 10 S</p>
									<p class="text-left">เอวิต้าไม่มีแผนที่จะผลิตแล็ปท็อปที่รองรับ Windows 10 S</p>

								@elseif ( $lang == 'id')

									<p class="text-left">Seluruh produk Laptop AVITA tidak tersedia pembaruan Windows 10 S.</p>
									<p class="text-left">AVITA tidak mempunyai rencana untuk mengeluarkan produk Laptop dengan Windows 10 S </p>

								@else

									<p class="text-left">The entirety of AVITA Laptop products do not support update of Windows 10 S.</p>
									<p class="text-left">AVITA does not have plans to release Windows 10 S based Laptop products.</p>
								@endif


							</div>

						</div>
					</div>

					<div id="product-driver-wrapper" class="d-flex flex-wrap text-left mx-auto px-0 my-0 my-md-5 col-12 col-md-10 ls-0">

					</div>
				</div>
			</article>

			<!-- Terms & Conditions -->
			<article class="product-support-article py-5 ls-0" id="support-terms">
				<div class="container pl-4 pr-2	">
					<div class="h3 font-weight-normal mb-5 text-center text-sm-left">@lang('site.product_support_2')</div>
					<div class="scroll-wrap">
						{!! $product->warrantyTerm->message or "<strong>Warranty Terms Go Here</strong>" !!}
					</div>
				</div>
			</article>


			<!-- FAQs -->
			@if( $item_count > 0 )

			<article class="product-support-article pt-5 ls-0" id="support-faq">
				<div class="container">
					<div class="h3 font-weight-normal mb-5 text-center text-sm-left">@lang('site.product_support_3')</div>

					<div class="support-knowledge">
						<div id="FAQcarouselIndicators" class="carousel slide" data-ride="carousel" data-wrap=false>



							<div class="carousel-inner" role="listbox">

									@foreach( $product->faqs as $index => $item )

										@if ( $index % 3 == 0 )
										<!-- .row_start -->
											@if($index == 0)
												<div class="carousel-item active">
											@else
												<div class="carousel-item">
											@endif
												<div class=" d-block d-md-flex col-12 px-0">

										@endif

										<!-- Q{{ $index }} -->

										@component('product.faq_block', ['index' => $index + 1])

											@slot('question')
												{{ $item->question  }}
											@endslot

											{!! $item->answer !!}
										@endcomponent

										@if( $index % 3 == 2  || $item_count == $index + 1  )
											{{-- End of Row / Last Item --}}
											</div>

										</div>
											<!-- /.row_end -->
										@endif

									@endforeach
								</div>

								<ol class="carousel-indicators faq-carousel-indicators">
									@for ($i = 0; $i < ceil($item_count / 3); $i++)
										@if($i == 0)
											<li data-target="#FAQcarouselIndicators" data-slide-to="{{ $i }}" class="text-center active">{{ $i + 1 }}</li>
										@else
											<li data-target="#FAQcarouselIndicators" data-slide-to="{{ $i }}" class="text-center">{{ $i + 1}}</li>
										@endif
									@endfor
								</ol>
							</div>
						</div>
					</div>
				</div>
			</article>

			@endif

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

@stop

@section('js')

	<script src="/js/support.js"></script>

	<script>


		var init_data = <?php echo json_encode($json_data); ?>;

		function reload_driver_list( ) {

		    var product_number = $("#product_number_field").val();

		    if (product_number != null) {
                var url = '/api/drivers?product_number=' + product_number;
                $("#product-driver-wrapper").load(url);
			}
		}

		$('#product_number_field').on('init change', function(e) {
            reload_driver_list( );
		}).trigger('init');



	</script>

@stop
