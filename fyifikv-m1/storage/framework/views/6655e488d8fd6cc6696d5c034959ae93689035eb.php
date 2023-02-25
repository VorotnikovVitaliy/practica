<?php $__env->startSection('content'); ?>
    <div class="catalag">
        <div class="catalog_sortirovka"></div>
        <div class="catalog">
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="catalog_item">
                <img src="<?php echo e($a -> img); ?>" alt="#">
                <div class="catalog_item_name"><?php echo e($a -> name); ?></div>
                <div class="catalog_item_price"><?php echo e($a -> price); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/pxabztui/fyifikv-m1/resources/views/katalog.blade.php ENDPATH**/ ?>