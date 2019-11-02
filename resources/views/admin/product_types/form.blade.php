@extends('adminlte::page')

@section('title', 'Product_Types')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $product_type->exists ? "Update" : "Add" }} Product Types
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::horizontal(['model' => $product_type, 'store' => 'admin.product_types.store', 'update' => 'admin.product_types.update']) !!}

            {!! BootForm::text('name_en', 'Name(EN)') !!}
            {!! BootForm::text('name_tc', 'Name(TC)') !!}
            {!! BootForm::text('name_sc', 'Name(SC)') !!}
            {!! BootForm::text('name_th', 'Name(TH)') !!}
            {!! BootForm::text('name_vn', 'Name(VN)') !!}
            {!! BootForm::text('name_id', 'Name(ID)') !!}

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

    </div>

@stop
