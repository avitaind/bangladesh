<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png"/>
        </a>

        <?php if( $user = Auth::user( ) ): ?>
            <div class="navbar-user-toggle navbar-toggler-right hidden-md-up d-flex align-items-center justify-content-center lead text-muted">
                <a class="user-toggle" href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
            </div>
        <?php else: ?>

            <?php if( Request::is('login') || Request::is('register') ): ?>

                

            <?php else: ?>
                <div class="navbar-user-toggle navbar-toggler-right hidden-md-up d-flex align-items-center justify-content-center lead text-muted">
                    <a class="" href="<?php echo e(route('login' )); ?>"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                </div>
            <?php endif; ?>


        <?php endif; ?>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a class="" href="/"><img src="/images/logo.png"/></a>
                </li>
                <li class="nav-item has-dropdown">
                    <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link"><label for="header_product"><?php echo app('translator')->getFromJson('site.products'); ?></label></a>

                    <div class="dropdown">
                        <ul class="list-unstyled">

                            <li class="nav-item has-dropdown">
                                <input id="header_product_liber" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_liber" class="d-block mb-0"><?php echo app('translator')->getFromJson('site.laptops'); ?></label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <?php if(!$HAVE_LIBER_12): ?>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber'])); ?>">LIBER Series</a>
                                            </li>
                                        <?php else: ?>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber12'])); ?>">LIBER Series 12.5"</a>
                                            </li>

                                            

                                            <?php if($HAVE_LIBER_U): ?>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber-new-generation'])); ?>">LIBER New Generation</a>
                                            </li>

                                            <?php else: ?>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber'])); ?>">LIBER Series 13.3" & 14"</a>
                                            </li>

                                            <?php endif; ?>

                                        <?php endif; ?>
                                        <?php if($HAVE_MAGUS): ?>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', 'magus12-2in1-laptop')); ?>"><?php echo app('translator')->getFromJson('magus.name'); ?></a>
                                            </li>

                                        <?php endif; ?>


                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item has-dropdown">
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0"><?php echo app('translator')->getFromJson('site.smart_device'); ?></label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['imago'])); ?>"><?php echo app('translator')->getFromJson('site.imago_series'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['modus'])); ?>"><?php echo app('translator')->getFromJson('site.modus_scale'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('news')); ?>"><?php echo app('translator')->getFromJson('site.news'); ?></a>
                </li>

                <?php if( $shop_count > 0 ): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('product.map', ['liber'])); ?>"><?php echo app('translator')->getFromJson('site.header_where_to_buy'); ?></a>
                    </li>
                <?php endif; ?>


                <?php if( $storeURL ): ?>

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="<?php echo e($storeURL); ?>"><?php echo app('translator')->getFromJson('site.header_store'); ?></a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('support')); ?>"><?php echo app('translator')->getFromJson('site.service'); ?></a>
                </li>

                <li class="nav-item hidden-sm-down">
                <?php if( $user = Auth::user( ) ): ?>
                    <!-- <li class="nav-item hidden-sm-down"> -->
                        <a class="user-toggle fa fa-user-o" href="#"></a>
                    <!-- </li> -->
                <?php else: ?>
                    <!-- <li class="nav-item hidden-sm-down"> -->
                        <a class="" href="<?php echo e(route('login')); ?>"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                    <!-- </li> -->
                <?php endif; ?>
                <?php if( $user = Auth::user( ) ): ?>
                    <aside class="navbar-user-warp hidden-sm-down">
                        <div class="navbar-user navbar-md-user">
                            <div class="user-header pt-2 px-4">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="username"><?php echo e($user->name); ?></div>
                                    <div class="ml-auto">
                                        <a href="" onclick="event.preventDefault();">
                                            <span aria-hidden="true" class="close">&#10005;</span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-content px-3">
                                <div class="align-items-center px-2 pb-2">
                                    <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                                    <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4"><?php echo e($user->email); ?></a></div>
                                    <div class="col-12 px-0 mt-3 member-center"><a href="<?php echo e(route('member.profile')); ?>" class=" pl-4"><?php echo app('translator')->getFromJson('site.member_center'); ?></a></div>
                                </div>
                                <div class="justify-content-center">
                                    <a class="px-4" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3"><?php echo app('translator')->getFromJson('site.logout'); ?></button></i>
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </aside>

                <?php endif; ?>
                </li>

                <?php if( count( $supported_languages ) > 1 ): ?>

                    <?php $__currentLoopData = $supported_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selected_lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if( $selected_lang != $lang ): ?>
                        <li class="nav-item hidden-sm-down">

                            <a class="" href="<?php echo e(route('lang.switch', $selected_lang)); ?>">

                                <?php if( $selected_lang == 'tc' ): ?>
                                    中
                                <?php elseif( $selected_lang == 'en'): ?>
                                    ENG
                                <?php elseif( $selected_lang == 'th'): ?>
                                    ภาษาไทย
                                <?php elseif( $selected_lang == 'id'): ?>
                                    Bahasa Indonesia
                                <?php else: ?>
                                    <?php echo e($selected_lang); ?>

                                <?php endif; ?>

                            </a>
                        </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </ul>
        </div>

        <!-- <div id="overlay">

        </div> -->
        <?php if( $user = Auth::user( ) ): ?>
            <aside class="navbar-user-warp hidden-md-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username"><?php echo e($user->name); ?></div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                            <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4 "><?php echo e($user->email); ?></a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="<?php echo e(route('member.profile')); ?>" class=" pl-4"><?php echo app('translator')->getFromJson('site.member_center'); ?></a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3"><?php echo app('translator')->getFromJson('site.logout'); ?></button></i>
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>

                        </div>
                    </div>
                </div>
            </aside>

        <?php endif; ?>

    </div>
</nav>
<!-- ./Header -->
