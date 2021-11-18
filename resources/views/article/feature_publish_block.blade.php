<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure style="background-color:#A1A1A1;">
            <div class="image-wrap">
                <img style="width: 100%;" src="{{ $publish->image_path }}" />
            </div>
            <figcaption class="d-flex event-caption px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i>{{ $publish->published_date }}</div>
                <div class="event-publication ml-auto">{{ $publish->publication }}</div>
            </figcaption>
        </figure>
        <a class="overlay-link" target="_blank" href="{{ $publish->url }}"></a>
    </div>
</div>