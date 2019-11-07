@extends('layouts.app')

@section('content')

<main>

		<section class="other-event py-3 top-nav-padding">

      <div class="container top-nav-padding">
        <!-- <div class="row my-4 no-gutters">
          <div class="col-12 col-sm-8 col-md-8">
            <div class="input-group"> -->
              <!-- <form action="#">
                <input type="text" name="search" class="form-control search-result-input" required="">
                <div class="input-group-addon overlay-addon search-result-button">
                  <a class="disabled" href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
              </form> -->

				<div class="row my-4 no-gutters">
					<div class="col-12 col-sm-8 col-md-8">
            <form class="my-4">
  						<div class="input-group">
  							<input type="text" name="search" class="form-control search-result-input search-input" required="">
                <div class="input-group-addon search-result-button">
                  <button type="submit" class=""><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
  						</div>
            </form>
					</div>
				</div>

      </div>


			<div class="container">
				<div class="d-flex flex-wrap mb-3">
					<h3 class="h1 align-self-end ls-3 mb-0">@lang('site.search_result_title')</h3>

					<!-- <select class="col-12 col-md-auto event-filter custom-select ml-auto mt-3 mt-md-0">
						<option disabled hidden selected>選擇月份</option>
						<option>1月</option>
						<option>2月</option>
					</select> -->
				</div>

				<article class="event-item py-4 px-1">
					<div class="d-flex align-items-end mb-2">
						<div>
							<!-- <div class="event-date mb-1">2017.05.20</div> -->
							<h5 class="font-weight-bold mb-0">突破常規 「奇妙的交換人生體驗」短片熱播</h5>
						</div>
						<!-- <div class="ml-auto">
							<span class="btn btn-primary">進行中</span>
						</div> -->
					</div>
					<span>華碩為全球觀眾帶來耳目一新的 "The Incredible Life Swap"(「奇妙的交換人生體驗」)，首季即由美籍香港移民，著名YouTuber The Fung Brothers 遠赴對方所在地體驗別樣科技人生</span>
					<a class="event-more" href="">......</a>
				</article>

				<article class="event-item py-4 px-1">
					<div class="d-flex align-items-end mb-2">
						<div>
							<!-- <div class="event-date mb-1">2017.05.20</div> -->
							<h5 class="font-weight-bold mb-0">突破常規 「奇妙的交換人生體驗」短片熱播</h5>
						</div>
						<!-- <div class="ml-auto">
							<span class="btn btn-secondary">已結束</span>
						</div> -->
					</div>
					<span>華碩為全球觀眾帶來耳目一新的 "The Incredible Life Swap"(「奇妙的交換人生體驗」)，首季即由美籍香港移民，著名YouTuber The Fung Brothers 遠赴對方所在地體驗別樣科技人生</span>
					<a class="event-more" href="">......</a>
				</article>

				<article class="event-item py-4 px-1">
					<div class="d-flex align-items-end mb-2">
						<div>
							<!-- <div class="event-date mb-1">2017.05.20</div> -->
							<h5 class="font-weight-bold mb-0">突破常規 「奇妙的交換人生體驗」短片熱播</h5>
						</div>
						<!-- <div class="ml-auto">
							<span class="btn btn-secondary">已結束</span>
						</div> -->
					</div>
					<span>華碩為全球觀眾帶來耳目一新的 "The Incredible Life Swap"(「奇妙的交換人生體驗」)，首季即由美籍香港移民，著名YouTuber The Fung Brothers 遠赴對方所在地體驗別樣科技人生</span>
					<a class="event-more" href="">......</a>
				</article>

				<div class="text-center mt-3">
					<ul class="pagination pagination-sm d-inline-flex align-items-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i><span class="sr-only">Next</span></a>
						</li>
					</ul>
				</div>

			</div>
		</section>

		<div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

	</main>

@endsection
