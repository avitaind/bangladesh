@extends('layouts.app')

@section('title')
    @lang('title.whats_new')
@stop

@section('content')
<main>

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.news_title')</h3>
            <div class="row">
                @foreach ($feature_news as $feature_news)
                    @component('news.feature_news_block', ['news' => $feature_news ])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>

    <section class="other-event py-5">
        <div class="container">
            <div class="d-flex flex-wrap mb-3">
                <h4 class="section-title font-weight-bold align-self-end ls-3 mb-0">@lang('site.news_other_event')</h4>

                <select id="news-month-option" class="col-12 col-md-auto event-filter custom-select ml-auto mt-3 mt-md-0">

                    @foreach( $months as $key => $month_name)
                        <option value="{{ $key }}" {{ $key == $selected_month ? "selected" : "" }} >{{ $month_name }}</option>
                    @endforeach

                </select>
            </div>

            @foreach ($news as $item)

                @component('news.news_block', ['news' => $item])
                @endcomponent

            @endforeach

            <div class="text-center mt-3">
                {{ $news->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>
@endsection

@section('js')
    <script>
        $('#news-month-option').change( function(event) {

            window.location = 'news/'+ $(this).val() ;
        })
    </script>
@endsection


@section('css')

    <style>

        .status {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: #692c90;
        }


        .status.in_progress { background-color: #65318f; }
        .status.coming_soon { background-color: #a270c9; }
        .status.finished    { background-color: #a1a1a1; }

        .status-sm {

            display: inline;
            font-size: 0.8rem;
            padding: 3px 1rem;
        }

        .status-md {

            min-width: 160px;

        }
    </style>
@endsection