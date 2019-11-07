@extends('adminlte::page')

@section('title', 'Repair Terms & Conditions')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                Repair Terms & Conditions
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.repair_tnc.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

        </div>

        <div class="box-body">

            <table class="table">
                <thead>
                <tr>
                    <th style="width: 100px;">Country</th>
                    <th style="width: 100px;">Locale</th>
                    <th>Title</th>
                    <th style="width: 100px;"></th>
                </tr>
                </thead>
                <tbody>

                @foreach( $repair_terms as $term )
                    <tr>
                        <td>{{ $term->countryString() }}</td>
                        <td>{{ $term->localeText() }}</td>
                        <td>{{ $term->title }}</td>
                        <td>
                            <a href="{{ route('admin.repair_tnc.edit', $term) }}">Update</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>

    </div>

@stop

@section('js')

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>

    <script>
        tinymce.init({
            selector:'.text_editor',
            branding: false,
            menubar: false,
            height: 300,
            plugins: "lists, link",
            toolbar: 'undo redo | styleselect | fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignnone | indent outdent | bullist numlist | link unlink'
        });
    </script>

@endsection