@extends('layouts.member')

@section('member-content')

    <div class="p-0 pb-sm-3">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="px-4">
            <div class="col-12 h3 mb-0 px-0 pb-2 font-weight-light">
        		@lang('site.product_reg_success_title')
        	</div>

            @if( $registration->extra_month > 0 )
            <div class="col-12 px-0 py-1">
                @lang('site.product_reg_success_content_1', ['month' => $registration->extra_month ])
            </div>
            @endif

            <div class="col-12 px-0 pt-1 pb-3">
                @lang('site.product_reg_success_content_2')
            </div>
            <div class="col-12 gary-required">
                <div class="col-12 pt-3 pb-1 px-2">
                    @lang('site.product_reg_success_content_3')
                    <span class="color-required font-weight-bold">
                        {{ $registration->model_description }}
                    </span>
                </div>
                <div class="col-12 pb-3 pt-1 px-2">
                    @lang('site.product_reg_success_content_4')<span class="color-required">{{ $registration->warranty_expire_date->format("Y-m-d") }}</span>
                </div>
            </div>
            <a href="{{ route('member.product_list') }}" class="btn btn-primary col-12 col-sm-3 my-3 py-3">
                @lang('site.confirm')
            </a>
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
        $('#purchase_date').datepicker();
    });
</script>

@endpush
