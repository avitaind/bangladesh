@extends('adminlte::page')

@section('title')
    Warranty Terms
@stop

@section('content_header')
    <h1>Warranty Terms</h1>
@stop

@section('content')


    <p>
        Terms Name: <strong>{{ $warranty->title }}</strong>
    </p>

    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">繁體中文</a></li>
            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">簡體中文</a></li>
            <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">English</a></li>
            <li class="pull-right">
                <a class="text-muted" href="{{ route('admin.warranties.edit', $warranty) }}">
                    <i class="fa fa-pencil"></i> Edit
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                {!! $warranty->{'message:tc'} !!}
            </div>
            <div class="tab-pane" id="tab_2">
                {!! $warranty->{'message:sc'} !!}
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                {!! $warranty->{'message:en'} !!}
            </div>
            <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
    </div>

@stop
