@extends('adminlte::page')

@section('title', 'News')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                News
            </h3>

            <div class="box-tools">

                <a class="btn btn-box-tool" href="{{ route('admin.news.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>



            </div>

        </div>

        <div class="box-body">

            <div class="text-right" style="margin-bottom: 20px;">

                <span style="padding-right: 10px;">
                    <i class="fa fa-fw fa-paper-plane" style="color: #3b5998;"></i> = Publish
                </span>

                <i class="fa fa-fw fa-star" style="color: #ffa121;"></i> = Feature
            </div>




            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 40px;">#</th>
                        <th>Name</th>
                        <th style="width: 100px;">Status</th>
                        <th style="width: 100px;">Start Date</th>
                        <th style="width: 100px;">End Date</th>
                        <th style="width: 100px;">Manage</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($news as $new)

                        <tr>
                            <td>{{ $new->id }}</td>
                            <td>
                                {{ $new->title }}

                                <div class="pull-right">
                                    @if( $new->is_feature )
                                        <i class="fa fa-fw fa-star" style="color: #ffa121;"></i>
                                    @endif

                                    @if( $new->is_publish )
                                        <i class="fa fa-fw fa-paper-plane" style="color: #3b5998;"></i>
                                    @endif


                                </div>

                            </td>
                            <td>{{ $new->statusString() }}</td>
                            <td>{{ $new->startDateString() }}</td>
                            <td>{{ $new->endDateString() }}</td>
                            <td>

                                {{--<a class="btn btn-link btn-xs" href="{{ route('admin.news.show', $new) }}">--}}
                                    {{--<i class="fa fa-fw fa-info"></i>--}}
                                {{--</a>--}}
                                <a class="btn btn-link btn-xs" href="{{ route('admin.news.edit', $new) }}">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>

                                <button type="button" class="btn btn-link btn-xs btn-delete" style="color: #FF0000;" data-news-id="{{ $new->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </button>


                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $news->links() }}


            <form id="delete-news-form" action="" method="POST" style="display: none;">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>

        </div>

    </div>

@stop



@section('js')

    <script>

        $(function(){


            $(".btn-delete").click(function(e) {
                e.preventDefault();

                if (confirm('Confirm to delete? This cannot undo.') ) {
                    var news_id = $(this).data('newsId');

                    var url = '/admin/news/' + news_id;
                    $("#delete-news-form").prop('action', url).submit();
                }
            });

        });

    </script>

@stop