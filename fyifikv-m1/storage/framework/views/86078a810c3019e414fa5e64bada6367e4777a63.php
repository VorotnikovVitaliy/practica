 <!-- Шапка сайта сделана в отдельном файле -->

<?php $__env->startSection('content'); ?>
    
    <div class="abouts">
        <div class="abouts_">
            <div class="abouts_logo">
                <div class="logo">
                    <h1>True Games</h1>
                </div>
            </div><!-- Вместо "Место для логотипа" написать <img src="/путь где находится ваш логотип"> -->
            <div class="abouts_deviz">Место для девиза</div>
        </div>
        <div class="abouts_slaider">
            <div class="abouts_slaider_text">Новинки Компании</div>
            <div class="abouts_slaider_">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop -> first): ?>
                                <div class="carousel-item active">
                                    <img src="<?php echo e($s -> img); ?>" class="d-block w-100" alt="<?php echo e($s -> id); ?>">
                                </div>
                            <?php else: ?> 
                                <div class="carousel-item">
                                    <img src="<?php echo e($s -> img); ?>" class="d-block w-100" alt="<?php echo e($s -> id); ?>">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/pxabztui/fyifikv-m1/resources/views/abouts.blade.php ENDPATH**/ ?>