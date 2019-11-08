<?php $__env->startSection('content'); ?>

    <main>

        <section class="login-panel top-nav-padding">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12">
                        <div class="main-panel py-3">
                            <h2 class="my-4 text-center ls-5"><?php echo app('translator')->getFromJson('site.forget_pwd_title'); ?></h2>
                            <div class="my-4 text-center"><?php echo app('translator')->getFromJson('site.forget_pwd_content'); ?></div>

                            <?php echo Form::open(['route' => 'password.email', 'method' => 'POST', 'class' => 'login-form col-12 col-xl-8 mx-auto my-4']); ?>


                            <?php if(session('status')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                                </div>
                                <?php echo $errors->first('email', '<div class="form-control-feedback">:message</div>'); ?>

                            </div>

                            <div class="d-flex flex-wrap justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 ls-2"><?php echo app('translator')->getFromJson('site.forget_pwd_reset'); ?></button>
                            </div>
                            <?php echo Form::close(); ?>



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