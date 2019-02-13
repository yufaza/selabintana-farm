<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'stock', 'price', 'featured_image'
    ];

    public function purchase_order(){
        return $this->belongsToMany('App\PurchaseOrder')->withPivot('quantity');
    }
}
