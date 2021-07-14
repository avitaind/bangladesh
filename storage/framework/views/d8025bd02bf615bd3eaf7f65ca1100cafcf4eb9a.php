<?php if(session('status')): ?>
    <div class="alert alert-success text-center">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>