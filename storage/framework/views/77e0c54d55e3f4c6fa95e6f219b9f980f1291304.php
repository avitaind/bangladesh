<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="<?php echo e($article->thumbnail_url()); ?>" />
            </div>
            <figcaption class="d-flex event-caption <?php echo e($article->status); ?> px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><?php echo e($article->start_date->toDateString()); ?></div>
                
                <div class="event-publication <?php echo e($article->status); ?> ml-auto"><?php echo app('translator')->getFromJson($article->status); ?></div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="<?php echo e(route('news.detail', $article->id)); ?>"></a>
    </div>
</div>