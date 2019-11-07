@extends('adminlte::page')

@section('title')
    Device Data
@stop

{{--@section('content_header')--}}
{{--<h1>Customers</h1>--}}
{{--@stop--}}

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Device Data download
            </h3>
        </div>

        <div class="box-body">


                {{ BootForm::open(['method' => 'post']) }}
                    {!! BootForm::select('device_type', 'Device', ['scale' => "Scale", 'sleepband' => 'Sleep Band']) !!}
                    {!! BootForm::submit('Export') !!}
                {{ BootForm::close() }}

        </div>

    </div>

@stop
