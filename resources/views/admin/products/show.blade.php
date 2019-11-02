@extends('adminlte::page')

@section('title')
    Product Details
@stop

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="box box-solid">

                <div class="box-header with-border">

                    <h3 class="box-title">
                        Product Details
                    </h3>

                    <div class="box-tools">
                        <a class="btn btn-box-tool" href="{{ route('admin.products.edit', $product) }}">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                    </div>

                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 150px;"></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th>Product ID</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $product->countryString() }}</td>
                            </tr>

                            <tr>
                                <th>Product Type</th>
                                <td>{{ $product->productType->name() }}</td>
                            </tr>
                            <tr>
                                <th>Product Short Code</th>
                                <td>{{ $product->short_code }}</td>
                            </tr>
                            <tr>
                                <th>Warranty Terms</th>
                                <td>{{ $product->warrantyTerm->title or "-" }}</td>
                            </tr>

                            <tr>
                                <th>Extra Warranty</th>
                                <td>{{ $product->extra_warranty or "0" }} month</td>
                            </tr>
                            <tr>
                                <th>Feature UI</th>
                                <td>{{ $product->feature_view }}</td>
                            </tr>
                            <tr>
                                <th>Spec UI</th>
                                <td>{{ $product->spec_view }}</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">
                        Product FAQs
                    </h3>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 70px;">#</th>
                                <th>Question</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach(  $product->faqs as $faq )
                                <tr>
                                    <th>{{ $faq->id }}</th>
                                    <td>{{ $faq->question }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{--<!-- Product Models -->--}}
    {{--<div class="box box-solid">--}}

        {{--<div class="box-header with-border">--}}
            {{--<h3 class="box-title">--}}
                {{--Product Models--}}
            {{--</h3>--}}
            {{--<div class="box-tools">--}}
                {{--<a class="btn btn-box-tool" href="{{ route('admin.products.models.create', $product) }}">--}}
                    {{--<i class="fa fa-plus"></i> Add--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="box-body">--}}
            {{--<div class="table-responsive">--}}
                {{--<table class="table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th style="width: 70px;">#</th>--}}
                        {{--<th>Name (EN)</th>--}}
                        {{--<th>Name (TC)</th>--}}
                        {{--<th>Name (SC)</th>--}}
                        {{--<th>Model Number</th>--}}
                        {{--<th style="width: 70px;"></th>--}}

                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}

                    {{--@foreach(  $product->productModels as $model )--}}
                    {{--<tr>--}}
                        {{--<th>{{ $model->id }}</th>--}}
                        {{--<td>{{ $model->name_en }}</td>--}}
                        {{--<td>{{ $model->name_tc }}</td>--}}
                        {{--<td>{{ $model->name_sc }}</td>--}}
                        {{--<td>{{ $model->model_number }}</td>--}}
                        {{--<td>--}}
                            {{--<a href="{{ route('admin.products.models.edit', [ $product, $model]) }}">--}}
                                {{--<i class="fa fa-fw fa-pencil"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Product FAQs -->


@stop
