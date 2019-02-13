<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'purchase_order_id', 'featured_image'
    ];

    public function purchase_order(){
        return $this->belongsTo('App\PurchaseOrder');
    }
}
