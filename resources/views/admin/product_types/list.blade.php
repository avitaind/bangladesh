@extends('adminlte::page')

@section('title')
    Product_Types
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Product Types
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.product_types.create') }}">
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
                        <th>Name (EN)</th>
                        <th>Name (TC)</th>
                        <th>Name (SC)</th>
                        <th style="width: 100px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($product_types as $product_type)

                        <tr>
                            <td>
                                <a href="{{ route('admin.product_types.show', $product_type) }}">
                                    {{ $product_type->id }}
                                </a>
                            </td>
                            <td>{{ $product_type->name_en }}</td>
                            <td>{{ $product_type->name_tc }}</td>
                            <td>{{ $product_type->name_sc }}</td>
                            <td>
                                <a class="btn btn-box-tool" href="{{ route('admin.product_types.edit', $product_type) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $product_types->links() }}
        </div>

    </div>

@stop
