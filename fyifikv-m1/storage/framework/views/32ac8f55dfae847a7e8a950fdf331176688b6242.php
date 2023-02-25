 <!-- Шапка сайта сделана в отдельном файле -->

<?php $__env->startSection('content'); ?>
    
    <div class="abouts">
        <div class="abouts_">
            <div class="abouts_logo">Место для логотипа</div><!-- Вместо "Место для логотипа" написать <img src="/путь где находится ваш логотип"> -->
            <div class="abouts_deviz">Место для девиза</div>
        </div>
        
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ciymbfsm/vhyzcip-m1/resources/views/abouts.blade.php ENDPATH**/ ?>