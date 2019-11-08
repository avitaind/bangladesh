<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="<?php echo e($news->thumbnail_url()); ?>" />
            </div>
            <figcaption class="d-flex event-caption <?php echo e($news->status); ?> px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><?php echo e($news->eventDateString()); ?></div>
                <div class="event-status <?php echo e($news->status); ?> ml-auto"><?php echo app('translator')->getFromJson('site.news_status_'.$news->status); ?></div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="<?php echo e(route('news.detail', $news->id)); ?>"></a>
    </div>
</div>