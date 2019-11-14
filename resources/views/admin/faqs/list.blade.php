@extends('adminlte::page')

@section('title')
    FAQ
@stop

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                FAQs
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.faqs.create') }}">
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
                        <th>Question</th>
                        <th style="width: 70px;">&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($faqs as $faq)

                        <tr>
                            <td>
                                {{ $faq->id }}
                            </td>
                            <td>{{ $faq->question }}</td>
                            <td>
                                <a href="{{ route('admin.faqs.edit', $faq) }}"><i class="fa fa-fw fa-pencil"></i></a>
                                <a class="delete-link" href="{{ route('admin.faqs.destroy', $faq) }}"><i class="fa fa-fw fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>

            {{ $faqs->links() }}
        </div>
    </div>
@stop


@section('js')


@endsection