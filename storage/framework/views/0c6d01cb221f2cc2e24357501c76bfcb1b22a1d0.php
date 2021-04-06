<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.blogs'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5"><?php echo app('translator')->getFromJson('site.blog_title'); ?></h3>
            <div class="row">
                <?php $__currentLoopData = $feature_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__env->startComponent('blog.feature_blog_block', ['blog' => $feature_blog ]); ?>
                    <?php echo $__env->renderComponent(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

   

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('#blog-month-option').change( function(event) {

            window.location = '<?php echo e($country); ?>/blog/'+ $(this).val() ;
        })
    </script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>

    <style>

        .status {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: #692c90;
        }


        .status.in_progress { background-color: #65318f; }
        .status.coming_soon { background-color: #a270c9; }
        .status.finished    { background-color: #a1a1a1; }

        .status-sm {

            display: inline;
            font-size: 0.8rem;
            padding: 3px 1rem;
        }

        .status-md {

            min-width: 160px;

        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>