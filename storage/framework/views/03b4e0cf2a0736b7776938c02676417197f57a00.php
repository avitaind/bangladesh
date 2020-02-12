<html>
<title></title>
<head></head>
<body>
<h2>Hi <?php echo e($name); ?>,</h2>
<img src="<?php echo e($message->embed(public_path() . '/images/cap-auto-reply.png')); ?>" alt="" />
</body>
</html>