<div class="product-support-basic-info col-12">

    <div class="mb-2 text-left"><?php echo app('translator')->getFromJson('site.product_support_result', ['total' => $total ]); ?></div>

    <?php $__currentLoopData = $all_drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver_group => $drivers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="product-support-accordion" role="tablist" aria-multiselectable="true">

            <div class="card basic-info-item mb-1">
                <a data-toggle="collapse" data-parent="#product-support-accordion"
                   href="#support-collapse-<?php echo e(snake_case($driver_group)); ?>"
                   aria-expanded="false"
                   aria-controls="support-collapse-<?php echo e(snake_case($driver_group)); ?>"
                   class="collapsed card-header px-5" role="tab">
                    <h6 class="mb-0"><?php echo e($driver_group); ?></h6>
                </a>

                <div id="support-collapse-<?php echo e(snake_case($driver_group)); ?>" class="collapse" role="tabpanel" aria-labelledby="support-collapse-1">
                    <ul class="product-download-list list-unstyled mb-0 ls-0">
                        <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="py-1">
                            <div class="product-download-header font-weight-bold px-0 px-md-5 my-1">
                                <?php echo app('translator')->getFromJson('site.product_support_version'); ?> <?php echo e($driver['version']); ?>


                                <?php 
                                    $necessity = array_get( $driver, 'necessity' );

                                    switch ( $necessity )
                                    {
                                        case 'critical': echo " ( Critical Update )"; break;
                                        case 'recommended': echo "( Recommended Update )"; break;
                                        case 'optional': echo "( Optional Update)"; break;
                                    }

                                 ?>

                            </div>
                            <div class="row px-0 px-md-5 pt-1 my-1">
                                <div class="col-3"><?php echo app('translator')->getFromJson('site.product_support_desc'); ?></div>
                                <div class="col-9">
                                    <strong><?php echo e($driver['name']); ?></strong>
                                    <p><?php echo e($driver['description']); ?></p>
                                </div>
                            </div>
                            <div class="row px-0 px-md-5 pt-1 my-1">
                                <div class="col-3"><?php echo app('translator')->getFromJson('site.product_support_size'); ?></div>
                                <div class="col-5"><?php echo e(bytesToHuman($driver['file_size'])); ?></div>
                                <div class="col-4"><?php echo app('translator')->getFromJson('site.product_support_update'); ?>: <?php echo e($driver['release_date']); ?></div>
                            </div>
                            <div class="row px-0 px-md-5 pt-1 my-1">
                                <div class="col-3"><?php echo app('translator')->getFromJson('site.product_support_download'); ?></div>
                                <div class="col-9">
                                    <a class="btn btn-download" href="<?php echo e($driver['file_url']); ?>"><?php echo app('translator')->getFromJson('site.product_support_earth'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
            </div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



</div>
