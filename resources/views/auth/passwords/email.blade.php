@extends('layouts.app')

@section('content')

    <main>

        <section class="login-panel top-nav-padding">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12">
                        <div class="main-panel py-3">
                            <h2 class="my-4 text-center ls-5">@lang('site.forget_pwd_title')</h2>
                            <div class="my-4 text-center">@lang('site.forget_pwd_content')</div>

                            {!! Form::open(['route' => 'password.email', 'method' => 'POST', 'class' => 'login-form col-12 col-xl-8 mx-auto my-4']) !!}

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                </div>
                                {!! $errors->first('email', '<div class="form-control-feedback">:message</div>') !!}
                            </div>

                            <div class="d-flex flex-wrap justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 ls-2">@lang('site.forget_pwd_reset')</button>
                            </div>
                            {!! Form::close() !!}


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
