<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function showcatalog() {
        $product = product::orderBy("created_at", "asc") -> get();
        return view('katalog', ['product' => $product]);
    }
}
