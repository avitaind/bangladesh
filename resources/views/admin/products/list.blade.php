@extends('adminlte::page')

@section('title')
    Product Pages
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
                        <th style="width: 100px;">Country</th>
                        <th style="width: 100px;">Type</th>
                        <th style="width: 100px;">Short Code</th>
                        <th>Name</th>
                        <th style="width: 120px;">Extra Warranty</th>

                        <th style="width: 70px;"></th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($all_products as $short_code => $products)

                            <tr>
                                <th colspan="6">
                                    {{ strtoupper( $short_code ) }}
                                </th>
                            </tr>
                        @foreach($products as $product)
                            <tr>

                                <td>{{ $product->countryString() }}</td>
                                <td>{{ $product->productType->name() }}</td>
                                <td><code>{{ $product->short_code }}</code></td>

                                <td>{{ $product->name_en }}</td>
                                <td>{{ $product->extra_warranty }} months</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{ route('admin.products.show', $product) }}">
                                        Detail
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                    @endforeach
                    </tbody>


                </table>
            </div>

        </div>

    </div>

@stop
