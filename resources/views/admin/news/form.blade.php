@extends('adminlte::page')

@section('title', 'News')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $news->exists ? "Update" : "Add" }} News
            </h3>

        </div>

        {!! BootForm::open(['model' => $news, 'store' => 'admin.news.store', 'update' => 'admin.news.update', 'files' => true]) !!}

        <div class="box-body">

            @php
                $start_date = $news->start_date ? $news->start_date : \Carbon\Carbon::now();
                $start_date_string = $start_date->format("Y-m-d");
                $end_date_string = $news->end_date ? $news->end_date->format("Y-m-d") : null;
            @endphp

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @foreach( config('languages') as $lang => $lang_name )
                        <li class="{{ $loop->index == 0 ? "active" : "" }}"><a href="#tab_{{ $lang }}" data-toggle="tab">{{ $lang_name }}</a></li>
                    @endforeach
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    @foreach( config('languages') as $lang => $lang_name )

                        <div role="tabpanel"  id="tab_{{ $lang }}" class="tab-pane {{ $loop->index == 0 ? "active" : "" }}" style="padding: 10px;">
                            {!! BootForm::text('title:'.$lang, 'Title('.strtoupper($lang).')', null) !!}
                            {!! BootForm::textarea('content:'.$lang, 'Content('.strtoupper($lang).')', null, ['class' => 'text_editor']) !!}
                        </div>

                    @endforeach
                </div>

            </div>


            <div class="row">
                <div class="col-md-3">{!! BootForm::select('status', null, config('constants.news_status')) !!}</div>
                <div class="col-md-3">{!! BootForm::text('start_date', null, $start_date_string, ['class' => 'datepicker']) !!}</div>
                <div class="col-md-3">{!! BootForm::text('end_date', null, $end_date_string, ['class' => 'datepicker']) !!}</div>

                <div class="col-md-3">
                    {!! BootForm::checkbox('is_publish', 'Publish') !!}
                    {!! BootForm::checkbox('is_feature', 'Feature') !!}
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    {!! BootForm::file('thumbnail') !!}

                    @if( $url = $news->thumbnail_url() )
                        <img src="{{ $url }}" class="img-responsive">
                    @endif
                </div>
                <div class="col-md-4">
                    {!! BootForm::file('image') !!}

                    @if( $url = $news->image_url() )
                        <img src="{{ $url }}" class="img-responsive">
                    @endif
                </div>

                <div class="col-md-4">
                    {!! BootForm::checkboxes('country[]', 'Country', config('constants.countries'), $news->country_codes()) !!}
                </div>


            </div>



        </div>

        <div class="box-footer text-right">
            {!! BootForm::submit() !!}
        </div>

        {!! BootForm::close() !!}



        @include('admin.upload_image_form');

    </div>

@stop

@section('css')

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.standalone.css') }}">

@stop

@section('js')

    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('js/text_editor.config.js') }}"></script>

    <script>

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd"
        })
    </script>

@stop
