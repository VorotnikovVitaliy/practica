<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facedes\DB;

class AdminaaddController extends Controller
{
    public function createitem() {

        return view('adminadd');

    }

    public function additem() {
        $additem = new product();

        $additem->img = request('img');
        $additem->name = request('name-item');
        $additem->price = request('price');
        $additem->god = request('god');
        $additem->kategoria = request('kategoria');
        $additem->strana = request('strana');
        $additem->modelika = request('modelika');
        $additem->kol = request('count');

        $additem->save();

        return redirect('/adminadd');
    }
}
