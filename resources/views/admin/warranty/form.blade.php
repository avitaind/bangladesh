@extends('adminlte::page')

@section('title')
    Warranty Terms
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $term->exists ? "Update" : "Add" }} Warranty Terms
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::horizontal(['model' => $term, 'store' => 'admin.warranties.store', 'update' => 'admin.warranties.update']) !!}

            {!! BootForm::text('title', null, null, ['help_text' => 'Short Description of the warranty terms (Internal only)']) !!}

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @foreach( config('languages') as $lang => $lang_name )
                        <li class="{{ $loop->index == 0 ? "active" : "" }}"><a href="#tab_{{ $lang }}" data-toggle="tab">{{ $lang_name }}</a></li>
                    @endforeach
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    @foreach( config('languages') as $lang => $lang_name )

                        <div role="tabpanel"  id="tab_{{ $lang }}" class="tab-pane {{ $loop->index == 0 ? "active" : "" }}" style="padding: 10px;">
                            {!! BootForm::textarea('message:'.$lang, 'Message('.strtoupper($lang).')', null, ['class' => 'text_editor']) !!}
                        </div>

                    @endforeach
                </div>

            </div>


            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

            @include('admin.upload_image_form');

        </div>

    </div>

@stop

@section('js')

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/text_editor.config.js') }}"></script>

@endsection
