@extends('adminlte::page')

@section('title', 'Products')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <div class="box box-solid">

                <div class="box-header with-border">

                    <h3 class="box-title">
                        {{ $product->exists ? "Update" : "Add" }} Products
                    </h3>

                </div>

                <div class="box-body">

                    {!! BootForm::horizontal(['model' => $product, 'store' => 'admin.products.store', 'update' => 'admin.products.update']) !!}

                    {!! BootForm::text('short_code') !!}
                    {!! BootForm::text('name_en') !!}
                    {!! BootForm::text('name_tc') !!}
                    {!! BootForm::text('name_sc') !!}
                    {!! BootForm::select('warranty_term_id', 'Warranty Terms', $warranty_terms) !!}
                    {!! BootForm::select('product_type_id', 'Product Type', $product_types) !!}
                    {!! BootForm::text('spec_view') !!}
                    {!! BootForm::text('feature_view') !!}
                    {!! BootForm::text('extra_warranty', 'Extra Warranty', null, ['help_text' => 'Number of months that customer can get via online registration']) !!}


                    {!! BootForm::select('country', 'Country', [ null => '' ] +  config('constants.countries')) !!}
                    {!! BootForm::submit() !!}

                    {!! BootForm::close() !!}

                </div>

            </div>

        </div>

        <div class="col-md-3">
            @if( $product->exists )

                <div class="box box-danger">

                    <div class="box-header">
                        Delete this product?
                    </div>

                    <div class="box-body">

                        <form id="product_delete_form" method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                        </form>
                    </div>

                </div>

            @endif
        </div>
    </div>




@stop


@section('js')

    <script>

        $("#product_delete_form").submit(function() {
            return confirm('Confirm to delete ?');
        });


    </script>

@stop