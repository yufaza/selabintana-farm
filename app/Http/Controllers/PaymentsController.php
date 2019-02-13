<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\PurchaseOrder;
class PaymentsController extends Controller
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

    public function confirm(){
        return view('admin.purchase.confirm')
        ->with('payments', Payment::all());
    }

    public function confirm_pay($id){
        $p = Payment::find($id);
        $purchase = PurchaseOrder::find($p->purchase_order_id);
        $purchase->status = "Sedang di Proses";
        $purchase->save();
        return redirect()->back();
    }

}
