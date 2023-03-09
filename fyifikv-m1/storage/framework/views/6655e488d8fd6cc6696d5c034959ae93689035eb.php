<?php $__env->startSection('content'); ?>
    <div class="catalag">
        <div class="catalog_sortirovka">
            <div class="catalog_sortirovka_title">Каталог</div>
            <div class="catalog_sortirovka_sort">
                <p>Сортировка:</p>
                <div class="catalog_sortirovka_sort_">
                    По году производства:
                    <a href="<?php echo e(url('/catalog/god/asc')); ?>">По возрастанию</a>
                    <a href="<?php echo e(url('/catalog/god/desc')); ?>">По убыванию</a>
                </div>
                <div class="catalog_sortirovka_sort_">
                    По наименованию:
                    <a href="<?php echo e(url('/catalog/name/asc')); ?>">По возрастанию</a>
                    <a href="<?php echo e(url('/catalog/name/desc')); ?>">По убыванию</a>
                </div>
                <div class="catalog_sortirovka_sort_">
                    По цене:
                    <a href="<?php echo e(url('/catalog/price/asc')); ?>">По возрастанию</a>
                    <a href="<?php echo e(url('/catalog/price/desc')); ?>">По убыванию</a>
                </div>
            </div>
        </div>
        <div class="catalog">
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="catalog_item">
                <img src="<?php echo e($a -> img); ?>" alt="#">
                <div class="catalog_item_name"><?php echo e($a -> name); ?></div>
                <div class="catalog_item_price">
                <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/<?php echo e($a -> id); ?>"> Заказать</a></button>
                    <?php echo e($a -> price); ?>

                </div>
                <a class="catalog_item_a" href="/public/singlitem/<?php echo e($a -> id); ?>"></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/pxabztui/fyifikv-m1/resources/views/katalog.blade.php ENDPATH**/ ?>