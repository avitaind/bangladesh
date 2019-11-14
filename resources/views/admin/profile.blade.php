@extends('adminlte::page')

@section('title')
    My Profile
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">
            <h3 class="box-title">Change Password</h3>
        </div>
        <div class="box-body">

            {!! BootForm::open(['url' => 'admin/change_password', 'method' => 'post']) !!}
            {!! BootForm::password('password') !!}
            {!! BootForm::password('password_confirmation') !!}
            {!! BootForm::hidden('user_id', $user->id) !!}

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}




        </div>
    </div>

    <div class="row">

        <div class="col-md-9">



        </div>


    </div>

@stop

