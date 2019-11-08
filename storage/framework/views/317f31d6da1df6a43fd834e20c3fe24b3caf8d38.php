<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.about_us'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main>

    <section class="aboutus-panel top-nav-padding">
        <div class="aboutus-info pb-3">
            <div class="container">
                <div class="row mt-0 mt-lg-5">
                    <div class="col-12 col-lg-6 ls-0 pt-lg-5">
                        <div class="aboutus-info-mob-img">
                            <img class="hidden-lg-up " src="images/background/aboutus-min.png"/>
                        </div>
                        <h1 class="section-title my-4 text-left font-weight-light"><?php echo app('translator')->getFromJson('site.aboutus_about'); ?></h1>

                        <?php $__currentLoopData = data_get(__('site'), 'aboutus_content', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo $content; ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            <div class="hidden-md-down aboutus-image">
                <img src="images/background/aboutus-min.png"/>
            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>