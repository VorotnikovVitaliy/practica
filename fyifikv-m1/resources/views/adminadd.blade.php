@extends('layouts.app')

@section('content')

    <div class="form-admin">
        <p>Add BD!</p>
        <form action="{{ url('/adminadd') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-add img">
                <input type="file" name="img">
            </div>
            <div class="form-add name">
                <input type="text" placeholder="Name Item" name="name-item">
            </div>
            <div class="form-add price">
                <input type="number" placeholder="Price Item" name="price">
            </div>
            <div class="form-add god">
                <input type="number" placeholder="God Item" name="god">
            </div>
            <div class="form-add kategoria">
                <input type="number" placeholder="Kategoria Item" name="kategoria">
            </div>
            <div class="form-add strana">
                <input type="text" placeholder="Strana" name="strana">
            </div>
            <div class="form-add modelika">
                <input type="text" placeholder="Madelika Item" name="modelika">
            </div>
            <div class="form-add kol-vo">
                <input type="number" placeholder="Count" name="count">
            </div>
            <div class="form-add submit">
                <input type="submit" placeholder="Add">
            </div>
        </form>

        <div class="admin-add-panel"></div>
    </div>

@endsection
