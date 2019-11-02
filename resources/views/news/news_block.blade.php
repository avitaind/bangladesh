<!-- news id = {{ $news->id }} -->
<article class="event-item py-3 px-1">
    <div class="d-flex align-items-end mb-4">
        <div>
            <div class="event-date mb-1">
                <span>{{ $news->eventDateString() }}</span>
                <span class="status status-sm hidden-md-up {{ $news->status }}">{{ $news->statusString() }} </span>
            </div>
            <h5 class="font-weight-bold mb-0"><a href="{{ route('news.detail', $news->id) }}">{{ $news->title }}</a></h5>
        </div>
        <div class="ml-auto hidden-sm-down">
            <span class="status status-md {{ $news->status }}">@lang('site.news_status_'.$news->status)</span>
        </div>
    </div>
    <div class="px-0">

        <div class="max-lines-3">
            {!! $news->introduction !!}
        </div>

        <div class="mt-5">
            <a class="event-more" href="{{ route('news.detail', $news->id) }}">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> More
            </a>
        </div>


    </div>
</article>