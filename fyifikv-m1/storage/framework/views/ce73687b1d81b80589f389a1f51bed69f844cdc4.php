
     <!-- Шапка сайта сделана в отдельном файле -->
    <?php $__env->startSection('content'); ?>
    
    <div class="about">
        <div class="about_">
            <img src="../resources/img/map.jpg" alt="#">
        </div>
        <div class="about__">
            <div class="adressen"><span>Адрес:</span> пр. Комарова, 13, Омск, Омская обл., 644112</div>
            <div class="tel"><span>Телефон:</span> 8 (381) 275-24-00</div>
            <div class="email"><span>Сайт:</span> https://omacademy.ru/</div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ciymbfsm/vhyzcip-m1/resources/views/index.blade.php ENDPATH**/ ?>