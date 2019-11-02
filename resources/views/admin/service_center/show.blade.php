@extends('adminlte::page')

@section('title')
    Service Centers
@stop

@section('content')

    @php

        $contents = [

            'Latitude' => $center->latitude,
            'Longitude' => $center->longitude,
            'Country' => $center->countryString(),
            '繁體中文',
            '名稱' => $center->{'name:tc'},
            '地址' => $center->{'address:tc'},
            '開放時間' => $center->{'opening_hour:tc'},
            '電話' => $center->{'phone:tc'},
            '傳真' => $center->{'fax:tc'},
            '電郵' => $center->{'email:tc'},

            'English',
            'Name' => $center->{'name:en'},
            'Address' => $center->{'address:en'},
            'Opening Hour' => $center->{'opening_hour:en'},
            'Phone' => $center->{'phone:en'},
            'Fax' => $center->{'fax:en'},
            'Email' => $center->{'email:en'},
        ];

    @endphp

    <div class="box box-solid">

        <div class="box-header with-border">
            <h3 class="box-title">
                Service Center ( #{{ $center->id }} )
            </h3>

            <div class="box-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.service_centers.edit', $center) }}">
                    Edit
                </a>
            </div>
        </div>

        <div class="box-body">

            <table class="table">
                <tbody>

                @foreach( $contents as $row_name => $row_value )

                    @if( is_integer($row_name) )

                        <tr>
                            <th colspan="2">{{ $row_value  }}</th>
                        </tr>

                    @else

                        <tr>
                            <th style="width: 150px;">{{ $row_name }}</th>
                            <td>{{ $row_value }}</td>
                        </tr>
                    @endif
                @endforeach

                </tbody>

            </table>

        </div>

    </div>


@stop

@section('css')

@stop

@section('js')
@endsection