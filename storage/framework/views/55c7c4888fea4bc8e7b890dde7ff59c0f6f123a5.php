<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.LIBER_v_home'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



    <style>
        .product-liber-performance .badge-value {
            font-size: 2rem !important;
        }

        .product-liber-performance .badge-caption {
            font-size: 0.8rem;
        }

        .product-liber-performance .banner-info {
            background-image: none !important;
        }

        .banner-block {
            display: inline-table;
        }

        section.product-liber-v-computer .banner-info {
            max-width: 500px !important;
        }

        section.product-liber-v-screen .bc-computer-image.bc-computer-1 {
            top: 100px;
            width: 500px;
            left: 50px;
        }

        .product-liber-computer.product-liber-v-computer .banner-block {
            padding-top: 150px;
            padding-bottom: 00px;
        }

        .product-liber-wifi.product-liber-v-view .banner-block {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        section.product-liber-v-computer .banner-image img {
            top: -700px !important;
        }

        section.product-liber-v-color .bc-computer-1 {
            margin-left: -50px;
        }

        .h1 img {
            width: 80px;
            margin-left: -50px;
            margin-top: 0px;
            position: absolute;
        }

        section.product-liber-v-computer .h1 img {
            margin-left: -90px;
        }

        .h1 .d-sm-inline {
            max-width: 400px;
            display: inline-block !important;
        }

        .h1,
        h1 {
            font-size: 2.1rem;
        }

        .or_img:before {
            content: "";
            background-image: url(/images/liber-v/or.png);
            width: 30px;
            height: 70px;
            display: block;
            position: absolute;
            left: -25px;

        }

        .product-liber-v-color .remark {
            position: absolute;
            bottom: 15px;
        }

        .cpu_logo img {
            width: 150px;
        }


        .product-liber-v-color .banner-image .fade-img {
            left: -250px;
        }


        @media (min-width: 768px) {

            .product-liber-banner .responsive-block:before {
                padding-top: 37%;
            }
        }

        @media (max-width: 767px) {

            .product-liber-computer.product-liber-v-computer .banner-block {
                padding-top: 50px;
            }

            .banner-info {
                padding-left: 0px;
                padding-right: 0px;
            }

            .h1,
            h1 {
                font-size: 1.6rem;
            }

            .h3,
            h3 {

                font-size: 1.4rem;
            }

            .product-liber-v-screen .banner-block,
            .product-liber-v-performance .banner-block,
            section.product-liber-v-view .banner-info {
                padding-top: 0px;
            }


            section.product-liber-v-color .banner-block {
                padding: 100px 0px;
            }

            .h1 img {
                width: 60px;
                margin-top: 0px;
                margin-left: 0 !important;
            }

            .h1 .d-sm-inline {
                max-width: 100%;
                padding-left: 75px
            }

            section.product-liber-v-computer .banner-info .banner-para {
                font-size: 1.1rem;
            }

            .or_img:before {
                left: -15px;
            }

            .cpu_logo img {
                width: 100px;
            }


            section.product-liber-v-color .banner-image {
                left: 0;
                margin-left: 15px;
                margin-right: 15px;
                width: 100%;
            }

        }

    </style>


    <main class="top-nav-padding">

        <?php echo $__env->make('partials.liber-v-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="responsive-item">
                    <div class="banner-bg hidden-sm-down"
                        style="background-image: url('/images/liber-v/liber_v_new_collection_intel_en.jpg')"></div>
                    <div class="banner-bg hidden-md-up"
                        style="background-image: url('/images/liber-v/liber_v_new_collection_intel_en_mo.jpg')"></div>
                    <div class="banner-info">

                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-video ls-0" style="background-color:#ebf3f5;">
            <div class="container">
                <div class="space60"></div>

                <iframe
                    src="https://www.facebook.com/v2.3/plugins/video.php?allowfullscreen=true&amp;autoplay=true&amp;container_width=800&amp;href=https%3A%2F%2Fwww.facebook.com%2FAVITAHongKong%2Fvideos%2F1087666314977158%2F"
                    width="1100" height="620" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowtransparency="true" allowfullscreen="true"></iframe>

                <div class="space60"></div>
            </div>
        </section>
        
        <section class="product-liber-computer product-liber-v-computer">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="container">

                    <div class="banner-info">
                        <div class="hidden-md-up mb-4">
                            <img src="/images/liber-v/Liber_v_new_collection_color_en.png">
                        </div>
                        <div class="h1 mb-4 mb-sm-5">
                            <img src="/images/liber-v/icon_design_1.png">
                            <div class="d-sm-inline">
                                Epoch-making design．Postmodern aesthetics
                            </div>
                        </div>
                        <div class="h3 mb-4 mb-sm-5">Design proudly awarded: Red Dot Winner 2021</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">
                                The design of LIBER V New Collection is inspired by La Muralla Roja, a famous postmodern
                                architecture in Spain. Driven by the distinctive and shifting creative concept of postmodern
                                aesthetics, neat geometric lines are injected into the body of the laptop, creating a
                                ground-breaking geometric cubic style.
                            </span>
                            <span class="d-lg-block">
                                The ingenious design frees the web camera from the boundary of the screen, making the body
                                lighter and easier to open. It also provides a better shooting angle. The perfect
                                combination of beauty and functionality makes it the leader in laptop design.
                            </span>
                            <span class="row mb-4 mt-5 text-left">

                                <div class="col-xs-12 col-md-5  mb-4">
                                    <img src="/images/liber-v/reddot_en.png" style="max-width: 100%;">
                                </div>
                                <div class="col-xs-12 col-md-7">
                                    <div class="h4 mb-3" style="color: #d62a2c;">About Red Dot Design Award</div>
                                    <span class="d-lg-block">
                                        <small style="line-height: 1.5;">
                                            Every year, the Red Dot Award is awarded to the year’s best products from more
                                            than 18,000 entries. Whether aesthetically appealing, functional, smart or
                                            innovative, what the award-winning objects have in common is their outstanding
                                            design quality. <br />
                                            For more information, please visit <a href="https://www.red-dot.org/"
                                                target="_blank">www.red-dot.org</a>。
                                        </small>
                                    </span>
                                </div>

                            </span>
                        </div>
                    </div>


                    <div class="banner-image">
                        <img class="bc-computer-image bc-computer-1"
                            src="/images/liber-v/Liber_v_new_collection_color_en.png">
                    </div>

                </div>
            </div>
        </section>




        <section class="product-liber-performance product-liber-v-performance">
            <div class="banner-block">
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1"
                        src="/images/liber-v/AVITA_liber_v_new_collection_performance.jpg">
                    <img class="bc-computer-image fade-img" src="/images/liber-v/liber_v_new_collection_p02_en.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style=""
                                src="/images/liber-v/AVITA_liber_v_new_collection_performance.jpg">
                        </div>
                        <div class="h1 mb-4">
                            <img src="/images/liber-v/icon_cpu_1.png">
                            <div class="d-sm-inline">New Collection．Ultimate Upgrade</div>
                        </div>

                        <div class="mb-4 mb-sm-5 cpu_logo text-center">
                            <img src="/images/liber-v/icon_intel_cpu.png" style="margin-right: 10px;">
                            <img src="/images/liber-v/icon_amd_ryzen.PNG" style="margin-left: 10px;">
                        </div>



                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V New Collection is equipped with</span>
                            <span class="d-md-block">the latest 11th generation Intel® Core™ or </span>
                            <span class="d-md-block">AMD Ryzen™ 4000 series processors, it also </span>
                            <span class="d-md-block">provides up to 16GB of memory and has a super </span>
                            <span class="d-md-block">capacity thanks to the 1TB SSD solid-state drive.</span>
                            <span class="d-md-block">Together they deliver smooth and powerful performance</span>
                            <span class="d-md-block">with impeccable speed and intelligence.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">LIBER V New Collection is also equipped with</span>
                            <span class="d-md-block">Intel® Iris® Xe or AMD Radeon™ Graphics,</span>
                            <span class="d-md-block">breaking the boundaries of performance</span>
                            <span class="d-md-block">with stunning creation and imaging capabilities,</span>
                            <span class="d-md-block">while bringing top visual effects. Coupled with</span>
                            <span class="d-md-block">a full-size backlit keyboard and a large touchpad</span>
                            <span class="d-md-block">that has always been AVITA's unique style,</span>
                            <span class="d-md-block">the efficient configuration allows you to easily</span>
                            <span class="d-md-block">take control of your work, gaming and creation,</span>
                            <span class="d-md-block">and drive extraordinary performance.</span>

                        </div>


                        <div
                            class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">

                            <div class="data-card my-3 text-left col-xs-12  col-md-12">
                                <div class="badge-caption">Operating System</div>
                                <div class="badge-value">Windows 10 Home</div>
                            </div>

                            <div class="data-card my-3 text-left col-xs-12 col-md-6">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">Core i7</div>
                                <div class="badge-caption">11th Gen INTEL® CORE™ PROCESSOR</div>
                            </div>


                            <div class="data-card my-3 text-left col-xs-12 col-md-6">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">Ryzen 5 4500U</div>
                                <div class="badge-caption">AMD</div>
                            </div>



                            <div class="data-card my-3 text-left col-xs-12 col-md-6">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">16<span class="badge-caption">GB</span></div>
                                <div class="badge-caption">RAM</div>
                            </div>


                            <div class="data-card my-3 text-left col-xs-12 col-md-6">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">16<span class="badge-caption">GB</span></div>
                                <div class="badge-caption">RAM</div>
                            </div>


                            <div class="data-card my-3 text-left col-xs-12 col-md-6">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">1<span class="badge-caption">TB</span></div>
                                <div class="badge-caption">SSD</div>
                            </div>

                            <div class="data-card my-3 text-left col-xs-12 col-md-6">
                                <div class="badge-caption">Up to</div>
                                <div class="badge-value">512<span class="badge-caption">GB</span></div>
                                <div class="badge-caption">SSD</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-banner product-liber-v-banner">
            <div class="responsive-block">
                <div class="banner-bg hidden-sm-down"
                    style="background-image: url('/images/liber-v/liber_v_new_collection_amd_en.jpg')"></div>
                <div class="banner-bg hidden-md-up"
                    style="background-image: url('/images/liber-v/liber_v_new_collection_amd_en_mo.jpg')"></div>
            </div>
        </section>

        <section class="product-liber-wifi product-liber-v-view">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image fade-img-1" src="/images/liber-v/Features_hk_en.png">
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p03_new_collection.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="hidden-md-up mb-4">
                            <img src="/images/liber-v/Features.png">
                            <img src="/images/liber-v/p03_new_collection.png">
                        </div>
                        <div class="h1 mb-4 mb-sm-5"><img src="/images/liber-v/icon_vision_1.png">
                            <div class="d-sm-inline">Unbounded vision．Borderless bezel</div>
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">LIBER V New Collection uses a 3.7mm borderless ultra-thin frame,
                                installing a 13.3-inch body into a 14-inch screen, achieving a perfect 78.2% screen-to-body
                                ratio. </span>
                            <span class="d-lg-block">With a 178-degree ultra-wide viewing angle and a full HD 16:9 IPS
                                anti-glare LCD screen, the details on the screen are presented steadily and smoothly both
                                indoors or outdoors. The meticulous viewing experience allows you to devote yourself to
                                working, gaming and creating anytime, anywhere.</span>
                        </div>
                        <div class="banner-para ls-0">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance product-liber-v-color">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1"
                        src="/images/liber-v/AVITA_liber_v_new_collection_all.png">
                    <img class="bc-computer-image fade-img" src="/images/liber-v/p04_new_collection.png">
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p05_new_collection.png">

                    <div class="banner-para ls-0 remark">
                        <span class="d-md-block">
                            <small>
                                #Only applicable to specific colors and configurations. Only applicable to designated
                                merchants.
                            </small>
                        </span>
                    </div>

                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="hidden-md-up mb-4">
                            <img src="/images/liber-v/AVITA_liber_v_new_collection_all.png">
                        </div>
                        <div class="h1 mb-4 mb-sm-5"><img src="/images/liber-v/icon_color_1.png">
                            <div class="d-sm-inline">Endless colors．Unlimited matches</div>
                        </div>
                        <div class="banner-para ls-0 mb-5">
                            <span class="d-md-block">LIBER V New Collection offers more than 30 stylish</span>
                            <span class="d-md-block">color matching options. Whether you like to be</span>
                            <span class="d-md-block">eye-catching or low-key, LIBER V will help you find</span>
                            <span class="d-md-block">your exclusive color combination. You can also choose</span>
                            <span class="d-md-block">a personalized laser engraving service# to engrave</span>
                            <span class="d-md-block">a name or statement on the body, inject unique</span>
                            <span class="d-md-block">personality and charm, and create your own fashion style.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="product-liber-performance product-liber-v-screen" style="background-color: transparent;">
            <div class="banner-block">
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/p05_amd_new_collection.png">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="hidden-md-up mt-5 mb-4 text-center">
                            <img style="width:150px;" src="/images/liber-v/p05_amd_new_collection.png">

                        </div>
                        <div class="h1 mb-4 mb-sm-5"><img src="/images/liber-v/icon_readily_1.png">
                            <div class="d-sm-inline">Ultra-thin．Readily portable</div>
                        </div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V New Collection redefines compactness,</span>
                            <span class="d-md-block">using rigorous and precise processes to create</span>
                            <span class="d-md-block">a lightweight and strong body, with a weight</span>
                            <span class="d-md-block">as low as 1.3 kg, you can carry it around easily</span>
                            <span class="d-md-block">wherever you go. It also supports Windows Hello </span>
                            <span class="d-md-block">fingerprint recognition. The process is quick </span>
                            <span class="d-md-block">and easy, and greatly improves the security</span>
                            <span class="d-md-block">of personal data.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">LIBER V New Collection is more powerful and</span>
                            <span class="d-md-block">comprehensive, allowing you to complete your work</span>
                            <span class="d-md-block">faster and enjoy creating and entertainment more.</span>
                        </div>



                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                            <img class="bc-computer-image bc-computer-2" src="/images/liber-v/FaceUnlock.png">

                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.30</div>kg
                                </div>
                                <div class="badge-caption">14-inch Monitor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="product-liber-performance product-liber-v-io">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-1" src="/images/liber-v/AVITA_liber_v_new_collection_io.png"
                        style="max-width: 100%;">
                </div>
            </div>
        </section>

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel
                        Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon,
                        and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or
                        retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display
                        setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the
                        rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States
                        and/or other countries.</li>
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
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-liber.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/liber.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>