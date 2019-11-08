<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.mouse'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<main class="top-nav-padding">

	<section class="">

        <img src="/images/accessories.png" class="w-100 ">

    </section>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>