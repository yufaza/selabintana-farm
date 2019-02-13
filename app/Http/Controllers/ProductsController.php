<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.products.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required|max:191',
            'featured_image' => 'required|image',
            'price' => 'required',
            'stock' => 'required'
        ]);
        
        $featured = $request->featured_image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('product', $featured_new_name);

        $post = Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'featured_image' => 'product/' . $featured_new_name,
            'stock' => $request->stock
        ]);

        Session::flash('success', 'Product created successfully');
        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Product::find($id);

        return view('admin.products.edit')->with('product', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'stock' => 'required',
            'price' => 'required'
        ]);

        $tag = Product::find($id);
        $tag->stock = $request->stock;
        $tag->price = $request->price;
        $tag->save();

        Session::flash('success', 'Product updated!');
        return redirect()->route('products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        Session::flash('success', 'Product deleted.');
        return redirect()->back();
    }
}
