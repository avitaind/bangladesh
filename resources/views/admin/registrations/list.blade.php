@extends('adminlte::page')

@section('title')
    Registrations
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Registrations
            </h3>

            <!-- <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.products.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div> -->

        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Serial Number</th>
                        <th>Purchase From</th>
                        <th>Purchase Date</th>
                        <th>Warranty Expiration Date</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($product_reg as $reg)
                        <tr>
                            <td>{{ $reg->id }}</td>
                            <td>{{ $reg->owner->name }}</td>
                            <td>{{ $reg->product->name() }}</td>
                            <td>{{ $reg->serial_num }}</td>
                            <td>{{ $reg->purchase_from }}</td>
                            <td>{{ $reg->purchase_date->format('Y-m-d') }}</td>
                            <td>{{ $reg->warranty_expire_date->format('Y-m-d') }}</td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $product_reg->links() }}
        </div>

    </div>

@stop
