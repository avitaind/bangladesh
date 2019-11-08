<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.MAGUS_home'); ?>
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
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item" >
                    <div class="banner-bg hidden-sm-down" style="background-image: url('<?php echo app('translator')->getFromJson('magus.img-banner1'); ?>')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('<?php echo app('translator')->getFromJson('magus.img-banner2'); ?>')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            
                        </div>
                        <div class="an-scroll-wrap">
                        
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
   
        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"> </div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/sc2_img1.png">
                    <!--<img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">-->
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc2_img1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5"><?php echo app('translator')->getFromJson('magus.2in1'); ?></div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block"><?php echo app('translator')->getFromJson('magus.2in1-detail'); ?></span><span class="d-lg-block"></span>
                       <p class="d-lg-block"><img src="<?php echo app('translator')->getFromJson('magus.img-feature'); ?>"></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <section class="product-liber-performance ls-0"/>
            <div >
                <div class="hidden-xs-down"><img src="/images/magus/sc1_bg.png"></div>
                <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/magus/sc3_fimg2.png">
                        </div>
                <div class="container">
                    <div class="banner-info">

                        <div class="h2 banner-header mb-4 mb-sm-5"><?php echo app('translator')->getFromJson('magus.inside-out'); ?></div>
                        <div class="banner-para">
                            <span class="d-lg-block"><?php echo app('translator')->getFromJson('magus.inside-out-detail'); ?></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/sc7_fimg1.png">
                    <!--<img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">-->
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5"><?php echo app('translator')->getFromJson('magus.accommodate'); ?></div>

                        <div class="banner-para ls-0">
                            <p class="d-lg-block"><?php echo app('translator')->getFromJson('magus.accommodate-detail'); ?> </p>
                            <!--p class="d-lg-block"><img src="/images/magus/sideview.png"></p-->
                            <p class="d-lg-block"><img src="/images/magus/port_en.png"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section style="background-color:#f0f0f0">
            <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
            <iframe src="https://www.youtube.com/embed/ExOYYBDDOIw" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-pictur" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
           </div>
        </section>

        <!--section class="product-liber-port ls-0" style="background-color:#f0f0f0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/magus_pink2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5"><?php echo app('translator')->getFromJson('magus.promo'); ?></div>

                        <div class="banner-para ls-0">
                            <p class="d-lg-block"><?php echo app('translator')->getFromJson('magus.promo-detail'); ?> </p>
                            <p class="d-lg-block"><?php echo app('translator')->getFromJson('magus.promo-buy'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section-->


        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
				<?php echo app('translator')->getFromJson('magus.terms'); ?>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-magus.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/magus.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>