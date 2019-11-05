@extends('layouts.app')

@php

    $genders = [ 'm' => \Lang::get('site.gender_m'), 'f' => \Lang::get('site.gender_f')];

@endphp

@section('title')
    @lang('title.member')
@stop

@section('content')

    <main>
        <section class="register-panel top-nav-padding">
            <div class="container">
                <h1 class="my-3 font-weight-light ls-0">
                    @lang('site.register_title')
                </h2>
                <div class="d-flex hidden-xs-down my-2">
                    <a href="/login/facebook" class="pr-2"><img src="{{ asset('images/btn_register_facebook.jpg') }}" alt="" class="pb-2"></a>
                    <a href="/login/google" class="pr-2"><img src="{{ asset('images/btn_register_google.jpg') }}" alt="" class="pb-2"></a>
                </div>
                <div class="d-flex hidden-sm-up my-2">
                    <div class="pr-2 text-right">
                        <a class="register-facebook" href="/login/facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    <div class="pr-2">
                        <a class="register-googleplus" href="/login/google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                {!! Form::open(['url' => route('register'), 'method' => 'POST', 'class' => 'pb-5 ls-0']) !!}
                <div class="register-form p-4">
                    <div class="d-xl-flex register-form-title mb-3">
                        <div class="col col-auto px-0 my-1 form-title-required">@lang('site.register_title_content_1')</div>
                        <div class="col col-auto ml-auto px-0 my-1 mb-3">@lang('site.form_required')</div>
                    </div>
                    <div class="form-group row @if($errors->has('name')) has-danger @endif ">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('site.form_nickname')<span class="required">*</span></label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'email_input', 'required']) !!}
                            {!! $errors->first('name', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group row @if($errors->has('email')) has-danger @endif ">
                        <label for="email_input" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('site.form_email')<span class="required">*</span></label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email_input', 'required']) !!}
                            {!! $errors->first('email', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group row @if($errors->has('password')) has-danger @endif">
                        <label for="password_input" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('site.form_pwd')<span class="required">*</span></label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5 text-muted">
                            {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => __('site.form_pwd_detail')]) !!}

                        </div>
                    </div>
                    <div class="form-group row @if($errors->has('password')) has-danger @endif">
                        <label for="password_input_2" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('site.form_repwd')<span class="required">*</span></label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5 ">
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'placeholder' => __('site.form_repwd_detail')]) !!}
                            {!! $errors->first('password', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="gender_input">@lang('site.form_gender')</label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            {!! Form::select('gender', $genders, null, ['class' => 'custom-select form-control rounded-0', 'id' => 'gender']) !!}
                        </div>
                    </div>

                    <div class="form-group row @if($errors->has('country')) has-danger @endif">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="country">@lang('site.form_city')<span class="required">*</span></label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            {!! Form::select('country', $countries, old('country', strtoupper($country)), ['class' => 'custom-select form-control rounded-0', 'id' => 'country', 'required' => 'required']) !!}
                            {!! $errors->first('country', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group row @if($errors->has('birthday')) has-danger @endif">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="birthday">@lang('site.form_birthday')</label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            {!! Form::text('birthday', null, ['class' => 'form-control', 'id' => 'birthday', 'data-date-format' => 'yyyy-mm-dd']) !!}
                            {!! $errors->first('birthday', '<div class="form-control-feedback text-danger small">:message</div>') !!}
                        </div>

                    </div>
                </div>

                <div class="form-group row pt-4 mb-0 @if($errors->has('tnc')) has-danger @endif">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('tnc', 'accept', null, ['class' => 'from-check-input']) !!}	@lang('site.register_checkbox_1')
                                {!! $errors->first('tnc', '<div class="form-control-feedback text-danger small"><small>:message</small></div>') !!}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('edm', 'accept', null, ['class' => 'from-check-input']) !!}	@lang('site.register_checkbox_2')
                            </label>
                        </div>
                    </div>
                </div>
                    {!! Form::hidden('source') !!}
                <button type="submit" class="btn btn-primary col-12 col-sm-3 p-3">@lang('site.register_btn')</button>
                {!! Form::close() !!}
            </div>
        </section>

    </main>

@endsection

@section('css')

<link type="text/css" rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css')}}" >

@endsection

@section('js')

<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" ></script>

<script type="text/javascript">
    $(function(){
        $('#birthday').datepicker();
    });
</script>

@endsection
