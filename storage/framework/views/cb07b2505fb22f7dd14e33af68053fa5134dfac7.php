<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 
	$country = 'mu';
    $xml_lang = ($lang == 'en') ? 'en' : 'zh-hk';

    $keyword = metaKeywordByCountryAndLanguage( $country, $lang);

    $description = metaDescriptionByCountryAndLanguage( $country, $lang );


 ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo e($xml_lang); ?>" lang="<?php echo e($xml_lang); ?>">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <meta name="keyword" content="<?php echo e($keyword); ?>">
    <meta name="description" content="<?php echo e($description); ?>"/>

    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>">
    <meta property="og:description" content="<?php echo e($description); ?>">

    <meta property="og:image" content="<?php echo e(asset('images/fb-pic.jpg')); ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta property="fb:app_id" content="<?php echo e(env('FACEBOOK_CLIENT_ID')); ?>" />
    
    <meta name="google-site-verification" content="R1kH74ny5l80vabgxtYCz8X_wkcj4wW5Z-wT31L4Qrg" />

    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

    <?php echo $__env->yieldContent('meta'); ?>

    <title>AVITA | AVITA Bangladesh Official Website</title>

    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/global.css')); ?>"/>

    <script src="//use.typekit.net/wpk4iql.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133345635-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133345635-5');
</script>


    <!-- End  Global site tag (gtag.js) - Google Analytics  -->

    <!-- Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '149202439004103');
        fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel -->

    <!-- Facebook Pixel (noscript) -->
    <noscript><img height="1" width="1"
                   style="display:none" src="https://www.facebook.com/tr?id=149202439004103&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel (noscript) -->



    <?php echo $__env->yieldPushContent('css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="lang_<?php echo e($lang); ?> country_<?php echo e($country); ?>">

    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Content -->
<?php echo $__env->yieldContent('content'); ?>
<!-- ./Content -->


<?php if( View::exists('partials.footer_'.$country) ): ?>
    <?php echo $__env->make('partials.footer_'.$country, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>




<script defer="defer" type="text/javascript" type="text/javascript" src="<?php echo e(asset('js/vendor.js')); ?>"></script>
<script defer="defer" type="text/javascript" type="text/javascript" src="<?php echo e(asset("js/demo.js")); ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128035503-13"></script>

<script>

    window.dataLayer = window.dataLayer || [];

    function gtag(){dataLayer.push(arguments);}

    gtag('js', new Date());



    gtag('config', 'UA-128035503-13');

</script>
<!-- Facebook API -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '<?php echo e(env('FACEBOOK_CLIENT_ID')); ?>',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
        });

        // FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>


<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 830592061;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">


</script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCios_R1Rq6u6B_k63v_6L0br2iXR3GaFw&libraries=places&sensor=false"></script>

    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/830592061/?guid=ON&amp;script=0"/>
    </div>
</noscript>

<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
