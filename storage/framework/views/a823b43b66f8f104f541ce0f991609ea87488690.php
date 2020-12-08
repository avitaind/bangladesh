<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.service'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
.shopsList {
    display: inline-table;
    width: 100%;
}
.shopsList .col-md-6:nth-child(2n+1) {
    clear: both;
}


.shopsList .col-md-6 {
    display: inline-grid;
    width: 50%;
    margin-bottom: 30px;
}

.shopsList .fa {
    font-size: 18px;
    weight:600;
}
</style>
<?php $__env->stopSection(); ?>

<?php 

 $page = 'support';

 ?>


<?php $__env->startSection('content'); ?>

    <main>

        <section class="top-nav-padding support-search-section">
            <div class="support-search-wrap pb-sm-5">

                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-6 text-center">
                        <form method="POST" action="<?php echo e(route('support')); ?>" class="">
                                <?php echo e(csrf_field()); ?>

                                <div class="support-search-mob-img">
                                    <img class="hidden-lg-up " src="/images/background/support-min.png"/>
                                </div>

                                
                                <div class="h1 section-title my-4 ls-0 font-weight-light"><?php echo app('translator')->getFromJson('site.support_title'); ?></div>

                                <div class="row no-gutters my-4 align-content-center justify-content-center col-12 col-sm-8 col-lg-12 mx-auto">
                                    <div class="col-12 col-md-12 col-md-12 ml-0 ml-md-4">
                                        <div class="form-group mb-2">

                                            <select id="product_type_field" name="type" class="form-control custom-select mb-3">

                                            </select>

                                            <select id="product_series_field" name="series" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            <select id="marketing_number_field" name="marketing_number" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            <select id="product_number_field" name="product_number" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            

                                            

                                            

                                            <button class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>

                                        </div>
                                    </div>

                                </div>
                            </form>                           
                            <br/>
                            <div class="mb-2"><b>Email:</b> bd_support@avita.com </div>
                            <div class="mb-2"><b>General Query:</b> +880-9638686868 </div>
                            <div class="mb-2"><b>Operation Time:</b> Sat-Thu: 08:00 -22:00<br/> Close on Fri & Public Holiday </div>
                           
                            </div>
                    </div>
                </div>
                <div class="hidden-md-down panel-image">
                    <img src="/images/background/support-min.png"/>
                </div>
            </div>

            <div class="support-center-wrap py-5">

             <div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension</div>
                 <div class="text-center purchase_steps">
              <a href="https://www.avita.global/warranty-extension" target="_blank" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">See More</a> 
                </div>
                
                <br/>

                <div class="container">
                <div class="alert alert-dismissible alert-info">
                Due to the global outbreak of the coronavirus (COVID-19), the service center will adjust the operation time or temporarily shut down for the time being. The adjustment will be subjected to local regulations and will be updated as soon as possible. We thank you for your patience and understanding.
                </div>
                   
                    
                    
                <div class="h2 text-center section-title mb-3 ls-0 font-weight-light"><?php echo app('translator')->getFromJson('site.support_title_2'); ?></div>
            
                <div class="shopsList">
                 <?php $__currentLoopData = $centers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $center): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                 <div class="col-md-6">
                 
                                <div>
                                    <i class="fa fa-home icon"></i>
                                    <?php echo e($center->name); ?>

                                </div>
                                <div>
                                    <i class="fa fa-map icon"></i>
                                    <?php echo e($center->address); ?>

                                </div>

                                 <div>
                                    <i class="fa fa-clock-o icon"></i>
                                    <?php echo e($center->opening_hour); ?>

                                </div>

                                <div>
                                    <i class="fa fa-phone icon"></i>
                                    <?php echo e($center->phone); ?>

                                </div>
                                
                            </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
               
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
        function initMap() {

            // Get all lat lng

            $('.google_map').each(function( index, item ) {

                var data = $(item).data();

                var location = new google.maps.LatLng( data.lat, data.lng );

                var map = new google.maps.Map(item, {
                    zoom: 18,
                    maxZoom: 18,
                    minZoom: 18,
                    disableDefaultUI: true,
                    center: location,
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                });

            });

        }
    </script>
 <script type="text/javascript" src="<?php echo e(asset('js/support.js')); ?>"></script>

<!---
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL2du53CNS9kfAQ1itk4kwF4aSBSjIgHE&callback=initMap"></script> 

--->

   



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>