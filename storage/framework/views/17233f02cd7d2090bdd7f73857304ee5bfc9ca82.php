<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.MAGUS_spec'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="top-nav-padding">

<!-------------------Submenu------------->
        <div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">


                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'magus12-2in1-laptop')); ?>"><?php echo app('translator')->getFromJson('magus.name'); ?></a></li>


                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'magus-spec')); ?>"><?php echo app('translator')->getFromJson('site.productnav_spec'); ?></a></li>
                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.support', 'liber')); ?>"><?php echo app('translator')->getFromJson('site.productnav_support'); ?></a></li>
            </ul>
        </div>
    </div>
</div>
<!--------------->

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block"><?php echo app('translator')->getFromJson('magus.name'); ?></div></div>
                            <img class="hidden-sm-down" src="/images/magus/magus_grey.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #434343" class="active" data-image="/images/magus/magus_grey.png"></li>
                                <li style="background-color: #b699ca" data-image="/images/magus/magus_violet.png"></li>
                                <li style="background-color: #dbb2a7" data-image="/images/magus/magus_pink.png"></li>
                                <li style="background-color: #576f91" data-image="/images/magus/magus_blue.png"></li>
                            </ul>
                        </a>
                    </nav>
                </div>
            </div>



            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">


                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.os'); ?> </div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.cpu'); ?></div>
                                <div>Intel® Celeron® N3350</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.dis'); ?></div>
                                <div>12.2&quot; TFT,  (1920 x 1200) IPS Touch Screen</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.mem'); ?></div>
                                <div>4GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.graphic'); ?></div>
                                <div>Intel® HD Graphics 500</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.storage'); ?></div>
                                <div>64GB eMMC + 64GB microSD card</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.audio'); ?></div>
                                <div>1 x Speaker </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.key'); ?></div>
                                <div>English Travel Keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.wireless'); ?></div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.bluetooth'); ?></div>
                                <div>Bluetooth v4.0 </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.ports'); ?></div>
                                <div>1 x 3.5mm Headphone, 1 x USB 3.0, 1 x Mini-HDMI, 1 x microSD card Slot</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.dim'); ?></div>
                                <div>299mm (W) x 206mm (D) x 22mm (H)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.weight'); ?></div>
                                <div>Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.battery'); ?></div>
                                <div>Li-ion Battery </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.life'); ?></div>
                                <div>Up to 8 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.color'); ?></div>
                                <div><?php echo app('translator')->getFromJson('magus.color-detail'); ?></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('magus.access'); ?></div>
                                <div>AC Adapter and  Power cord, English Travel Keyboard, 64GB microSD card</div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
				<?php echo app('translator')->getFromJson('magus.terms'); ?>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>