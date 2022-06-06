<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.LIBER_v_home'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="top-nav-padding">

        <?php echo $__env->make('partials.liber-v-gold-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block1 responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v-gold/blue/AVITA_liber_v_gold_banner_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v-gold/blue/AVITA_liber_v_gold_banner_mob.png')"></div>
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
     
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block1 responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v-gold/black/AVITA_liber_v_gold_page2_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v-gold/black/AVITA_liber_v_gold_page2_mob.jpg')"></div>
              
                </div>
            </div>
        </section>
        
        
    
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block2 responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v-gold/blue/AVITA_liber_v_gold_page3_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v-gold/blue/AVITA_liber_v_gold_page3_mob.jpg')"></div>
           
                </div>
            </div>
        </section>
          
     
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block3 responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v-gold/black/AVITA_liber_v_gold_page4_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v-gold/black/AVITA_liber_v_gold_page4_mob.jpg')"></div>
        
                </div>
            </div>
        </section>
        
        
       
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block4 responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v-gold/blue/AVITA_liber_v_gold_page5_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v-gold/blue/AVITA_liber_v_gold_page5_mob.jpg')"></div>
                </div>
            </div>
        </section>   
        
      
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block5 responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v-gold/black/AVITA_liber_v_gold_page6_web.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v-gold/black/AVITA_liber_v_gold_page6_mob.jpg')"></div>
   
                </div>
            </div>
        </section>
     
 
        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                     <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                    <li>color options are subject to product availability.</li>

                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-liber.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/liber-v-gold.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>