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
        session('product_list');
        return view('frontend.home')
        ->with('products', Product::all());
        // ->with('title', Setting::first()->site_name)
        // ->with('categories', Category::take(4)->get())
        // ->with('first_post', Post::orderBy('created_at', 'desc')->first())
        // ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->first())
        // ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->first())
        // ->with('budaya', Category::find(1))
        // ->with('tags', Tag::all());
        // ->with('olahraga', Category::find(2))
        // ->with('settings', Setting::first());
    }
    public function addToCart(Request $request){
        $this->validate($request, [
            'quantity' => 'required|numeric'
        ]);
        // session(['key' => 'value']);
        // session([
        // 'id' => $request->id,
        // 'quantity' => $request->quantity
        // ]);
        //$request->session()->flush();
        if (session()->has('product_list')){
            $pl = session()->pull('product_list');
            for($i = 0; $i < count($pl); $i++){
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
                }
            }
            $request->session()->push('product_list', [
                'id' => $request->id,
                'product_name' => $request->product_name,
                'featured_image' => $request->featured_image, 
                'price' => $request->price,
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
        }

        //return dd($request->session()->all());
        Session::flash('success', 'Produk ditambahkan ke dalam keranjang');
        return redirect()->back();
    }

    public function cart()
    {
        if(!session()->has('product_list') && count(session('product_list'))<1){
            Session::flash('warning', 'Anda belum membeli apapun!');
            return redirect()->back();
        } else {
            return view('frontend.cart')->with('products', session('product_list'));
        }
    }
    public function shipping()
    {
        return view('frontend.shipping');
    }
    public function payment()
    {
        return view('frontend.payment');
    }
    public function confirm_payment()
    {
        return view('frontend.confirm_payment');
    }
}
