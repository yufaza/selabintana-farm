<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PurchaseOrder;
class PurchaseOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->back();
    }

    public function process(){
        return view('admin.purchase.process')
        ->with('purchases', PurchaseOrder::all());
    }

    public function processed($id){
        $purchase = PurchaseOrder::find($id);
        $purchase->status = "Dalam Proses Pengiriman";
        $purchase->save();
        return redirect()->back();
    }

    public function shipping(){
        return view('admin.purchase.shipping')
        ->with('purchases', PurchaseOrder::all());
    }

    public function complete($id){
        $purchase = PurchaseOrder::find($id);
        $purchase->status = "Transaksi Selesai";
        $purchase->save();
        return redirect()->back();
    }

}
