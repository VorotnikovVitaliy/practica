<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function showcatalog($id = "id", $sort = "desc", $count = "kol") {
        $product = product::where("kol",">", 0) -> orderBy($id, $sort) -> get();
        return view('katalog', ['product' => $product]);
    }

    public function slaiderItems($id = "id", $sort = "desc") {
        $product = product::orderBy($id, $sort) -> limit(5) -> get();
        return view('abouts', ['product' => $product]);
    }

    public function singlproduct($id) {
        $product = product::find($id);
        return view('oneproduct', ['a' => $product]);
    }

    // Сортировка и фильтрация 

    public function GodItem($god = "god", $sort = "asc") {
        $product = product::orderBy($god, $sort) -> get();
        return view('katalog', ['product' => $product]);
    }

    public function NameItem($name = "name", $sort = "asc") {
        $product = product::orderBy($name, $sort) -> get();
        return view('katalog', ['product' => $product]);
    }

    public function PriceItem($price = "name", $sort = "asc") {
        $product = product::orderBy($price, $sort) -> get();
        return view('katalog', ['product' => $product]);
    }
}
