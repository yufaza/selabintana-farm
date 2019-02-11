<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function purchase_order(){
        return $this->belongsToMany('App\PurchaseOrder');
    }
}
