@extends('layouts.app')

@section('title')
	@lang('title.member')
@stop

@section('content')

	<main>

		<section class="member-panel top-nav-padding ls-0">
			<div class="container">
				<div class="d-flex align-items-center justify-content-start">
					<h2 class="py-4 pl-0 justify-content-start">@lang('site.member_center')</h2>
					<a class="ml-auto hidden-md-up h2" role="button" data-toggle="collapse" href="#account_menu" aria-expanded="true" aria-controls="account_menu">
						<i class="member-icon more-less fa fa-angle-up"></i>
                    </a>
					<!-- <a class="ml-auto hidden-md-up" role="button" data-toggle="collapse" href="#account_menu" aria-expanded="true" aria-controls="account_menu">
						<i class="more-less glyphicon glyphicon-plus"> s</i>
					</a> -->
				</div>

				<div class="row">
					<div class="col-12 col-md-3">
						<div class="collapse show" id="account_menu">
							<div class="card card-block border-0 px-0 pt-1">
								<div class="d-flex flex-column pb-3 mb-3">
									<div class="pb-1 mb-1 member-title with-line font-weight-bold">@lang('site.member_myaccount')</div>
									<a href="{{ route('member.profile') }}" class="py-1">@lang('site.member_myprofile')</a>
									<a href="{{ route('member.change_password') }}" class="py-1">@lang('site.member_change_pwd')</a>
								</div>
								<div class="d-flex flex-column pb-3 mb-3">
									<div class="py-1 mb-1 member-title with-line font-weight-bold">@lang('site.member_mysupport')</div>
									<a href="{{ route('member.product_list') }}" class="py-1">@lang('site.member_myproduct')</a>
									<a href="{{ route('member.product_reg') }} " class="py-1">@lang('site.profile_product_reg')</a>
									<a href="/contact_us" class="py-1">@lang('site.contactus')</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-9">

                        @yield('member-content')

					</div>
				</div>

			</div>
		</section>


	</main>

@endsection

@section('js')

<script>

	// console.log("XX");
	// function toggleIcon(e) {
	// 	$(e.target)
	// 		.prev('#account_menu')
	// 		.find(".more-less")
	// 		.toggleClass('fa fa-minus');
	// }
	//
	// $('#account_menu').on('hide.bs.collapse', toggleIcon);
	// $('#account_menu').on('show.bs.collapse', toggleIcon);
	// if ($(window).width() < 758) {
	   $('#account_menu').addClass('show');
	// }

	$('#account_menu').on('show.bs.collapse', function () {
		$('.more-less').removeClass("fa-plus");
		$('.more-less').addClass("fa-minus");
	});

	$('#account_menu').on('hide.bs.collapse', function () {
		$('.more-less').removeClass("fa-minus");
		$('.more-less').addClass("fa-plus");
	});
</script>

@endsection
