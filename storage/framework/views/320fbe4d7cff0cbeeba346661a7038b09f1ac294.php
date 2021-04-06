<div class="col-12 col-md-6">
    <div class="event-item mb-5">
        <figure>
            <div class="image-wrap">
                <img style="width: 100%;" src="<?php echo e($blog->thumbnail_url()); ?>" />
            </div>
            <figcaption style="background-color: #aeaeae;" class="d-flex event-caption px-4 py-1">
                <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><?php echo e($blog->published_date); ?></div>
                <div class="event-publication ml-auto"><?php echo app('translator')->getFromJson('site.blog_published'); ?></div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="<?php echo e(route('blog.detail', $blog->id)); ?>"></a>
    </div>
</div>