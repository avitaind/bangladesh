@extends('layouts.prompt')

@section('content')

    <main>

        <section class="login-panel top-nav-padding">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12">
                        <div class="main-panel py-md-5">
                            <h2 class="my-4 text-center ls-5">Confirm Login</h2>
                            <div class="my-4 text-center">Allow mirror to access your member profile.</div>

                            {!! Form::open(['route' => ['integration.approval', 'mirror'], 'method' => 'POST', 'class' => 'login-form col-12 col-xl-8 mx-auto my-4']) !!}
                                <div class="text-center">
                                    <button type="submit" id="btn-accept" class="col-3 col-md-2 btn btn-primary m-auto px-5 ls-2" name="accept" value="accept">
                                        Accept
                                    </button>
                                    <button type="submit" id="btn-reject" class="col-3 col-md-2 btn btn-default m-auto px-5 ls-2" name="accept" value="reject">
                                        Reject
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@stop


@section('js')

@stop