<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="{{ $article->thumbnail_url() }}" />
            </div>
            <figcaption class="d-flex event-caption {{ $article->status }} px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i>{{ $article->start_date->toDateString() }}</div>
              <!---  <div class="event-publication {{ $article->status }} ml-auto">@lang('site.news_status_'.$article->status)</div> --->
            </figcaption>
        </figure>
        <a class="overlay-link" href="{{ route('news.detail', $article->id) }}"></a>
    </div>
</div>
