@extends('layouts.app')

@section('content')
    <div class="catalag">
        <div class="catalog_sortirovka">
            <div class="catalog_sortirovka_title"></div>
            <div class="catalog_sortirovka_sort">

            </div>
        </div>
        <div class="catalog">
            @foreach ($product as $a)
            <div class="catalog_item">
                <img src="{{ $a -> img }}" alt="#">
                <div class="catalog_item_name">{{ $a -> name }}</div>
                <div class="catalog_item_price">{{ $a -> price }}</div>
                <a class="catalog_item_a" href="/public/singlitem/{{ $a -> id }}"></a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
