@extends('adminlte::page')

@section('title')
    Warranty Terms
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Warranty Terms
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.warranties.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 40px;">#</th>
                        <th>Name</th>
                        <th style="width: 100px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($terms as $term)

                        <tr>
                            <td>
                                {{ $term->id }}
                            </td>
                            <td>{{ $term->title }}</td>
                            <td>
                                {{--<a href="{{ route('admin.warranties.show', $term) }}">--}}
                                    {{--<i class="fa fa-fw fa-info"></i>--}}
                                {{--</a>--}}
                                <a href="{{ route('admin.warranties.edit', $term) }}">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $terms->links() }}
        </div>

    </div>

@stop
