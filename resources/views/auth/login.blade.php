@extends('layouts.app')

@section('title')
    @lang('title.member')
@stop

@section('content')

    <main>

        <section class="login-panel top-nav-padding">
            <div class="container">
                <div class="row my-5">
                    <div class="col-6 hidden-sm-down">
                        <div class="sub-panel text-center py-5 px-3">
                            <h2 class="my-4 ls-5">@lang('site.login_reg_title')</h2>
                            <div class="py-0 sub-panel-content">
                                <div class="my-4 mx-2 ls-1">@lang('site.login_reg_content_1')</div>
                                <div class="my-4 mx-2 ls-1">@lang('site.login_reg_content_2')</div>
                                <div class="my-4 mx-2 ls-1">@lang('site.login_reg_content_3')</div>
                                <div class="my-4 mx-2 ls-1">@lang('site.login_reg_content_4')</div>
                            </div>

                            <a class="btn btn-register btn-opacity my-5 px-4 ls-2" href="https://avita.com/register?">@lang('site.login_reg_btn')</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="main-panel py-md-5">
                            <h2 class="my-4 text-center ls-5">@lang('site.login_title')</h2>
                            <div class="my-4 text-center">@lang('site.login_content')</div>

                            {!! Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'login-form col-12 col-xl-8 mx-auto my-4']) !!}

                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                </div>
                                {!! $errors->first('email', '<div class="form-control-feedback text-danger small ls-0">:message</div>') !!}
                            </div>

                            <div class="form-group mb-4">

                                <div class="input-group">
                                    <div class="input-group-addon overlay-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
                                    {!! Form::password('password', ['class' => 'form-control ']) !!}
                                </div>

                                {!! $errors->first('password', '<div class="form-control-feedback text-danger small ls-0">:message</div>') !!}

                            </div>

                                <div class="d-md-flex flex-column flex-md-row">
                                    <label class="col-12 col-md-6 custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-2 mb-md-0 justify-content-md-start">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description ls-1">@lang('site.login_rememberme')</span>
                                    </label>
                                    <button type="submit" class="col-12 col-md-2 btn btn-primary ml-auto px-5 ls-2 justify-content-md-end">@lang('site.login')</button>

                                </div>
                                <a class="col-12 btn btn-register text-center mt-2 px-4 ls-2 font-weight-light hidden-md-up" href="{{ route('register', ['source' => Request::get('source')]) }}">@lang('site.login_reg_btn')</a>

                            {!! Form::close() !!}

                            <div class="d-flex flex-column flex-sm-row mx-auto my-4 px-3 justify-content-start justify-content-sm-center small">
                                <a class="ls-1 py-1" href="{{ route('password.request') }}">@lang('site.login_forgot_pwd')</a>
                                {{--<a class="ls-1 py-1 ml-sm-5" href="">@lang('site.login_resend_email')</a>--}}
                            </div>

                            <div class="my-4 pt-4 extra-login">
                                <div class="text-center ls-1">@lang('site.login_other_way')</div>
                                <div class="row mt-3">
                                    <div class="col-6 text-right">
                                        <a class="login-facebook" href="https://avita.com/login/facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a class="login-googleplus" href="https://avita.com/login/google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
