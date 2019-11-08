@extends('layouts.member')

@section('member-content')

	<div class="d-sm-flex gary-required p-3 ls-0">
		<div class="d-flex justify-content-center">
			<img src="{{ asset('images/icon-member.jpg') }}" alt="">
		</div>
		<div class="px-0 px-sm-4">
			<ul class="list-unstyled mb-0">
				<li class="mt-2 mt-sm-0 mb-sm-2">
					@lang('site.form_nickname') {{ $user->name }}
				</li>
				<li class="mt-2 mt-sm-0 mb-sm-2">
					@lang('site.form_email') {{ $user->email }}
				</li>
			</ul>
		</div>


	</div>

	<div class="p-0">
		<div class="d-md-flex my-3">
			<!--div class="col col-auto px-0 mb-1">
				@if( $country == 'tw' )
					@lang('site.extra_warranty_statement', ['month' => 2])
				@else
					@lang('site.extra_warranty_statement', ['month' => 6])
				@endif
			</div-->
		</div>


		@if (session('status'))
			<div class="alert alert-success mt-3">
				{{ session('status') }}
			</div>
		@endif

		{!! Form::model( $user, ['url' => route('member.profile'), 'method' => 'POST', 'class' => 'ls-0']) !!}
		<div class="d-md-flex member-form-title my-3">
			<div class="col col-auto px-0 mb-1 form-title-required">@lang('site.form_required')</div>
			<!-- <div class="col col-auto ml-auto px-0 mb-3">@lang('site.form_required')</div> -->
		</div>
		<div class="form-group row">
			<label for="last_name" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_lastname')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) !!}
				{!! $errors->first('last_name', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="first_name" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_firstname')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name']) !!}
				{!! $errors->first('first_name', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="name" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_nickname')<span class="required">*</span></label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
				{!! $errors->first('name', '<div class="form-control-feedback text-danger small">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="gender_input">@lang('site.form_gender')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::select('gender', $genders, null, ['class' => 'custom-select form-control rounded-0', 'id' => 'gender']) !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="birthday" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_birthday')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('birthday', $user->present()->birthday, ['class' => 'form-control', 'id' => 'birthday', 'data-date-format' => 'yyyy-mm-dd']) !!}
				{!! $errors->first('birthday', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="country">@lang('site.form_city')<span class="required">*</span></label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::select('country', $countries, null, ['class' => 'custom-select form-control rounded-0', 'id' => 'country', 'required' => 'required']) !!}
				{!! $errors->first('country', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="address" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_address')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) !!}
				{!! $errors->first('address', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="phone" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_phone')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) !!}
				{!! $errors->first('phone', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="mobile" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('site.form_mobilephone')</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::text('mobile', null, ['class' => 'form-control', 'id' => 'mobile']) !!}
				{!! $errors->first('mobile', '<div class="form-control-feedback">:message</div>') !!}
			</div>
		</div>

		<button type="submit" class="btn btn-primary col-12 col-sm-3 my-5 py-3">@lang('site.save')</button>
		{!! Form::close() !!}
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
