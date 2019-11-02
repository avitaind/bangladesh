@extends('layouts.member')

@section('member-content')

	<div class="col-12 h4 px-0 pb-2 with-line">
		@lang('site.product_list_title')
	</div>
	<div class="pb-3 px-0">

		<div id="product_list_accordion" role="tablist" aria-multiselectable="false">

			<div class="row pl-3">
				<div class="col-5 col-sm-7">@lang('site.product_list_th_1')</div>
				<div class="col-7 col-sm-5">@lang('site.product_header_expire_date')</div>
			</div>

		@foreach($products as $key => $registration)

			<div class="card rounded-0 border-0">
				<a data-toggle="collapse" data-parent="#product_list_accordion" href="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
					<div class="card-header border-0 px-0" role="tab" id="heading{{$key}}">
			      		<div class="mb-0">
							<div class="row pl-3">

								@if( $product_name = $registration->product_name )
									<div class="col-5 col-sm-7">{{ $product_name }}</div>
								@endif
								<div class="col-7 col-sm-5">{{ $registration->expiration_date }}</div>
							</div>
			      		</div>
			    	</div>
				</a>

			    <div id="collapse{{$key}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$key}}">
			    	<div class="card-block pl-3 pr-0 py-2 ">
						<div class="row py-1">
	  			  			<div class="col-5 col-sm-7">@lang('site.product_list_th_2')</div>
	  						<div class="col-7 col-sm-5">{{ $registration->serial_num }}</div>
						</div>
						<div class="row py-1">
							<div class="col-5 col-sm-7">@lang('site.product_list_th_3')</div>
							<div class="col-7 col-sm-5">{{ $registration->purchase_from }}</div>
						</div>
						<div class="row py-1">
							<div class="col-5 col-sm-7">@lang('site.product_list_th_4')</div>
							<div class="col-7 col-sm-5">{{ $registration->purchase_date }}</div>
						</div>
			      	</div>
			  	</div>
			</div>

		@endforeach

	</div>


	</div>

@endsection

@section('css')

<link type="text/css" rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css')}}" >

@endsection

@push('js')

<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" ></script>

<script type="text/javascript">
    $(function(){
        $('#birthday').datepicker();
    });
</script>

@endpush
