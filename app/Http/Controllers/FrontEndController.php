<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Payment;
use App\PurchaseOrder;
use Session;
class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.home')
        ->with('products', Product::all());
    }
    public function addToCart(Request $request){
        $this->validate($request, [
            'quantity' => 'required|numeric'
        ]);
        //$request->session()->flush();

        //jika keranjang sudah terisi
        if (session()->has('product_list') && session()->has('product_qty')){
            $pl = session()->pull('product_list');
            session()->pull('product_qty');
            for($i = 0; $i < count($pl); $i++){
                //id isi keranjang sama dengan barang baru
                if ($pl[$i]['id'] == $request->id){
                    continue;  
                } else {
                    $request->session()->push('product_list', [
                        'id' => $pl[$i]['id'],
                        'product_name' => $pl[$i]['product_name'],
                        'featured_image' => $pl[$i]['featured_image'], 
                        'price' => $pl[$i]['price'],
                        'quantity' => $pl[$i]['quantity']
                    ]);
                    $request->session()->push('product_qty', [
                        'product_id' => $pl[$i]['id'],
                        'quantity' => $pl[$i]['quantity']
                    ]);
                        
                };
            }
            $request->session()->push('product_list', [
                'id' => $request->id,
                'product_name' => $request->product_name,
                'featured_image' => $request->featured_image, 
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);
            $request->session()->push('product_qty', [
                'product_id' => $request->id,
                'quantity' => $request->quantity
            ]);
        } else {
        $request->session()->push('product_list', [
            'id' => $request->id,
            'product_name' => $request->product_name,
            'featured_image' => $request->featured_image, 
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);
        
        $request->session()->push('product_qty', [
            'product_id' => $request->id,
            'quantity' => $request->quantity
        ]);
        }

        //return dd($request->session()->all());
        Session::flash('success', 'Produk ditambahkan ke dalam keranjang');
        return redirect()->back();
    }

    public function cart()
    {
        if(!session()->has('product_list')){
            Session::flash('warning', 'Anda belum membeli apapun!');
            return redirect()->back();
        } else {
            if(count(session('product_list'))<1){
                Session::flash('warning', 'Anda belum membeli apapun!');
                return redirect()->back();
            } else{
                return view('frontend.cart')->with('products', session('product_list'));
            }
        }
    }

    public function flushCart(){
        session()->flush();
        Session::flash('success', 'Keranjang dikosongkan');
        return redirect()->route('home');
    }

    public function shipping()
    {
        if(!session()->has('total')){
            Session::flash('warning', 'Anda belum membeli apapun!');
            return redirect()->route('home');
        } else {
            return view('frontend.shipping');
        }
    }

    public function proceed(Request $request){
        $this->validate($request, [
            'phone' => 'required|numeric'
        ]);
        $order_code = date('ymdHi').$request->phone;
        $purchase = PurchaseOrder::create([
            'order_code' => $order_code,
            'payment' => session('total'),
            'customer_name' => $request->name,
            'customer_phone' => $request->phone,
            'customer_email'=> $request->email,
            'customer_address' => $request->address
        ]);
        $purchase->products()->attach(session('product_qty'));
        session()->flush();

        $po = PurchaseOrder::where('order_code', '=', $order_code)->first();
        return view('frontend.status_result')->with('data', $po);
    }

    public function checkStatus()
    {
        return view('frontend.status_check');
    }

    public function checkPurchase(Request $request)
    {   
        $po = PurchaseOrder::where('order_code', '=', $request->order_code)->first();
        if(!$po){
            Session::flash('warning', 'Pesanan tersebut tidak ditemukan!');
            return redirect()->back();
        } else {
            return view('frontend.status_result')->with('data', $po);
        }
    }

    public function confirm_payment()
    {
        return view('frontend.confirm_payment');
    }

    public function upload_payment(Request $request){
        if(!PurchaseOrder::where('order_code', '=', $request->order_code)->first()){
            Session::flash('warning', 'Kode Pemesanan tidak ditemukan!');
            return redirect()->back();
        }
        $po = PurchaseOrder::where('order_code', '=', $request->order_code)->first();
        $po->status = "Menunggu Verifikasi Pembayaran";
        $featured = $request->featured_image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('payment', $featured_new_name);

        $payment = Payment::create([
            'purchase_order_id' => $po->id,
            'featured_image' => 'payment/' . $featured_new_name
        ]);
        $po->save();

        Session::flash('success', 'Bukti Pembayaran Telah Terkirim!');
        return redirect()->route('home');
    }
}
