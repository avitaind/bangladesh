@extends('layouts.app')

@section('title')
    @lang('title.whats_new')    
@stop

@section('content')
<main>


    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.article_title')</h3>
            <div class="row">
                @foreach ($feature_article as $feature_article)
                    @component('article.feature_article_block', ['article' => $feature_article ])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>
    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.publish_title')</h3>
            <div class="row">
                @foreach ($feature_publish as $feature_publish)
                    @component('article.feature_publish_block', ['publish' => $feature_publish ])
                    @endcomponent
                @endforeach
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
        $('#article-month-option').change( function(event) {

            window.location = '{{$country}}/article/'+ $(this).val() ;
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