<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Basket extends Model
{
    protected $table="baskets";
    protected $fillable=['user_id',
        'product_id',
        'count',];
    public function products(){
    return $this->hasOne(product::class, 'id', 'product_id');
    }
}
