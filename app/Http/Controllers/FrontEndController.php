<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Payment;
use App\PurchaseOrder;
class FrontEndController extends Controller
{
    public function index()
    {
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
    public function cart()
    {
        return view('frontend.cart');
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
