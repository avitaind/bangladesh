@extends('adminlte::page')

@section('title')
    Service Centers
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $center->exists ? "Update" : "Add" }} Service Center
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::open(['model' => $center, 'store' => 'admin.service_centers.store', 'update' => 'admin.service_centers.update']) !!}

            <p class="help-block">
                Remarks: Latitude and Longitude can get from <a href="http://www.latlong.net/">http://www.latlong.net/</a>
            </p>

            <div class="row">
                <div class="col-md-4">
                    {!! BootForm::text('latitude', 'Latitude') !!}
                </div>
                <div class="col-md-4">
                    {!! BootForm::text('longitude', 'Longitude') !!}

                </div>
                <div class="col-md-4">
                    {!! BootForm::select('country', 'Country', [null => "" ] + config('constants.countries')) !!}
                </div>
            </div>


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

                            <h4>{{ $lang_name }}</h4>

                            <div class="row">
                                <div class="col-md-4">
                                    {!! BootForm::text('name:'.$lang, "Name (" . strtoupper($lang) . ")") !!}
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('address:'.$lang, 'Address ('. strtoupper($lang) . ')') !!}
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('opening_hour:'.$lang, 'Opening Hour ('. strtoupper($lang) . ')') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    {!! BootForm::text('phone:'.$lang, 'Phone ('. strtoupper($lang) .')') !!}
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('fax:'.$lang, 'Fax ('. strtoupper($lang) . ')') !!}
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('email:'.$lang, 'Email ('. strtoupper($lang) . ')') !!}
                                </div>
                            </div>

                        </div>

                    @endforeach
                </div>

            </div>


            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

    </div>

    @if( $center->exists )


        <div class="box box-solid box-danger">
            <div class="box-header">
                Delete Service Center
            </div>

            <div class="box-body">

                {!! BootForm::open(['class' => 'delete-form', 'method' => 'DELETE', 'url' => route('admin.service_centers.destroy', $center)]) !!}

                <p>
                    <strong>Delete this service center ?</strong>

                </p>

                <button type="submit" class="btn btn-danger">Delete</button>

                {!! BootForm::close() !!}
            </div>

        </div>

    @endif

@stop

@section('css')

@stop

@section('js')

    <script>

        $('.delete-form').on('submit', function(e){
            return (confirm('Confirm to delete ?, It cannot undo'));
        });

    </script>
@endsection