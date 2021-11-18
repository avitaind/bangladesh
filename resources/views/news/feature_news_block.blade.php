

<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="http://avita-india.com/images/events/CES/IMG_5033.jpg" />
            </div>
            <figcaption class="d-flex event-caption {{ $news->status }} px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> JAN 8-11, 2019</div>
                <div class="event-status {{ $news->status }} ml-auto"> Consumer Electronics Show</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="{{ route('news.detail', $news->id) }}"></a>
    </div>
</div>


<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="http://avita-india.com/images/events/launch/avita india launch.jpg" />
            </div>
            <figcaption class="d-flex event-caption {{ $news->status }} px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> JAN 24, 2019</div>
                <div class="event-status {{ $news->status }} ml-auto"> Avita Liber | India Launch </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.avita-india.com/in/launch"></a>
    </div>
</div>
