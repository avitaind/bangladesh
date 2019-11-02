@extends('adminlte::page')

@section('title')
    Service Providers
@stop

@section('content')

    <div class="row">
        <div class="col-md-9">
            <div class="box box-solid">

                <div class="box-header with-border">

                    <h3 class="box-title">
                        {{ $provider->exists ? "Update" : "Add" }} Service Provider
                    </h3>

                </div>

                <div class="box-body">

                    {!! BootForm::open(['model' => $provider, 'store' => 'admin.service-provider.store', 'update' => 'admin.service-provider.update']) !!}
                    {!! BootForm::text('name') !!}
                    {!! BootForm::checkbox('enabled', 'Enable this service provider?', 1) !!}

                    @if( $provider->exists)
                        {!! BootForm::staticField('access_key', 'Access Key', $provider->access_key) !!}
                        {!! BootForm::checkbox('regenerate_access_key', 'Generate New Access Key') !!}
                    @endif

                    {!! BootForm::submit() !!}
                    {!! BootForm::close() !!}

                </div>

            </div>
        </div>

        <div class="col-md-3">
            @if( $provider->exists )

                <div class="box box-solid box-danger">
                    <div class="box-header">
                        Delete Service Provider
                    </div>

                    <div class="box-body">

                        {!! BootForm::open(['class' => 'delete-form', 'method' => 'DELETE', 'url' => route('admin.service-provider.destroy', $provider)]) !!}

                        <p>
                            <strong>Delete this service provider ?</strong>

                        </p>

                        <button type="submit" class="btn btn-danger">Delete</button>

                        {!! BootForm::close() !!}
                    </div>

                </div>

            @endif
        </div>
    </div>





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