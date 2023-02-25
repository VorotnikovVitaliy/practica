

<?php $__env->startSection('content'); ?>
    <div class="catalog">
        <?php $__currentLoopData = $ludi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="catalog_item">
            <img src="<?php echo e($z -> img); ?>" alt="">
            <div class="catalog_item_name"><?php echo e($z -> FIO); ?></div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/pxabztui/fyifikv-m1/resources/views/spisokludi.blade.php ENDPATH**/ ?>