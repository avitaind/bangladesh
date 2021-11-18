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
                @foreach ($feature_news as $news)
                       {{ $news->title }}
                @endforeach
            </div>
        </div>
    </section>

    
    <section class="other-event py-5" >
   
         <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.news_other_event')</h3>
             <div class="row">
       

            @foreach ($article as $item)

           <a class="list-item d-flex flex-column col-12 col-md-6 col-lg-4 mb-4" target="_blank" href="{{ $item->url }}">

             <div class="list-pic-wrapper">
                <div class="bg-item" style="background-image: url('{{ $item->image_path }}')"></div>
             </div>
            <div class="list-item-content p-3">
                <p class="list-item-title font-weight-bold">{{ $item->title }}</p>
                <p class="list-item-para">
                    {{ $item->caption }} 
                </p>
             </div>
            </a>
                @endforeach

            </div>
            <div class="text-center mt-3">
               
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

            window.location = '{{$country}}/news/'+ $(this).val() ;
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