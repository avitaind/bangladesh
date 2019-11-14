@extends('adminlte::page')

@section('title')
    Service Centers
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Service Centers
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.service_centers.create') }}">
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
                        <th style="width: 100px;">Country</th>
                        <th>Name</th>
                        <th style="width: 70px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($centers as $center)
                        <tr>
                            <td>{{ $center->id }}</td>
                            <td>{{ $center->countryString() }}</td>
                            <td>{{ $center->{'name:en'} }}</td>
                            <td>
                                <a href="{{ route('admin.service_centers.edit', $center) }}">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $centers->links() }}
        </div>

    </div>

@stop
