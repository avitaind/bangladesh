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
                        <a href="https://avita-americas.com/" class="pl-5 py-2">America</a>
                    </li>
                   <!--- <li class="list-inline-item p-1 mr-0">
                        <a href="/" class="pl-5 py-2">Bangladesh</a>
                    </li> --->
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/cn" class="pl-5 py-2">China 中国</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/country/hk?lang=en" class="pl-5 py-2">Hong Kong</a> / <a href="https://www.avita.com/country/hk?lang=tc" class="py-2">香港</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita-india.com/" class="pl-5 py-2">India</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/country/id?lang=en" class="pl-5 py-2">Indonesia</a> / <a href="https://www.avita.com/country/id?lang=id" class="py-2">Bahasa Indonesia</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/my" class="pl-5 py-2">Malaysia</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita-mauritius.com/" class="pl-5 py-2">Mauritius</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/ph" class="pl-5 py-2">Philippines</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/sg" class="pl-5 py-2">Singapore</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/tw" class="pl-5 py-2">Taiwan 台灣</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/country/th?lang=en" class="pl-5 py-2">Thailand</a> / <a href="https://www.avita.com/country/th?lang=th" class="py-2">ประเทศไทย</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://avita.com/uk" class="pl-5 py-2">United Kingdom</a>
                    </li>
                    <li class="list-inline-item p-1 mr-0">
                        <a href="https://www.avita.com/vn" class="pl-5 py-2">Vietnam</a>
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