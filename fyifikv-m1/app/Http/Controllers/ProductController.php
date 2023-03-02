<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function showcatalog($id = "id", $sort = "desc") {
        $product = product::orderBy($id, $sort) -> limit(6) -> get();
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
}
