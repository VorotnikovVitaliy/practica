 <!-- Шапка сайта сделана в отдельном файле -->

<?php $__env->startSection('content'); ?>
    
    <div class="abouts">
        <div class="abouts_">
            <div class="abouts_logo">Место для логотипа</div><!-- Вместо "Место для логотипа" написать <img src="/путь где находится ваш логотип"> -->
            <div class="abouts_deviz">Место для девиза</div>
        </div>
        <div class="abouts_slaider">
            <div class="abouts_slaider_text">Новинки Компании</div>
            <div class="abouts_slaider_">
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/pxabztui/fyifikv-m1/resources/views/abouts.blade.php ENDPATH**/ ?>