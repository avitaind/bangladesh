@extends('adminlte::page')

@section('title')
    Customer
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $user->exists ? "Update" : "Add" }} Customers
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::horizontal(['model' => $user, 'store' => 'admin.customers.store', 'update' => 'admin.customers.update']) !!}

            {!! BootForm::text('first_name') !!}
            {!! BootForm::text('last_name') !!}
            {!! BootForm::text('name', 'Nick Name') !!}
            {!! BootForm::email('email') !!}
            {!! BootForm::password('password') !!}
            {!! BootForm::password('password_confirmation') !!}

            {!! BootForm::select('gender', null, config('constants.genders')) !!}
            {!! BootForm::text('birthday', null, $user->present()->birthday) !!}
            {!! BootForm::select('country', null, $countries) !!}
            {!! BootForm::text('address') !!}
            {!! BootForm::text('phone') !!}
            {!! BootForm::text('mobile') !!}

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

    </div>

@stop

