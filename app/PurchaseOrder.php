<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'order_code', 'payment', 'customer_name', 'customer_phone', 'customer_email', 'customer_address'
    ];

    public function payments(){
        return $this->hasMany('App\Payment');
    }
    public function products(){
        return $this->belongsToMany('App\Product', 'product_purchase_order')
        ->withPivot('quantity');
    }
}
