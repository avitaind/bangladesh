@extends('layouts.member')

@section('member-content')

	<div class="col-12 h4 px-0 mb-2">
		@lang('site.change_pwd_title')
	</div>
	<div class="col-12 with-line px-0 pb-2">
		@lang('site.change_pwd_title_2')
	</div>
	<div class="py-3 px-0">
		{!! Form::open( ['url' => route('member.change_password'), 'method' => 'POST', 'class' => 'ls-0']) !!}
		<div class="form-group row">
			<label for="orgin_password" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label">
				@lang('site.change_pwd_origin')
			</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::password('origin_password', ['class' => 'form-control', 'id' => 'origin_password']) !!}
				{!! $errors->first('origin_password', '<div class="form-control-feedback text-danger small">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="new_password" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label">
				@lang('site.change_pwd_new')
			</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::password('new_password', ['class' => 'form-control', 'id' => 'new_password']) !!}
				{!! $errors->first('new_password', '<div class="form-control-feedback text-danger small">:message</div>') !!}
			</div>
		</div>
		<div class="form-group row">
			<label for="new_password_confirmation" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label">
				@lang('site.change_pwd_renew')
			</label>
			<div class="col-12 col-md-8 col-lg-7 col-xl-6">
				{!! Form::password('new_password_confirmation', ['class' => 'form-control', 'id' => 'renew_password']) !!}
				{!! $errors->first('new_password_confirmation', '<div class="form-control-feedback text-danger small">:message</div>') !!}
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

<script type="text/javascript">
    $(function(){
        $('#birthday').datepicker();
    });
</script>

@endpush
