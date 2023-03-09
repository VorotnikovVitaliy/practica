@extends('layouts.app')

@section('content')
    <div class="catalag">
        <div class="catalog_sortirovka">
            <div class="catalog_sortirovka_title">Каталог</div>
            <div class="catalog_sortirovka_sort">
                <p>Сортировка:</p>
                <div class="catalog_sortirovka_sort_">
                    По году производства:
                    <a href="{{ url('/catalog/god/asc') }}">По возрастанию</a>
                    <a href="{{ url('/catalog/god/desc') }}">По убыванию</a>
                </div>
                <div class="catalog_sortirovka_sort_">
                    По наименованию:
                    <a href="{{ url('/catalog/name/asc') }}">По возрастанию</a>
                    <a href="{{ url('/catalog/name/desc') }}">По убыванию</a>
                </div>
                <div class="catalog_sortirovka_sort_">
                    По цене:
                    <a href="{{ url('/catalog/price/asc') }}">По возрастанию</a>
                    <a href="{{ url('/catalog/price/desc') }}">По убыванию</a>
                </div>
            </div>
        </div>
        <div class="catalog">
            @foreach ($product as $a)
            <div class="catalog_item">
                <img src="{{ $a -> img }}" alt="#">
                <div class="catalog_item_name">{{ $a -> name }}</div>
                <div class="catalog_item_price">
                <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{ $a -> id }}"> Заказать</a></button>
                    {{ $a -> price }}
                </div>
                <a class="catalog_item_a" href="/public/singlitem/{{ $a -> id }}"></a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
