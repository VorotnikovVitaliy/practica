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


    public function additem(Request $req) {
        $k=$req->file('img');

        // dd($k->getClientOriginalName());
        $fileName=$k->move(public_path('img'), $k->getClientOriginalName());  
        product::create([
            'name'=>$req->input('name-item'),
            'img'=>'/public/img/'.$k->getClientOriginalName(),
            'price'=>$req->input('price'),
            'god'=>$req->input('god'),
            'kategoria'=>$req->input('kategoria'),
            'strana'=>$req->input('strana'),
            'modelika'=>$req->input('modelika'),
            'kol'=>$req->input('count'),
        ]);
        
        return view('adminadd');
    }
}
