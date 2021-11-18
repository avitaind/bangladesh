<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="{{ $news->thumbnail_url() }}" />
            </div>
            <figcaption class="d-flex event-caption {{ $news->status }} px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i>{{ $news->eventDateString() }}</div>
                <div class="event-status {{ $news->status }} ml-auto">@lang('site.news_status_'.$news->status)</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="{{ route('news.detail', $news->id) }}"></a>
    </div>
</div>