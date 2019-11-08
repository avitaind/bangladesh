<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.MODUS_home'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<main class="top-nav-padding">

	<section class="">

        <img src="<?php echo e(asset('/images/modus/modus.jpg')); ?>" class="w-100 ">

    </section>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>