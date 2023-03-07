
    @extends('layouts.app') <!-- Шапка сайта сделана в отдельном файле -->
    @section('content')
    
    <div class="about">
        <p>Где нас найти</p>
        <div class="about_">
            <img src="../resources/img/map.jpg" alt="#">
        </div>
        <div class="about__">
            <div class="adressen"><span>Адрес:</span> пр. Комарова, 13, Омск, Омская обл., 644112</div>
            <div class="tel"><span>Телефон:</span> 8 (381) 275-24-00</div>
            <div class="email"><span>Сайт:</span> https://omacademy.ru/</div>
        </div>
    </div>
    @endsection