@extends('adminlte::page')

@section('title')
    Service Centers
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Service Providers
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.service-provider.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 70px;">#</th>
                        <th style="width: 100px;">Name</th>
                        <th>Access Key</th>
                        <th>Enable ?</th>
                        <th style="width: 70px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($providers as $provider)
                        <tr>
                            <td>{{ $provider->id }}</td>
                            <td>{{ $provider->name }}</td>
                            <td><code>{{ $provider->access_key }}</code></td>
                            <td>
                                @if ($provider->enabled)
                                    <i class="fa fa-check"></i>
                                @else
                                    <i class="fa fa-times"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.service-provider.edit', $provider) }}">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>
            </div>
        </div>

    </div>

@stop
