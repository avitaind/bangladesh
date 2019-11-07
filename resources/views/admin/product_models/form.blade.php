@extends('adminlte::page')

@section('title', 'Products')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $model->exists ? "Update" : "Add" }} Products
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::horizontal(['model' => $model,
            'store' => ['admin.products.models.store', $product] ,
            'update' => ['admin.products.models.update', $product]]) !!}

            {!! BootForm::text('model_number') !!}
            {!! BootForm::text('name_en', 'Name (EN)') !!}
            {!! BootForm::text('name_tc', 'Name (TC)') !!}
            {!! BootForm::text('name_sc', 'Name (SC)') !!}

            {!! BootForm::submit() !!}
            {!! BootForm::close() !!}

        </div>

    </div>

@stop
