<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Payment;
use App\PurchaseOrder;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard')
        ->with('product_count', Product::all()->count())
        ->with('purchase_count', PurchaseOrder::all()->count())
        ->with('payment_count', Payment::all()->count())
        ->with('waiting_payment_count', PurchaseOrder::where('status', '=', 'Menunggu Pembayaran')->get()->count())
        ->with('purchase_payed_count', PurchaseOrder::where('status', '=', 'Menunggu Verifikasi Pembayaran')->get()->count())
        ->with('processed_purchase_count', PurchaseOrder::where('status', '=', 'Sedang di Proses')->get()->count())
        ->with('shipped_purchase_count', PurchaseOrder::where('status', '=', 'Sedang Dikirim')->get()->count())
        ->with('finished_purchase_count', PurchaseOrder::where('status', '=', 'Transaksi Selesai')->get()->count())
        ->with('user_count', User::all()->count());
    }
}
