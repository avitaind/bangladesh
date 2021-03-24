<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png"/>
        </a>

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
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['admiror'])); ?>"><?php echo app('translator')->getFromJson('site.admiror'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['essential'])); ?>"><?php echo app('translator')->getFromJson('site.essential_name'); ?></a>
                                        </li>
                                        <!--
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber12'])); ?>"><?php echo app('translator')->getFromJson('site.liber12'); ?></a>
                                        </li>
                                        --->
                                        
                                        <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber-new-generation'])); ?>"><?php echo app('translator')->getFromJson('site.liber'); ?></a>
                                            </li>
                               


                                       <li class="nav-item has-dropdown">
                                             <input id="liber_v_product" type="checkbox" hidden="">
                                                 <a class="nav-link px-md-4 py-2"><label for="liber_v_product"><?php echo app('translator')->getFromJson('site.liber-v'); ?></label></a>
                                                   <div class="dropdown">
                                                     <ul class="list-unstyled">
                                                         <li class="nav-item has-dropdown">
                                                              <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber-v'])); ?>"><?php echo app('translator')->getFromJson('site.liber_v_intel'); ?></a>
                                                         </li>
                                                     
                                                          <li class="nav-item has-dropdown">
                                                              <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber-v-amd'])); ?>"><?php echo app('translator')->getFromJson('site.liber_v_amd'); ?></a>
                                                         </li>
                                                        
                                                      </ul>
                                                  </div>
                                            </li>



                                       <li class="nav-item has-dropdown">
                                             <input id="pura_product" type="checkbox" hidden="">
                                                 <a class="nav-link px-md-4 py-2"><label for="pura_product"><?php echo app('translator')->getFromJson('site.pura'); ?></label></a>
                                                   <div class="dropdown">
                                                     <ul class="list-unstyled">
                                                         <li class="nav-item has-dropdown">
                                                              <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['pura'])); ?>"><?php echo app('translator')->getFromJson('site.pura_intel'); ?></a>
                                                         </li>
                                                        <li class="nav-item has-dropdown">
                                                              <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['pura-amd'])); ?>"><?php echo app('translator')->getFromJson('site.pura_amd'); ?></a>
                                                         </li>
                                                       
                                                      </ul>
                                                  </div>
                                            </li>

                                      <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', 'magus12-2in1-laptop')); ?>"><?php echo app('translator')->getFromJson('magus.name'); ?></a>
                                            </li>
                                      
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

                <?php if( $shop_count >= 0 ): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/where-to-buy"><?php echo app('translator')->getFromJson('site.header_where_to_buy'); ?></a>
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
