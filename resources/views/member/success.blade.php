@extends('layouts.app')

@section('content')

<main>

		<section class="success-panel top-nav-padding">
			<div class="container">
					<div class="col-12 col-lg-8 px-0 mx-auto py-5">
						<h1 class="text-center section-title">@lang('site.success_title')</h1>
						<p class="ls-0 py-3">@lang('site.success_content_1')</p>

						<p class="lead success-title mb-2">@lang('site.success_subtitle')</p>
						<p class="ls-0">@lang('site.success_content_2')<span class="span-arrow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
						<ul class="list-unstyled ls-0">
						  <li class="list p-3">
						  	<p class="font-weight-bold ">@lang('site.success_solution_1')</p>
								<p class="">@lang('site.success_solution_2')</p>
								<p class="">@lang('site.success_solution_3')</p>
								<p class="">@lang('site.success_solution_4')</p>
						  </li>
						</ul>

						<p class="ls-0 py-4 mb-0">@lang('site.success_content_3')</p>

						<a href="/member/profile" class="btn btn-primary ls-0">@lang('site.success_btn')</a>
					</div>
			</div>
		</section>

	</main>

@endsection
