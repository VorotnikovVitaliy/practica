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
}
