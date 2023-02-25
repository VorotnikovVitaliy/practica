@extends('layouts.app')

@section('content')
    <div class="catalog">
        @foreach ($ludi as $z)
        <div class="catalog_item">
            <img src="{{ $z -> img }}" alt="">
            <div class="catalog_item_name">{{ $z -> FIO }}</div>
        </div>
        @endforeach
    </div>
@endsection