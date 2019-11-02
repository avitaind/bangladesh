@extends('adminlte::page')

@section('title', 'News Details')

@section('content')

    <div class="box box-solid">

        <div class="box-header with-border">

            <h3 class="box-title">
                News Details
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.news.edit', $news) }}">
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
                        <th>News ID</th>
                        <td>{{ $news->id }}</td>
                    </tr>
                    <tr>
                        <th>News TC</th>
                        <td><h4>{{ $news->{'title:tc'} }}</h4>
                            {!! $news->{'content:tc'} !!}</td>
                    </tr>
                    <tr>
                        <th>News EN</th>
                        <td>
                            <h4>{{ $news->{'title:en'} }}</h4>
                            {!! $news->{'content:en'} !!}
                        </td>
                    </tr>
                    <tr>
                        <th>News SC</th>
                        <td>
                            <h4>{{ $news->{'title:sc'} }}</h4>
                            {!! $news->{'content:sc'} !!}
                        </td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ $news->statusString() }}</td>
                    </tr>
                    <tr>
                        <th>Start Date</th>
                        <td>{{ $news->start_date->format("Y-m-d") }}</td>
                    </tr>
                    <tr>
                        <th>End Date</th>
                        <td>
                            {{ $news->end_date ? $news->end_date->format("Y-m-d") : "" }}
                        </td>

                    </tr>
                    <tr>
                        <th>Is Publish?</th>
                        <td>
                            {!! $news->is_publish ? "<i class='fa fa-check'></i>" : "<i class='fa fa-times'></i>" !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Is Feature</th>
                        <td>
                            {!! $news->is_feature ? "<i class='fa fa-check'></i>" : "<i class='fa fa-times'></i>" !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Thumbnail</th>
                        <td>
                            @if( $url = $news->thumbnail_url() )
                            <img src="{{ $url }}" style="height: 200px;">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Banner</th>
                        <td>
                            @if( $url = $news->image_url() )
                                <img src="{{ $url }}" style="height: 200px;">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Country</th>
                        <td>

                            @php
                                $all_countries = config('constants.countries');
                                $news_countries = array_only( $all_countries, $news->country_codes());
                            @endphp

                            {{ implode( $news_countries, ', ') }}

                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




@stop
