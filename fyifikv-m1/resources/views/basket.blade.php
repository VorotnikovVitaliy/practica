@extends('layouts.app')

@section('content')
    
    <div class="basket">
    @foreach ($p as $z)

        <div class="catalog-item">
            <img src="{{$z->products->img}}" alt="*">
            <p class="catalog-item-name">{{ $z->products->name}}</p>
            <p class="catalog-item-price">{{ $z->products->price}}</p>
            <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{$z->id}}/delete"> Удалить</a></button>
        </div>
    @endforeach
    </div>

@endsection