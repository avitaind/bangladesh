<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.contact_us'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main>

        <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">
                <div class="container">
                    <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light"><?php echo app('translator')->getFromJson('site.contactus_contactus'); ?> </h1>

                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">
                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">General Sales Enquiry</h3>

                                <div class="support_tel">+91-9840024085</div>

                                <div class="mb-2"><b>Email:</b><br>
                                    INsales@nexstgo.com</div>

                                <div><b><?php echo app('translator')->getFromJson('site.contactus_operating'); ?></b><br>
                                    Monday to Friday: 9am - 9pm</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">



                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">
                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">Repair Service and Technical support</h3>

                                

                                <div class="mb-2"><b>Email:</b><br>
                                    Indiasupport@avita.com</div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>





    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>