@extends('adminlte::page')

@section('title')
    Admins
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Admins
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.users.create') }}">
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
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 70px;"></th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach( $admins as $admin )

                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td><a href="{{ route('admin.users.edit', $admin) }}">Edit</a></td>
                    </tr>

                    @endforeach

                    </tbody>


                </table>
            </div>


        </div>

    </div>

@stop
