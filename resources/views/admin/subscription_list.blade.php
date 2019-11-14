@extends('adminlte::page')

@section('title')
    Subscriptions
@stop


@section('content')
    <div class="box box-solid">

        <div class="box-header with-border">
            <h3 class="box-title">
                Subscriptions
            </h3>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th>Email</th>
                        <th style="width: 150px;">Subscription Date</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($subscriptions as $subscription)
                        <tr>
                            <td>{{ $subscription->id }}</td>
                            <td>
                                {{ $subscription->email }}
                            </td>
                            <td>

                                {{ $subscription->created_at ? $subscription->created_at->format("Y-m-d") : null }}</td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $subscriptions->links() }}
        </div>

    </div>
@endsection