<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BasketController extends Controller
{
    public function baskett() {
        $id_user=Auth::user()->id;
        $p=Basket::where("user_id", $id_user)->get();
        Auth::user()->id;
        return view('basket',compact('p'));
    }

    public function productt($id) {
        $zz=Basket::create([
            'user_id'=>Auth::user()->id,
            'product_id'=>$id,
            'count'=>1,
        ]);
        return redirect('/catalog');
    }
    
    public function deletebasket($id) {
    basket::find($id)->delete();
    return redirect()->route('basket');
    
    }
}
