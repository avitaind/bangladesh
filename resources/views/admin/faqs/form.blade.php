@extends('adminlte::page')

@section('title')
    FAQ
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                {{ $faq->exists ? "Update" : "Add" }} FAQ
            </h3>

        </div>

        <div class="box-body">

            {!! BootForm::open(['model' => $faq, 'store' => 'admin.faqs.store', 'update' => 'admin.faqs.update']) !!}


            {!! BootForm::select('products[]', 'Products', $products, null, [ 'multiple', 'help_text' => 'Products should display this FAQ.' ]) !!}


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

                            {!! BootForm::text('question:'.$lang, 'Question ('. strtoupper($lang) .')') !!}
                            {!! BootForm::textarea('answer:'.$lang, 'Answer ('. strtoupper($lang) .')', null, ['class' => 'answer_editor text_editor']) !!}

                        </div>

                    @endforeach
                </div>

            </div>






            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

            @include('admin.upload_image_form')

        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('js/text_editor.config.js') }}"></script>

@endsection