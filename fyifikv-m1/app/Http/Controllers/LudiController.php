<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ludi;

class LudiController extends Controller
{
    public function spisokludi() {
        $ludi = ludi::all();
        return view('spisokludi', ['ludi' => $ludi]);
    }
}
