@extends('layouts.member')

@section('member-content')

    <div class="p-0 pb-sm-3">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-12 h4 px-0">
            @lang('site.product_reg_title')
        </div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open( ['url' => route('member.product_reg'), 'method' => 'POST', 'class' => 'ls-0']) !!}
            <div class="d-md-flex member-form-title mb-3">
                <div class="col col-auto px-0 mb-1 form-title-required">@lang('site.form_required')</div>
            </div>


            <div class="form-group row">
                <label for="product_type" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('site.product_reg_form_type')<span class="required">*</span>
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select id="product_type" name="product_type" class="form-control custom-select" data-init-val="{{old('product_type')}}" required></select>
                </div>
            </div>


            <div class="form-group row" style="display: none;">
                <label for="product_series" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    Product Series: <span class="required">*</span> {{-- Product Series @lang('site.product_reg_form_name') --}}
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select id="product_series" name="product_series" class="form-control custom-select" data-init-val="{{old('product_series')}}" required></select>
                </div>
            </div>

            <div class="form-group row" style="display: none;">
                <label for="product_number" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    Product Number: <span class="required">*</span> {{-- Product Number --}}
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select id="product_number" name="product_number" class="form-control custom-select" data-init-val="{{old('product_number')}}" required></select>
                </div>
            </div>

            <div class="form-group row" style="display: none;">
                <label for="product_model" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    Product Model: <span class="required">*</span> {{-- Product Model --}}
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select id="product_model" name="product_model" class="form-control custom-select" data-init-val="{{old('product_model')}}" required></select>
                </div>
            </div>

            <div class="form-group row" style="display: none;">
                <label for="product_configuration" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    Product Configuration: {{-- Product Configuration --}}
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <p id="product_configuration" class="form-control-static"></p>
                </div>
            </div>


            <div class="form-group row">
                <label for="serial_num" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('site.product_reg_form_num')<span class="required">*</span>
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    {!! Form::text('serial_num', null, ['class' => 'form-control', 'id' => 'serial_num', 'required' => 'required']) !!}
                    {!! $errors->first('serial_num', '<div class="form-control-feedback text-danger small">:message</div>') !!}

                    <div class="py-3">
                        <img class="img-fluid" src="/images/sn_location.png">
                    </div>
                </div>
            </div>




            <div class="form-group row">
                <label for="purchase_from" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('site.product_reg_form_phr')<span class="required">*</span> {{-- Reseller --}}
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    {!! Form::text('purchase_from', null, ['class' => 'form-control', 'id' => 'purchase_from', 'required' => 'required']) !!}
                    {!! $errors->first('purchase_from', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                </div>
            </div>


            <div class="form-group row">
                <label for="purchase_date" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('site.product_reg_form_phr_date')<span class="required">*</span> {{-- Purchase Date --}}
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    {!! Form::text('purchase_date', null, ['class' => 'form-control', 'id' => 'purchase_date', 'data-date-format' => 'yyyy-mm-dd', 'required' => 'required']) !!}
                    {!! $errors->first('purchase_date', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                </div>
            </div>


            <button type="submit" class="btn btn-primary col-12 col-sm-3 my-3 py-3">
                @lang('site.save')
            </button>


        {!! Form::close() !!}
    </div>

@endsection

@section('css')

<link type="text/css" rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css')}}" >

@endsection

@push('js')

<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" ></script>
<script src="{{ asset('/js/product_warranty.js') }}"></script>

<script type="text/javascript">
    $(function(){
        $('#purchase_date').datepicker();
    });
</script>

@endpush
