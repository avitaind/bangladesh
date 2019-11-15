<?php $__env->startSection('content'); ?>
    <style type="text/css">
        h3.center-text {
            text-align: center;
        }
    </style>
    <div class="container">
        <h3 class="center-text">Sweet Alert using Laravel - Learn Infinity</h3>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>