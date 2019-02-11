<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    public function payment(){
        return $this->hasOne('App\Payment');
    }
    public function products(){
        return $this->belongsToMany('App\Products', 'product_purchase_order')
        ->withPivot('quantity');
    }
}
