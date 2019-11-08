<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('site.localization_title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main>

    <section class="localization-panel top-nav-padding ls-0">
        <div class="title section-title h3 text-center pt-5">
            <?php echo app('translator')->getFromJson('site.localization_title'); ?>
        </div>
        <div class="countries-list">
            <div class="country-box">
                <ul class="d-flex flex-column list-inline">
                    
                    <li class="list-inline-item p-1 mr-0">
                        <a href="<?php echo e(route('country.switch', ['country' =>'mu', 'lang' => 'en'])); ?>" class="pl-5 py-2">Mauritius</a>
                    </li>
					<li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/hk" class="pl-5 py-2">Hong Kong (English)</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/country/hk?lang=tc" class="pl-5 py-2">香港 (繁體中文)</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/country/sc?lang=tc" class="pl-5 py-2"><?php echo app('translator')->getFromJson('site.global_cn'); ?></a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/country/tw?lang=tc" class="pl-5 py-2"><?php echo app('translator')->getFromJson('site.global_tw'); ?></a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/sg" class="pl-5 py-2">Singapore</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/my" class="pl-5 py-2">Malaysia</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/th" class="pl-5 py-2">Thailand</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/country/th?lang=tc" class="pl-5 py-2">ประเทศไทย</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/vn" class="pl-5 py-2">Vietnam</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/id" class="pl-5 py-2">Indonesia</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/id" class="pl-5 py-2">Bahasa Indonesia</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita-india.com/" class="pl-5 py-2">India</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/ph" class="pl-5 py-2">Philippines</a>
                    </li>

                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita-americas.com/" class="pl-5 py-2">America</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>