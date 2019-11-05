@extends('adminlte::page')

@section('title', 'Shop')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $shop->exists ? "Update" : "Add" }} Shops
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::open(['model' => $shop, 'store' => 'admin.shops.store', 'update' => 'admin.shops.update']) !!}

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

                            <div class="row">
                                <div class="col-md-4">
                                    {!! BootForm::text('name:'.$lang, 'Shop Name - '.strtoupper($lang)) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! BootForm::text('address:'.$lang, 'Address - ' .strtoupper($lang)) !!}
                                </div>

                            </div>

                        </div>

                    @endforeach
                </div>


            <div class="row">
                <div class="col-md-2">{!! BootForm::text('latitude') !!}</div>
                <div class="col-md-2">{!! BootForm::text('longitude') !!}</div>
                <div class="col-md-2">{!! BootForm::text('phone') !!}</div>
                <div class="col-md-2">{!! BootForm::select('country', 'Country', [null => "" ] + config('constants.countries')) !!}</div>
                <div class="col-md-2">
                    <label for="longitude" class="control-label">Enable</label>
                    {!! BootForm::checkbox('enabled', 'Enable', '1') !!}
                </div>
            </div>

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

    </div>

@stop
