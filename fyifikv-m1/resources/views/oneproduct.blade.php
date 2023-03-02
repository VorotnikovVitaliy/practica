@extends('layouts.app')

@section('content')
    
    <div class="singl_item">
        <div class="singl_item_img">
            <img src="{{ $a -> img }}" alt="{{ $a -> id }}">
            <div class="singl_item_price">{{ $a -> price }}</div>
        </div>
        <div class="singl_item_text">
            <div class="singl_item_name"></div>
            <div class="singl_item_discrip">
                <div class="singl_item_discrip_strana">Страна производитель: {{ $a -> strana }}</div>
                <div class="singl_item_discrip_god">Год выпуска товар: {{ $a -> god }}</div>
                <div class="singl_item_discrip_model">Модель товара: {{ $a -> modelika }}</div>
            </div>
        </div>
    </div>

@endsection