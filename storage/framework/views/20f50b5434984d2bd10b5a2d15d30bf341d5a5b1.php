<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Homepage'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <section class="promo-banner mt-1">
        <?php if(Session::has('msg')): ?>
            <?php echo e(Session::get('msg')); ?>

        <?php endif; ?>
       <h1>Hello</h1>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>