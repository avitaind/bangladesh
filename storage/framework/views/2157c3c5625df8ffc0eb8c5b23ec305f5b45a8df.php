<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <section class="top-nav-padding terms-panel">
            <div class="container">
                <div class=" py-4">
                    <h2 class="mb-4 font-weight-light ls-0"><?php echo e($title); ?></h2>

                    <div class="terms-wrap ls-0">
                        <?php echo $content; ?>

                    </div>
                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>