@extends('adminlte::page')

@section('title')
    Shops
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Shops
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.shops.create') }}">
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
                        <th>Country</th>
                        <th>Shop Name</th>
                        <th>Address</th>
                        <th style="width: 70px;">Manage</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($shops as $shop)
                        <tr class="{{ $shop->enabled ? "active" : "" }}">
                            <td>{{ $shop->id }}</td>
                            <td>{{ $shop->countryString() }}</td>
                            <td><strong>{{ $shop->{'name:en'} }}</strong></td>
                            <td>{{ $shop->{'address:en'} }}</td>
                            <td>
                                <a class="btn btn-link btn-xs" href="{{ route('admin.shops.edit', $shop) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <button type="button" class="btn btn-link btn-xs btn-delete-shop" style="color: #FF0000;" data-shop-id="{{ $shop->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </button>



                            </td>
                        </tr>
                    @endforeach

                    </tbody>


                </table>

            </div>

            <form id="delete-shop-form" action="" method="POST" style="display: none;">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>

            <div class="text-center">
                {{ $shops->links() }}
            </div>
        </div>

    </div>

@stop

@section('js')

    <script>

        $(function(){


            $(".btn-delete-shop").click(function(e) {
                e.preventDefault();


                if (confirm('Confirm to delete? This cannot undo.') ) {
                    var shop_id = $(this).data('shopId');
                    console.log( shop_id );

                    var url = '/admin/shops/' + shop_id;

                    $("#delete-shop-form").prop('action', url).submit();
                }



            });

        });

    </script>

@stop
