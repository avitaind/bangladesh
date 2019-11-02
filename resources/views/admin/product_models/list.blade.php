@extends('adminlte::page')

@section('title')
    Products
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Products
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.products.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Model Number</th>
                        <th>Name</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($products as $product)

                        <tr>
                            <td>
                                <a href="{{ route('admin.products.show', $product) }}">
                                    {{ $product->id }}
                                </a>
                            </td>
                            <td>{{ $product->productType->name() }}</td>
                            <td>{{ $product->model_number }}</td>
                            <td>
                                <p>EN: {{ $product->name_en }}</p>
                                <p>TC: {{ $product->name_tc }}</p>
                            </td>
                            <td>
                                <a class="btn btn-box-tool" href="{{ route('admin.products.edit', $product) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $products->links() }}
        </div>

    </div>

@stop
