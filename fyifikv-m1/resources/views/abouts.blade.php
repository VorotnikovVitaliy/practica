@extends('layouts.app') <!-- Шапка сайта сделана в отдельном файле -->

@section('content')
    
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
                        @foreach ($product as $s)
                            @if($loop -> first)
                                <div class="carousel-item active">
                                    <img src="{{ $s -> img }}" class="d-block w-100" alt="{{ $s -> id }}">
                                </div>
                            @else 
                                <div class="carousel-item">
                                    <img src="{{ $s -> img }}" class="d-block w-100" alt="{{ $s -> id }}">
                                </div>
                            @endif
                        @endforeach
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

@endsection