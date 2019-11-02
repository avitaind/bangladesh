@extends('adminlte::page')

@section('title', 'Repair Terms & Conditions')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Repair Terms & Conditions
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::open(['model' => $repair_term, 'store' => 'admin.repair_tnc.store', 'update' => 'admin.repair_tnc.update']) !!}

            {!! BootForm::select('country', 'Country', config('constants.countries')) !!}

            {!! BootForm::select('locale', 'Locale', config('languages')) !!}

            {!! BootForm::text('title', "Title", null, ['help_text' => 'Internal Use']) !!}

            {!! BootForm::textarea('message', "維修條款及細則", null, ['class' => 'text_editor']) !!}

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

        @include('admin.upload_image_form');

    </div>

@stop

@section('js')

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/text_editor.config.js') }}"></script>

@endsection